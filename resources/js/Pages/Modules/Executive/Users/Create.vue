<template>
    <b-modal v-model="showModal" style="--vz-modal-width: 650px;" header-class="p-3 bg-light" :title="(editable) ? 'Update Staff' : 'Add Staff'" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow>
                <BCol lg="12">
                    <div>
                        <h6 class="mb-1">General Information</h6>
                        <p class="text-muted fs-11 mt-n1">Please ensure the user's profile information is accurate and valid. </p>
                    </div>
                    <div>
                        <BRow class="g-3">
                            <BCol lg="12"><hr class="text-muted mt-n1 mb-n4"/></BCol>
                            <BCol lg="4" class="mt-1">
                                <InputLabel for="firstname" value="Firstname" :message="form.errors.firstname"/>
                                <TextInput id="firstname" v-model="form.firstname" type="text" class="form-control" placeholder="Please enter firstname" @input="handleInput('firstname')" :light="true" />
                            </BCol>
                            <BCol lg="4" class="mt-1">
                                <InputLabel for="middlename" value="Middlename" :message="form.errors.middlename"/>
                                <TextInput id="middlename" v-model="form.middlename" type="text" class="form-control" placeholder="Please enter middlename" @input="handleInput('middlename')" :light="true"/>
                            </BCol>
                             <BCol lg="4" class="mt-1">
                                <InputLabel for="lastname" value="Lastname" :message="form.errors.lastname"/>
                                <TextInput id="lastname" v-model="form.lastname" type="text" class="form-control" placeholder="Please enter lastname" @input="handleInput('lastname')" :light="true"/>
                            </BCol>
                            <BCol lg="4" class="mt-0">
                                <InputLabel for="email" value="Email" :message="form.errors.email"/>
                                <TextInput id="email" v-model="form.email" type="email" class="form-control" placeholder="Please enter email" @input="handleInput('email')" :light="true"/>
                            </BCol>
                            <BCol lg="4" class="mt-0">
                                <InputLabel for="username" value="Username" :message="form.errors.username"/>
                                <TextInput id="username" v-model="form.username" type="text" class="form-control" placeholder="Please enter username" @input="handleInput('username')" :light="true"/>
                            </BCol>
                            
                            <BCol lg="4" class="mt-0">
                                <InputLabel for="mobile" value="Mobile" :message="form.errors.mobile"/>
                                <TextInput id="mobile" v-model="form.mobile" type="text" class="form-control" placeholder="Please enter mobile" @input="handleInput('mobile')" :light="true"/>
                            </BCol>
                            <BCol lg="12"><hr class="text-muted mt-n1 mb-1"/></BCol>
                            <BCol lg="6"  style="margin-top: 10px; margin-bottom: -16px;">
                               <div class="row">
                                    <div class="col-md-4">
                                        <div class="custom-control custom-radio mb-3">
                                            <input type="radio" id="customRadio1" class="custom-control-input me-2" value="Male" v-model="form.gender">
                                            <label class="custom-control-label fw-normal fs-12" for="customRadio1">Male</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="custom-control custom-radio mb-3">
                                            <input type="radio" id="customRadio2" class="custom-control-input me-2" value="Female" v-model="form.gender">
                                            <label class="custom-control-label fw-normal fs-12" for="customRadio2">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </BCol>
                            <BCol lg="12"><hr class="text-muted mt-n1 mb-n3"/></BCol>
                            <BCol lg="6" class="mt-2">
                                <InputLabel value="Agency" :message="form.errors.agency_id"/>
                                <Multiselect :options="dropdowns.agencies" object v-model="form.agency" label="name" :searchable="true" placeholder="Select Agency" />
                            </BCol>
                            <BCol lg="6" class="mt-2">
                                <InputLabel value="Role" :message="form.errors.role_id"/>
                                <Multiselect :options="dropdowns.roles" v-model="form.role_id" label="name" :searchable="true" placeholder="Select Role" />
                            </BCol>
                            <BCol lg="12" class="mt-1" v-if="form.role_id === 3">
                                <InputLabel value="Province" :message="form.errors.province"/>
                                <Multiselect :options="provinces" v-model="form.province" label="name" :searchable="true" placeholder="Select Province" />
                            </BCol>
                            <BCol lg="12" class="mt-1" v-if="form.role_id === 4">
                                <InputLabel value="School" :message="form.errors.school"/>
                                <Multiselect :options="schools" @search-change="fetchSchools()" v-model="form.school" label="name" :searchable="true" placeholder="Select School" />
                            </BCol>
                        </BRow>
                    </div>    
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
    props: ['dropdowns'],
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                firstname: null,
                lastname: null,
                middlename: null,
                email: null,
                mobile: null,
                username: null,
                gender: null,
                agency_id: null,
                agency: null,
                role_id: null,
                province: null,
                region: null,
                school: null,
                option: 'user'
            }),
            provinces: [],
            schools: [],
            showModal: false,
            editable: false
        }
    },
    watch: {
        "form.role_id"(newVal){
            if(newVal === 3){
                this.fetchProvince(this.form.region);
            }
            this.form.province = null;
        },
        "form.agency"(val){
            if(val){
                this.form.agency_id = val.value;
                this.form.region = val.region;
                if(this.form.role_id === 3){
                    this.form.province = null;
                    this.fetchProvince(this.form.region);
                }
            }
          
        }
    },
    methods: { 
        show(){
            this.form.reset();
            this.showModal = true;
        },
        submit(){
            if(this.editable){
                this.form.put('/executive/update',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.form.reset();
                        this.hide();
                    },
                });
            }else{
                this.form.post('/executive',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.form.reset();
                        this.hide();
                        this.$emit('success',true);
                    },
                });
            }
        },
        fetchProvince(code){
            axios.get('/search',{
                params: {
                    option: 'provinces',
                    code: code
                }
            })
            .then(response => {
                this.provinces = response.data;
            })
            .catch(err => console.log(err));
        },
        fetchSchools(code){
            axios.get('/search',{
                params: {
                    option: 'schools',
                    code: code,
                    agency: this.form.agency_id,
                }
            })
            .then(response => {
                this.schools = response.data;
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