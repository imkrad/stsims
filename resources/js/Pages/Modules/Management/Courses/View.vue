<template>
    <!-- <PageHeader title="View School" pageTitle="List" /> -->
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="w-100 p-4 pb-0" ref="box">

            <BRow>
                <BCol lg="12">
                    <BCard no-body class="mt-n4 mx-n4">
                        <div class="bg-warning-subtle">
                            <BCardBody class="pb-0 px-4">
                                <BRow class="mb-3">
                                    <BCol md>
                                        <BRow class="align-items-center g-3">
                                            <BCol md="auto">
                                                <div class="avatar-md">
                                                    <div class="avatar-title bg-white rounded-circle">
                                                    </div>
                                                </div>
                                            </BCol>
                                            <BCol md>
                                                <div>
                                                    <h4 class="fw-bold">{{ course.course.shortcut }}</h4>
                                                    <div class="hstack gap-3 flex-wrap">
                                                        <div><i class="ri-building-line align-bottom me-1"></i>{{course.campus.school.name}} {{ (course.campus.campus == 'Main') ? '' : ' - '+course.campus.campus }}</div>
                                                        <div class="vr" style="width: 1px;"></div>
                                                        <div><span class="text-muted">Years :</span> {{course.years}} </div>
                                                        <div class="vr" style="width: 1px;"></div>
                                                        <div><span class="text-muted">Added At :</span> {{course.created_at}} </div>
                                                        <div class="vr" style="width: 1px;"></div>
                                                        <div><span class="text-muted">Last Updated :</span> {{course.updated_at}} </div>
                                                    </div>
                                                </div>
                                            </BCol>
                                        </BRow>
                                    </BCol>
                                    <BCol md="auto">
                                        <div class="hstack gap-1 flex-wrap">
                                            <button @click="back()" type="button" class="btn py-0 fs-16 text-body">
                                                <i class="ri-share-line"></i>
                                            </button>
                                        </div>
                                    </BCol>
                                </BRow>
                            </BCardBody>
                        </div>
                    </BCard>
                </BCol>
                <BCol lg="4">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">List of Prospectus</h4>
                            <div class="flex-shrink-0">
                                <button @click="openProspectus()" type="button" class="btn btn-soft-primary btn-sm material-shadow-none">
                                    New Prospectus
                                </button>
                            </div>
                        </div>
                        <div class="card-body" style="height: calc(100vh - 350px); overflow: auto;">
                            <div class="table-responsive">
                                <table class="table table-nowrap align-middle mb-0">
                                    <thead class="table-light">
                                        <tr class="fs-11">
                                            <th style="width: 45%;">Name</th>
                                            <th style="width: 15%;" class="text-center">Locked</th>
                                            <th style="width: 15%;" class="text-center">Completed</th>
                                            <th style="width: 20%;" class="text-center">Status</th>
                                            <th style="width: 5%;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="fs-12" v-for="(list,index) in sortedItems" v-bind:key="index" :class="{'bg-info-subtle': list.is_active}">
                                            <td>{{ list.school_year }}</td>
                                            <td class="text-center">
                                                <span v-if="list.is_locked"><i class="text-danger fs-14  ri-lock-2-fill"></i></span>
                                                <span v-else><i class="text-warning fs-14 ri-lock-unlock-line"></i></span>
                                            </td>
                                            <td class="text-center">
                                                <span v-if="list.is_completed"><i class="text-success fs-14 ri-checkbox-circle-fill"></i></span>
                                                <span v-else><i class="text-warning fs-14 ri-close-circle-fill"></i></span>
                                            </td>
                                            <td class="text-center">
                                                <span v-if="list.is_active" class="badge bg-success">Active</span>
                                                <span v-else class="badge bg-danger">Inactive</span>
                                            </td>
                                            <td class="text-end">
                                                <b-button @click="openView(list)" variant="soft-primary" v-b-tooltip.hover title="View" size="sm" class="edit-list">
                                                    <i class="ri-eye-fill align-bottom"></i>
                                                </b-button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </BCol>

                <BCol lg="8">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">School Year : {{prospectus.school_year}}</h4>
                            <div class="flex-shrink-0">
                                <button v-if="prospectus.is_completed" @click="openSave('lock',prospectus)" v-b-tooltip.hover :title="(prospectus.is_locked) ? 'Unlock' : 'Lock'" class="btn w-md btn-sm btn-label btn-light me-1" type="button">
                                    <div v-if="prospectus.is_locked" class="btn-content"><i class="ri-lock-unlock-fill label-icon align-middle fs-12 me-2"></i>Unlocked</div>
                                    <div v-else class="btn-content"><i class="ri-lock-fill label-icon align-middle fs-12 me-2"></i>Locked</div>
                                </button>
                                <button v-if="prospectus.is_completed" @click="openSave('status',prospectus)" class="btn btn-sm btn-label me-1 w-md" :class="(prospectus.is_active) ? 'btn-danger' : 'btn-success'" type="button">
                                    <div v-if="!prospectus.is_active" class="btn-content"><i class="ri-list-check label-icon align-middle fs-12 me-2"></i>Activate</div>
                                    <div v-else class="btn-content"><i class="ri-list-check label-icon align-middle fs-12 me-2"></i>Deactivate</div>
                                </button>
                                <button v-if="!prospectus.is_locked" @click="save()" class="btn btn-primary btn-sm btn-label me-1 w-md" type="button">
                                    <div class="btn-content"><i class="ri-checkbox-circle-fill label-icon align-middle fs-12"></i>Save</div>
                                </button>
                            </div>
                        </div>
                        <div class="card-body" style="height: calc(100vh - 350px);">
                            <b-form class="customform">
                                <div class="row">
                                    <b-tabs v-model="tabIndex">
                                        <template v-for="(semester, index) in semesters" v-bind:key="index">
                                            <transition name="fade">
                                                <b-tab v-show="index === tabIndex">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered mb-0">
                                                            <thead>
                                                                <tr class="text-center text-primary font-weight-bold font-size-12">
                                                                    <th colspan="2" class="bg-primary">
                                                                        <a class="bx-tada float-start text-white" @click="nxt('back')"><i class='bx bx-chevrons-left'></i></a>
                                                                        <span class="text-white">{{semester.year_level}}</span>
                                                                        <a class="bx-tada float-end text-white" @click="nxt('next')"><i class='bx bx-chevrons-right'></i></a>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                        <b-tabs v-model="tabIndex2">
                                                            <template v-for="(s, index2) in semester.semesters" v-bind:key="index2">
                                                                <transition name="fade">
                                                                    <b-tab v-show="index2 === tabIndex2">
                                                                        <table class="table table-bordered mb-0">
                                                                            <thead>
                                                                                <tr class="text-center text-danger font-weight-bold font-size-12">
                                                                                    <th colspan="2" class="bg-soft-dark">
                                                                                        <a class="bx-tada float-start" @click="tabIndex2--"><i class='bx bx-chevrons-left'></i></a>
                                                                                        <span class="mt-2">{{s.semester}}</span>
                                                                                        <a class="bx-tada float-end" @click="tabIndex2++"><i class='bx bx-chevrons-right'></i></a>
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                        </table>
                                                                        <div style="height: calc(100vh - 505px); overflow: auto;">
                                                                            <table class="table table-borderless align-middle">
                                                                                <tbody>
                                                                                    <tr v-for="(course, index3) in s.courses" v-bind:key="'a-'+index3" class="mb-n4" style="display: block;">
                                                                                        <td width="12%">
                                                                                            <div class="form-check">
                                                                                                <input class="form-check-input" v-model="course.is_lab" type="checkbox" id="formCheck1">
                                                                                                <label class="form-check-label fs-12" for="formCheck1">&nbsp;&nbsp;Is Laboratory?</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td width="14%">
                                                                                            <div class="form-check">
                                                                                                <input class="form-check-input" v-model="course.is_nonacademic" type="checkbox" id="formCheck2">
                                                                                                <label class="form-check-label fs-12" for="formCheck2">&nbsp;&nbsp;Is Non-Academic?</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td width="12%">
                                                                                            <input type="text" class="form-control" v-model="course.code" placeholder="Course code" style="text-transform: capitalize;" required>
                                                                                        </td>
                                                                                        <td width="52%">
                                                                                            <input type="text" class="form-control" v-model="course.subject" placeholder="Course/Subject" style="text-transform: capitalize;" required>
                                                                                        </td>
                                                                                        <td width="5%">
                                                                                            <input type="text" class="form-control" v-model="course.unit" placeholder="Unit" style="text-transform: capitalize;" required>
                                                                                        </td>
                                                                                        <td class="text-end" width="2%">
                                                                                            <b-button @click="rmv(index, index2, index3)" variant="soft-danger" v-b-tooltip.hover title="Remove" class="edit-list"><i class="ri-delete-bin-5-line align-bottom"></i></b-button>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <table class="table table-borderless mb-0">
                                                                            <tbody>
                                                                                <tr class="bg-opacity-10">
                                                                                    <td>
                                                                                        <button @click="add(index, index2)" class="btn btn-secondary btn-sm btn-label me-1" type="button">
                                                                                            <div class="btn-content"><i class="ri-add-circle-fill label-icon align-middle fs-16 me-2"></i> Add Subject</div>
                                                                                        </button>
                                                                                    </td>
                                                                                    <td>
                                                                                        <span class="float-end font-size-11 fw-bold mt-2 me-2">Total Units: {{ totalUnits(s.courses) }}</span>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </b-tab>
                                                                </transition>
                                                            </template>
                                                        </b-tabs>
                                                    </div>
                                                </b-tab>
                                            </transition>
                                        </template>
                                    </b-tabs>
                                </div>
                            </b-form>

                        </div>
                    </div>
                </BCol>
            </BRow>
            
        </div>
    </div>
    <Prospectus ref="prospectus"/>
    <Status ref="status"/>
    <Lock ref="lock"/>
    <Save ref="save"/>
