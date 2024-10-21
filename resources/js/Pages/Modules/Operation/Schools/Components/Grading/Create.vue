<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" :title="(editable) ? 'Update Grading' : 'Add Grading'" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow>
                <BCol lg="12">
                    <BRow class="g-3 mt-n1">
                        <BCol lg="12" class="mt-1">
                            <InputLabel value="Grade" :message="form.errors.grade"/>
                            <TextInput v-model="form.grade" type="text" class="form-control" placeholder="Please enter grade" @input="handleInput('grade')" :light="true" />
                        </BCol>
                        <BCol lg="6" class="mt-0">
                            <InputLabel value="Upper Limit" :message="form.errors.upper_limit"/>
                            <TextInput v-model="form.upper_limit" type="text" class="form-control" placeholder="Please enter upper limit" @input="handleInput('upper_limit')" :light="true" />
                        </BCol>
                        <BCol lg="6" class="mt-0">
                            <InputLabel value="Lower Limit" :message="form.errors.lower_limit"/>
                            <TextInput v-model="form.lower_limit" type="text" class="form-control" placeholder="Please enter lower limit" @input="handleInput('lower_limit')" :light="true" />
                        </BCol>
                        <BCol lg="12"><hr class="text-muted mt-0 mb-n3"/></BCol>
                        <BCol lg="8"  style="margin-top: 13px; margin-bottom: -12px;" class="fs-12" :class="form.errors.is_failed ? 'text-danger' : ''">Is it a failing grade?</BCol>
                        <BCol lg="4"  style="margin-top: 13px; margin-bottom: -12px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" id="customRadio1" class="custom-control-input me-2" :value="true" v-model="form.is_failed">
                                        <label class="custom-control-label fw-normal fs-12" for="customRadio1">Yes</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" id="customRadio2" class="custom-control-input me-2" :value="false" v-model="form.is_failed">
                                        <label class="custom-control-label fw-normal fs-12" for="customRadio2">No</label>
                                    </div>
                                </div>
                            </div>
                        </BCol>
                        <BCol lg="12"><hr class="text-muted mt-n2 mb-n4"/></BCol>
                        <BCol lg="8"  style="margin-top: 6px; margin-bottom: -12px;" class="fs-12" :class="form.errors.is_incomplete ? 'text-danger' : ''">Is it an incomplete grade?</BCol>
                        <BCol lg="4" style="margin-top: 6px; margin-bottom: -12px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" id="customRadio1" class="custom-control-input me-2" :value="true" v-model="form.is_incomplete">
                                        <label class="custom-control-label fw-normal fs-12" for="customRadio1">Yes</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" id="customRadio2" class="custom-control-input me-2" :value="false" v-model="form.is_incomplete">
                                        <label class="custom-control-label fw-normal fs-12" for="customRadio2">No</label>
                                    </div>
                                </div>
                            </div>
                        </BCol>
                        <BCol lg="12"><hr class="text-muted mt-n2 mb-n3"/></BCol>
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
    props: ['campus'],
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                grade: null,
                upper_limit: null,
                lower_limit: null,
                is_failed: null,
                is_incomplete: null,
                campus_id: this.campus,
                option: 'campus-grading'
            }),
            showModal: false,
            editable: false
        }
    },
    watch: {
        'form.is_failed'(newVal) {
            if (newVal === true) {
                this.form.is_incomplete = false;
            }
        },
        'form.is_incomplete'(newVal) {
            if (newVal === true) {
                this.form.is_failed = false;
            }
        }
    },
    methods: { 
        show(){
            this.form.reset();
            this.showModal = true;
        },
        edit(data){
            this.form.id = data.id;
            this.form.grade = data.grade;
            this.form.upper_limit = data.upper_limit;
            this.form.lower_limit = data.lower_limit;
            this.form.is_failed = (data.is_failed) ? true : false;
            this.form.is_incomplete = (data.is_incomplete) ? true : false;
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