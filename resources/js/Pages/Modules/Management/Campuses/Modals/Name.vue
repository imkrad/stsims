<template>
    <b-modal v-model="showModal" style="--vz-modal-width: 500px;" header-class="p-3 bg-light" :title="(editable) ? 'Update name' : 'Add Campus name'" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow>
                <BCol lg="12">
                    <BRow class="g-3">
                        
                        <BCol lg="12" class="mt-4">
                            <div class="alert alert-warning material-shadow fs-12" role="alert">
                                Previous school names used in the list of scholars, allowing for easy search in the new database.
                            </div>
                        </BCol>
                        <BCol lg="12"><hr class="text-muted mt-n3"/></BCol>
                        <BCol lg="12" class="mt-n1">
                            <InputLabel value="Name" :message="form.errors.name"/>
                            <TextInput v-model="form.name" type="text" class="form-control" placeholder="Please enter name" @input="handleInput('name')" :light="true" />
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
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    components: {InputLabel, TextInput },
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                name: null,
                campus_id: null,
                option: 'campus-name'
            }),
            index: null,
            showModal: false,
            editable: false
        }
    },
    methods: { 
        show(id){
            this.form.reset();
            this.form.campus_id = id;
            this.editable = false;
            this.showModal = true;
        },
        edit(data){
            this.form.reset();
            this.form.id = data.id;
            this.form.name = data.name;
            this.form.campus_id = data.campus_id;
            this.editable = true;
            this.showModal = true;
        },
        submit(){
            if(this.editable){
                this.form.put('/management/update',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.hide();
                    },
                });
            }else{
                this.form.post('/management',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.form.reset();
                        this.hide();
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