</template>
<script>
import _ from 'lodash';
import simplebar from "simplebar-vue";
import Save from './Modals/Save.vue';
import Lock from './Modals/Lock.vue';
import Status from './Modals/Status.vue';
import Prospectus from './Modals/Prospectus.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    components: { PageHeader, Multiselect, simplebar, Prospectus, Status, Lock, Save },
    props:['code','course','dropdowns'],
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            filter: { 
                keyword: null,
                class: null
            },
            form: this.$inertia.form({
                id: '',
                subjects: '',
                type: null,
                is_completed: null,
                option: 'prospectus'
            }),
            prospectus: {},
            semesters: [],
            index: null,
            tabIndex: 0,
            tabIndex2: 0,
        }
    },
    computed : {
        terms : function() {
            const term = this.dropdowns.terms.filter(x => x.classification === this.course.campus.term.name);
            return term;
        },
        updated: function(){
            return this.semesters;
        },
        sortedItems() {
            return this.course.prospectuses.slice().sort((a, b) => b.is_active - a.is_active);
        },
    },
    methods: {
        save(){
            this.form.type = 'subjects';
            this.form.id = this.prospectus.id;
            this.form.subjects = this.updated;
            this.$refs.save.set(this.form);
            // this.form.put('/management/update',{
            //     preserveScroll: true,
            //     onSuccess: (response) => {}
            // });
        },
        openSave(type,data){
            if(type == 'status'){
                this.$refs.status.set(data,type);
            }else{
                this.$refs.lock.set(data,type);
            }
        },
        openProspectus(){
            this.$refs.prospectus.show(this.course.campus.term.name,this.course.years,this.course.id);
        },
        openView(data){
            this.prospectus = data;
            if(typeof this.prospectus.subjects === 'string'){
                this.semesters = JSON.parse(this.prospectus.subjects);
            }else{
                this.semesters = this.prospectus.subjects;
            }
        },
        totalUnits(lists){
            var sum = 0;
            if(lists != undefined){
                lists.forEach(e => {
                    sum += Number(e.unit);
                });
            }
            return sum
        },
        nxt(direction) {
            if (direction === 'next' && this.tabIndex < this.semesters.length - 1) {
                this.tabIndex++;
            } else if (direction === 'back' && this.tabIndex > 0) {
                this.tabIndex--;
            }
        },
        add(one,two){
            this.semesters[one].semesters[two].courses.push({code: '',subject: '',unit: '',is_lab: false,is_nonacademic: false})
        },
        rmv(one,two,three){
            this.semesters[one].semesters[two].courses.splice(three,1);
        },
        back(){
            this.$inertia.visit('/management/campus-view?code='+this.code);
        }
    }
}
</script>
<style>
td input {
    text-align: center;
}
.fade-enter-active, .fade-leave-active {
    transition: opacity 0.5s ease;
}
.fade-enter, .fade-leave-to /* .fade-leave-active in versions below Vue 2.1.8 */ {
    opacity: 0;
}
</style>