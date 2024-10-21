<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" :title="(editable) ? 'View Certificate' : 'Add Certificate'" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow>
                <BCol lg="12">
                    <BRow class="g-3 mt-1">
                        <BCol lg="12" class="mt-1">
                            <InputLabel value="Course"/>
                            <TextInput readonly v-model="form.course" type="text" class="form-control" :light="true" />
                        </BCol>
                        <BCol lg="12"><hr class="text-muted mt-n1 mb-n3"/></BCol>
                        <BCol lg="6" class="mt-1">
                            <InputLabel value="Start At" :message="form.errors.start_at"/>
                            <TextInput v-model="form.type" type="text" class="form-control" placeholder="Please enter start at" @input="handleInput('start_at')" :light="true" />
                        </BCol>
                        <BCol lg="6" class="mt-1">
                            <InputLabel value="End At" :message="form.errors.end_at"/>
                            <TextInput v-model="form.years" type="text" class="form-control" placeholder="Please enter end at" @input="handleInput('end_at')" :light="true" />
                        </BCol>
                        <BCol lg="12" class="mt-0">
                            <InputLabel value="Certification" :message="form.errors.certification_id"/>
                            <Multiselect :options="certifications"  v-model="form.certification_id" label="name" :searchable="true" placeholder="Select Certification" />
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
    props: ['campus','certifications'],
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                course: null,
                start_at: null,
                end_at: null,
                certification_id: null,
                course_id: null,
                option: 'campus-course-certification'
            }),
            showModal: false,
            editable: false
        }
    },
    methods: { 
        show(id,course){
            this.form.reset();
            this.form.course_id = id;
            this.form.course = course;
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