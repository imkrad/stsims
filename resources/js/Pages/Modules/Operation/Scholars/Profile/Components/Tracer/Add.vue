<template>
    <b-modal v-model="showModal"  :style="(form.type == 'Employment Information') ? (form.employment == 'Employed Locally' || form.employment == 'Employed Abroad') ? '--vz-modal-width: 1050px' : '--vz-modal-width: 750px' : ''" header-class="p-3 bg-light" title="Add Tracer" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow>
                <BCol lg="12">
                    <BRow class="g-3">
                        <BCol lg="12" class="mt-4">
                            <Multiselect :options="types" v-model="form.type" label="name" placeholder="Select Type" />
                        </BCol>
                        <BCol lg="12" class="mt-0 mb-n3">
                            <hr class="text-muted"/>
                        </BCol>
                        <template v-if="form.type == 'Employment Information'">
                            <BCol lg="12" style="margin-top: 13px; margin-bottom: -5px;">
                                <div class="d-flex position-relative">
                                    <div class="flex-shrink-0 fs-12" :class="(form.errors.employment) ? 'text-danger' : ''">
                                        Employment Type :
                                    </div>
                                    <div class="flex-grow-1 ms-2"></div>
                                    <div class="flex-shrink-0">
                                        <div class="d-inline-block" v-for="(list,index) in employments"  v-bind:key="index">
                                        <div class="custom-control custom-radio mb-3 me-3">
                                            <input type="radio" id="customRadio1" class="custom-control-input me-2" @input="handleInput('is_personal')" :value="list" v-model="form.employment">
                                            <label class="custom-control-label fw-normal" for="customRadio1">{{list}}</label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </BCol>  
                            <BCol lg="12" class="mt-n3 mb-n4"><hr class="text-muted"/></BCol>
                            <template v-if="form.employment != 'Self-Employed' && form.employment != 'Unemployed' && form.employment != null">
                                <!-- <BCol lg="12" class="mt-n3 mb-n4"><hr class="text-muted"/></BCol> -->
                                <BCol lg="12" style="margin-top: 13px; margin-bottom: -5px;">
                                    <div class="d-flex position-relative">
                                        <div class="flex-shrink-0 fs-12" :class="(form.errors.sector || form.errors.sectorothers) ? 'text-danger' : ''" :style="(form.sector == 'Others') ? 'margin-top: 6px' : ''">
                                            Sector :
                                        </div>
                                        <div class="flex-grow-1 ms-2"></div>
                                        <div class="flex-shrink-0">
                                            <div class="d-inline-block" v-for="(list,index) in sectors"  v-bind:key="index">
                                                <div class="custom-control custom-radio mb-3 me-3" :class="(form.sector == 'Others') ? 'mt-1' : ''">
                                                    <input type="radio" id="customRadio1" class="custom-control-input me-2" @input="handleInput('sector')" :value="list" v-model="form.sector">
                                                    <label class="custom-control-label fw-normal" for="customRadio1">{{list}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-1" v-if="form.sector == 'Others'">
                                            <TextInput v-model="form.sectorothers" type="text" style="width: 250px;" class="form-control mt-n1 mb-3" placeholder="Please Specify" @input="handleInput('company')" :light="true" />
                                        </div>
                                    </div>
                                </BCol>
                                <BCol lg="12" class="mt-n3 mb-n4"><hr class="text-muted"/></BCol><BCol lg="12" style="margin-top: 13px; margin-bottom: -5px;">
                                    <div class="d-flex position-relative">
                                        <div class="flex-shrink-0 fs-12" :class="(form.errors.status || form.errors.statusothers) ? 'text-danger' : ''" :style="(form.status == 'Others') ? 'margin-top: 6px' : ''">
                                            Employment Status :
                                        </div>
                                        <div class="flex-grow-1 ms-2"></div>
                                        <div class="flex-shrink-0">
                                            <div class="d-inline-block" v-for="(list,index) in statuses"  v-bind:key="index">
                                                <div class="custom-control custom-radio mb-3 me-3" :class="(form.status == 'Others') ? 'mt-1' : ''">
                                                    <input type="radio" id="customRadio1" class="custom-control-input me-2" @input="handleInput('status')" :value="list" v-model="form.status">
                                                    <label class="custom-control-label fw-normal" for="customRadio1">{{list}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-1" v-if="form.status == 'Others'">
                                            <TextInput v-model="form.statusothers" type="text" style="width: 250px; margin-bottom: 13px;" class="form-control mt-n1" placeholder="Please Specify" @input="handleInput('company')" :light="true" />
                                        </div>
                                    </div>
                                </BCol>
                                <BCol lg="12" class="mt-n3 mb-n4"><hr class="text-muted"/></BCol><BCol lg="12" style="margin-top: 13px; margin-bottom: -5px;">
                                    <div class="d-flex position-relative">
                                        <div class="flex-shrink-0 fs-12" :class="(form.errors.occupationval) ? 'text-danger' : ''" style="margin-top: 6px;">
                                            Occupation :
                                        </div>
                                        <div class="flex-grow-1 ms-2"></div>
                                        <div class="flex-shrink-0">
                                            <div class="d-inline-block" v-for="(list,index) in occupations" v-bind:key="index">
                                                <div class="custom-control custom-radio mb-3 me-3 mt-1">
                                                    <input type="radio" id="customRadio1" class="custom-control-input me-2" @input="handleInput('occupation')" :value="list" v-model="form.occupation">
                                                    <label class="custom-control-label fw-normal" for="customRadio1">{{list}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-1">
                                            <TextInput v-if="form.occupation == 'Non-S&T'" style="width: 250px; margin-bottom: 13px;" v-model="form.occupationval" type="text" class="form-control mt-n1" placeholder="Please Specify" @input="handleInput('company')" :light="true" />
                                            <Multiselect class="mt-n1" style="width: 250px; margin-bottom: 13px;" v-else :options="snts" label="name" v-model="form.occupationval" :searchable="true" placeholder="Select S&T" />
                                        </div>
                                    </div>
                                </BCol>
                                <BCol lg="12" class="mt-n3 mb-n4"><hr class="text-muted"/></BCol>
                                <BCol lg="6" class="mt-2">
                                    <InputLabel value="Designation" :message="form.errors.designation"/>
                                    <TextInput v-model="form.designation" type="text" class="form-control" placeholder="Please enter designation" @input="handleInput('designation')" :light="true" />
                                </BCol>
                                <BCol lg="6" class="mt-2">
                                    <InputLabel value="Date" :message="form.errors.designation"/>
                                    <TextInput v-model="form.date" type="text" class="form-control" placeholder="ex. January 20, 2025 - Present" @input="handleInput('date')" :light="true" />
                                </BCol>
                                <BCol lg="6" class="mt-0">
                                    <InputLabel value="Company Name" :message="form.errors.company"/>
                                    <TextInput v-model="form.company" type="text" class="form-control" placeholder="Please enter company name" @input="handleInput('company')" :light="true" />
                                </BCol>
                                <BCol lg="6" class="mt-0">
                                    <InputLabel value="Company Address" :message="form.errors.address"/>
                                    <TextInput v-model="form.address" type="text" class="form-control" placeholder="Please enter company address" @input="handleInput('address')" :light="true" />
                                </BCol>
                            </template>
                            <template v-if="form.employment == 'Self-Employed'">
                                <BCol lg="6" class="mt-2">
                                    <InputLabel value="Business Name" :message="form.errors.name"/>
                                    <TextInput v-model="form.name" type="text" class="form-control" placeholder="Please enter business name" @input="handleInput('designation')" :light="true" />
                                </BCol>
                                <BCol lg="6" class="mt-2">
                                    <InputLabel value="Business Address" :message="form.errors.address"/>
                                    <TextInput v-model="form.address" type="text" class="form-control" placeholder="Please enter business address" @input="handleInput('date')" :light="true" />
                                </BCol>
                                <BCol lg="6" class="mt-0">
                                    <InputLabel value="Business Type" :message="form.errors.business"/>
                                    <TextInput v-model="form.business" type="text" class="form-control" placeholder="Please enter business type" @input="handleInput('company')" :light="true" />
                                </BCol>
                                <BCol lg="6" class="mt-0">
                                    <InputLabel value="Years of Operation" :message="form.errors.years"/>
                                    <TextInput v-model="form.years" type="text" class="form-control" placeholder="Please enter years of operation" @input="handleInput('address')" :light="true" />
                                </BCol>
                            </template>
                            <template v-if="form.employment == 'Unemployed'">
                                <BCol lg="12" class="mt-2">
                                    <InputLabel value="Reasons" :message="form.errors.reason"/>
                                    <Multiselect :options="reasons" v-model="form.reason" label="name" placeholder="Select Reason" />
                                </BCol>
                            </template>
                        </template>
                        <template v-if="form.type == 'Professional Affiliations'">
                            <BCol lg="12" class="mt-2">
                                <InputLabel value="Organization" :message="form.errors.organization"/>
                                <TextInput v-model="form.organization" type="text" class="form-control" placeholder="Please enter designation" @input="handleInput('designation')" :light="true" />
                            </BCol>
                            <BCol lg="12" class="mt-0">
                                <InputLabel value="Address" :message="form.errors.address"/>
                                <TextInput v-model="form.address" type="text" class="form-control" placeholder="Please enter address" @input="handleInput('address')" :light="true" />
                            </BCol>
                            <BCol lg="6" class="mt-0">
                                <InputLabel value="Position" :message="form.errors.position"/>
                                <TextInput v-model="form.position" type="text" class="form-control" placeholder="Please enter position" @input="handleInput('position')" :light="true" />
                            </BCol>
                            <BCol lg="6" class="mt-0">
                                <InputLabel value="Duration" :message="form.errors.duration"/>
                                <TextInput v-model="form.duration" type="text" class="form-control" placeholder="Please enter duration" @input="handleInput('duration')" :light="true" />
                            </BCol>
                        </template>
                        <template v-if="form.type == 'Research and Development Involvement'">
                            <BCol lg="12" class="mt-2">
                                <InputLabel value="Title Research" :message="form.errors.title"/>
                                <TextInput v-model="form.title" type="text" class="form-control" placeholder="Please enter title" @input="handleInput('title')" :light="true" />
                            </BCol>
                            <BCol lg="6" class="mt-0">
                                <InputLabel value="Location/Duration" :message="form.errors.duration"/>
                                <TextInput v-model="form.duration" type="text" class="form-control" placeholder="Please enter location/duration" @input="handleInput('duration')" :light="true" />
                            </BCol>
                            <BCol lg="6" class="mt-0">
                                <InputLabel value="Fund Source" :message="form.errors.fundsource"/>
                                <TextInput v-model="form.fundsource" type="text" class="form-control" placeholder="Please enter fund source" @input="handleInput('fundsource')" :light="true" />
                            </BCol>
                            <BCol lg="12" class="mt-0">
                                <InputLabel value="Nature of Involvement" :message="form.errors.nature"/>
                                <TextInput v-model="form.nature" type="text" class="form-control" placeholder="Please enter designation" @input="handleInput('nature')" :light="true" />
                            </BCol>
                        </template>
                        <template v-if="form.type == 'Awards and Recognitions Received'">
                            <BCol lg="12" class="mt-2">
                                <InputLabel value="Title of Award" :message="form.errors.title"/>
                                <TextInput v-model="form.title" type="text" class="form-control" placeholder="Please enter title" @input="handleInput('title')" :light="true" />
                            </BCol>
                            <BCol lg="12" class="mt-0">
                                <InputLabel value="Date" :message="form.errors.date"/>
                                <TextInput v-model="form.date" type="date" class="form-control" placeholder="Please enter title" @input="handleInput('title')" :light="true" />
                            </BCol>
                            <BCol lg="12" class="mt-0">
                                <InputLabel value="Awarding Body" :message="form.errors.awardingbody"/>
                                <TextInput v-model="form.awardingbody" type="text" class="form-control" placeholder="Please enter title" @input="handleInput('title')" :light="true" />
                            </BCol>
                        </template>
                    </BRow>  
                </BCol>
            </BRow>
        </form>
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="submit('ok')" variant="primary" v-if="form.type" :disabled="form.processing" block>Submit</b-button>
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
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                name: null,
                business: null,
                years: null,
                designation: null,
                date: null,
                company: null,
                address: null,
                type: null,
                employment: null,
                sector: null,
                sectorothers: null,
                status: null,
                statusothers: null,
                occupation: null,
                occupationval: null,
                organization: null,
                position: null,
                duration: null,
                title: null,
                fundsource: null,
                duration: null,
                nature: null,
                awardingbody: null,
                reason: null,
                module: 'tracer'
            }),
            types: ['Employment Information','Professional Affiliations','Research and Development Involvement','Awards and Recognitions Received'],
            employments: ['Employed Locally','Employed Abroad','Self-Employed','Unemployed'],
            sectors: ['Government','Private','NGO/Foundation','Academe','Others'],
            statuses: ['Permanent','Temporary','Contractual','Part-Time','Job Order','Others'],
            occupations: ['S&T','Non-S&T'],
            snts: [
                'Engineering & Technology',
                'Life Sciences','Physical and Earth Science',
                'Agricultural and Veterenary Science',
                'Medical and Health Services',
                'Science / Mathematics Teaching',
                'IT / ICT',
                'Mathematicians, Actuaries and Statisticians',
                'Others'
            ],
            reasons: [
                'Pursuing Graduate Studies','Family / Personal Matters','Preparing for licensure exam','End of contract and now looking for a job',
                'Recently Resigned and still looking for a job','Recently graduated and looking for a job','Planning / Preparing to work abroad','Others'
            ],
            showModal: false,
            editable: false,
        }
    },
    watch: {
        "form.occupation"(newVal){
            this.form.occupationval = null;
        },
        "form.sector"(newVal){
            this.form.sectorothers = null;
        },
        "form.status"(newVal){
            this.form.statusothers = null;
        }
    },
    methods: { 
        show(id){
            this.form.reset();
            this.form.id = id;
            this.editable = false;
            this.showModal = true;
        },
        submit(){
            this.form.post('/scholars',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.form.reset();
                    this.hide();
                },
            });
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