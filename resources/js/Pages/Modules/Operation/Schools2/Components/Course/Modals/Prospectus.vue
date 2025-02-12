<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" :title="(editable) ? 'Update Prospectus' : 'Add Prospectus'" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow>
                <BCol lg="12">
                    <BRow class="g-3">
                        <BCol lg="12" class="mt-4 mb-n2">
                            <InputLabel value="Name"/>
                            <TextInput v-model="form.school_year" type="text" class="form-control" placeholder="Please enter school year" @input="handleInput('name')" :light="true" />
                        </BCol>
                        <BCol lg="12">
                            <div class="alert alert-info alert-dismissible alert-label-icon label-arrow fade show material-shadow fs-12" role="alert">
                                <i class="ri-airplay-line label-icon"></i>It will automatically generate a prospectus based on the <b>year set</b> for the course and the school <b>term type</b>. All you need to do is add the subjects.
                            </div>
                        </BCol>
                    </BRow>  
                </BCol>
            </BRow>
        </form>
          <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="submit('ok')" variant="primary" :disabled="form.processing" block>Submit</b-button>
        </template>
    </b-modal>
</template>
<script>
import { useForm } from '@inertiajs/vue3';
import Multiselect from "@vueform/multiselect";
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    components: {InputLabel, TextInput, Multiselect },
    props: ['regions'],
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                school_year: null,
                term: null,
                years: null,
                course_id: null,
                option: 'prospectus'
            }),
            index: null,
            showModal: false,
            editable: false,
        }
    },
    methods: { 
        show(term,years,id){
            this.form.reset();
            this.form.course_id = id;
            this.form.term = term;
            this.form.years = years;
            this.showModal = true;
        },
        submit(){
            if(this.editable){
                this.form.put('/management/update',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.form.reset();
                        this.hide();
                    },
                });
            }else{
                this.form.post('/management',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.form.reset();
                        this.hide();
                        this.$emit('success',true);
                    },
                });
            }
        },

        handleInput(field) {
            this.form.errors[field] = false;
        },
        hide(){
            this.editable = false;
            this.showModal = false;
        }
    }
}
</script>