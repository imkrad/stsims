<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" :title="(editable) ? 'Update Course' : 'Add Course'" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow>
                <BCol lg="12">
                    <BRow class="g-3 mt-n1">
                        <BCol lg="12" class="mt-1" v-if="editable">
                            <TextInput readonly v-model="form.course.shortcut" type="text" class="form-control" placeholder="Please enter type" @input="handleInput('type')" :light="true" />
                        </BCol>
                        <BCol lg="6" class="mt-1">
                            <InputLabel value="Type" :message="form.errors.type"/>
                            <TextInput v-model="form.type" type="text" class="form-control" placeholder="Please enter type" @input="handleInput('type')" :light="true" />
                        </BCol>
                        <BCol lg="6" class="mt-1">
                            <InputLabel value="Years" :message="form.errors.years"/>
                            <TextInput v-model="form.years" type="text" class="form-control" placeholder="Please enter years" @input="handleInput('years')" :light="true" />
                        </BCol>
                        <BCol lg="12" class="mt-0" v-if="!editable">
                            <InputLabel value="Course" :message="form.errors.course_id"/>
                            <Multiselect :options="courses" @search-change="fetchCourses()"  v-model="form.course_id" label="name" :searchable="true" placeholder="Select Course" />
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
    props: ['campus','type'],
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                type: null,
                years: null,
                course_id: null,
                course: null,
                is_active: (this.type == 'Private') ? 0 : 1,
                campus_id: this.campus,
                option: 'campus-course'
            }),
            courses: [],
            showModal: false,
            editable: false
        }
    },
    methods: { 
        show(){
            this.form.reset();
            this.showModal = true;
        },
        edit(data){
            this.form.id = data.id;
            this.form.type = data.type;
            this.form.years = data.years;
            this.form.course = data.course;
            this.form.course_id = data.course_id;
            this.form.campus_id = data.campus_id;
            this.editable = true;
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
        fetchCourses(code){
            axios.get('/search',{
                params: {
                    option: 'courses',
                    code: code
                }
            })
            .then(response => {
                this.courses = response.data;
            })
            .catch(err => console.log(err));
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