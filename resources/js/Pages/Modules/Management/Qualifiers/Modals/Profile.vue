<template>
    <b-modal v-model="showModal" title="View Profile" size="lg" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>    
        <template v-slot:header>
            <div style="border-bottom: 1px solid #ccc; width: 100%;">
                <i @click="showModal=false" class="ri-close-circle-fill float-end me-3" style="cursor:pointer; font-size: 30px;"></i>
                <b-row class="mt-n1" style="margin-bottom: 12px;">
                    <b-col md>
                        <b-row class="align-items-center g-1">
                            <b-col md="auto">
                                <b-img class="img-thumbnail rounded-circle" style="width: 50px; height: 50px;" alt="img" src="/images/avatars/avatar.jpg" data-holder-rendered="true"></b-img>
                            </b-col>
                            <b-col md>
                                <div class="ms-2 mt-n2">
                                    <h5 class="modal-title fs-15">{{user.profile.lastname}}, {{user.profile.firstname}} {{(user.profile.middlename) ? user.profile.middlename[0] : ''}}.</h5>
                                    <div class="hstack gap-3 flex-wrap mt-0 mb-n2">
                                        <div class="text-primary"><i class="ri-account-circle-fill align-bottom me-1"></i>
                                            <span class="text-body text-muted fs-12">{{user.spas_id }}</span>
                                        </div>
                                        <div class="vr"></div>
                                        <div class="text-primary"><i class="ri-map-pin-2-fill align-bottom me-1"></i>
                                            <span class="text-body text-muted fs-12">
                                                {{(user.address.municipality) ? user.address.municipality.name+',' : ''}}
                                                {{(user.address.province) ? user.address.province.name+',' : ''}}
                                                {{(user.address.region) ? user.address.region.region : ''}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </b-col>
                        </b-row>
                    </b-col>
                </b-row>
            </div>
        </template>
        <div class="mb-3 mt-n1">
            <div class="row mb-2">
                <div class="col-sm-3">
                    <div class="p-1 border border-dashed rounded">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm me-0">
                                <div class="avatar-title rounded bg-transparent text-primary fs-24"><i
                                        class="ri-file-copy-2-fill"></i></div>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-muted fs-11 mb-0">Status :</p>
                                <span :class="'badge '+user.status.color+' '+user.status.others">{{user.status.name}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="p-1 border border-dashed rounded">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm me-0">
                                <div class="avatar-title rounded bg-transparent text-primary fs-24"><i
                                        class="mdi mdi-seal-variant"></i></div>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-muted fs-11 mb-0">Program :</p>
                                <h5 class="fs-13 text-success mb-0">{{user.program.name}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="p-1 border border-dashed rounded">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm me-0">
                                <div class="avatar-title rounded bg-transparent text-primary fs-24"><i
                                        class="ri-award-line"></i></div>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-muted fs-11 mb-0">Type :</p>
                                <h5 class="fs-13 mb-0">{{user.program.type.name}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="p-1 border border-dashed rounded">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm me-0">
                                <div class="avatar-title rounded bg-transparent text-primary fs-20"><i class="ri-calendar-2-line"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-muted fs-11 mb-0">Qualified Year:</p>
                                <h5 class="fs-13 mb-0">{{user.qualified_year}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="text-muted"/>
            <b-form class="row customform mb-n1 mt-n2 g-2">
                <div class="col-lg-3">
                    <div class="form-floating">
                        <input type="text" v-model="user.profile.lastname" class="form-control" readonly>
                        <label>Lastname</label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-floating">
                        <input type="text" v-model="user.profile.firstname" class="form-control" readonly>
                        <label>Firstname</label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-floating">
                        <input type="text" v-model="user.profile.middlename" class="form-control" readonly>
                        <label>Middlename</label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-floating">
                        <input type="text" v-model="user.profile.suffix" class="form-control" readonly>
                        <label>Suffix</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input type="text" v-model="user.address.region.region" class="form-control" readonly>
                        <label>Region</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input type="text" v-model="user.address.province.name" class="form-control" readonly>
                        <label>Province</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input type="text" v-model="user.address.municipality.name" class="form-control" readonly>
                        <label>Municipality</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input type="text" v-model="user.address.barangay.name" class="form-control" readonly>
                        <label>Barangay</label>
                    </div>
                </div>
                <div class="col-md-12 mt-n1 mb-n2">
                    <hr class="text-muted"/>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" v-model="user.school" class="form-control" readonly>
                        <label>School</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" v-model="user.course" class="form-control" readonly>
                        <label>Course</label>
                    </div>
                </div>
            </b-form>
        </div>
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
        </template>
    </b-modal>
</template>
<script>
import Multiselect from "@vueform/multiselect";
export default {
    props: ['statuses'],
    components: { Multiselect },
    data(){
        return {
            currentUrl: window.location.origin,
            user: {
                status: {},
                address: {
                    info: {},
                    region: {},
                    province: {},
                    municipality: {},
                    barangay: {}
                },
                type: {},
                profile: {},
                program: {
                    program: {},
                    type: {}
                },
                subprogram: {}
            },
            form: {},
            type: null,
            status: null,
            reason: null,
            showModal: false
        }
    },
    methods: {
        show(data){
            this.user = data;
            this.showModal = true;
        },
        hide(){
            this.showModal = false;
        }
    }
}
</script>
<style scoped>
.modal-header {
    padding-top: 15px;
    padding-left: 0px;
    padding-right: 0px;
}
.form-floating > .form-control {
  height: 50px;
  min-height: 50px;
  line-height: 1;
  padding-top: 1.300rem;
  font-size: 12px;
}
</style>