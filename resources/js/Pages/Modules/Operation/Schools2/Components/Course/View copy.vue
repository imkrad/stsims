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
                                                <div style="height: 3.5rem; width: 3.5rem;">
                                                    <div class="avatar-title bg-white rounded-circle">
                                                    </div>
                                                </div>
                                            </BCol>
                                            <BCol md>
                                                <div>
                                                    <h4 class="fw-bold fs-18">{{ course.course.shortcut }}</h4>
                                                    <div class="hstack gap-3 flex-wrap fs-12">
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
                <BCol lg="3">
                    <div class="card bg-light-subtle shadow-none border">
                        <div class="card-header bg-light-subtle">
                            <div class="d-flex mb-n3">
                                <div class="flex-shrink-0 me-3">
                                    <div style="height:2.5rem;width:2.5rem;">
                                        <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                            <i class="ri-file-text-fill text-primary fs-24"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0 fs-14"><span class="text-body">List of Prospectus</span></h5>
                                    <p class="text-muted text-truncate-two-lines fs-12">A collection of available academic programs</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body bg-white rounded-bottom border-bottom">
                            <p class="mb-0 text-primary fs-12 fw-semibold">Current Prospectus <span class="text-muted fs-11">(Active)</span></p>
                        </div>
                        <div class="card bg-white rounded-bottom shadow-none mb-0" no-body style="height: calc(100vh - 397px); overflow: auto;">
                            <b-list-group flush v-if="activeProspectuses.length > 0">
                                <BListGroupItem @click="filterReminder(list)" v-for="(list,index) in activeProspectuses" v-bind:key="index" style="cursor: pointer;" :class="(isActive(list.created_at)) ? 'bg-info-subtle' : ''">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 ms-1">
                                            <span v-if="list.is_locked"><i class="text-danger fs-16 ri-lock-2-fill"></i></span>
                                            <span v-else><i class="text-warning fs-16 ri-lock-unlock-line"></i></span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-0 fw-semibold fs-13">{{list.school_year}}</h5>
                                            <p class="mb-0 fs-11 text-muted">{{list.created_at}}</p>
                                        </div>
                                        <div class="flex-shrink-0 text-end">
                                            <span v-if="list.is_completed"><i class="text-success fs-18 ri-checkbox-circle-fill"></i></span>
                                            <span v-else><i class="text-warning fs-18 ri-close-circle-fill"></i></span>
                                        </div>
                                    </div>
                                </BListGroupItem>
                            </b-list-group>
                            <b-list-group flush v-else>
                                <BListGroupItem class="text-muted fs-12">
                                    No active prospectus available
                                </BListGroupItem>
                            </b-list-group>
                            <hr class="text-muted mt-0"/>
                                <p class="ms-3 mb-0 text-primary fs-12 fw-semibold">Historical Prospectus</p>
                            <hr class="text-muted mb-0"/>
                            <b-list-group flush v-if="inactiveProspectuses.length > 0">
                                <BListGroupItem @click="filterReminder(list.created_at)" v-for="(list,index) in inactiveProspectuses" v-bind:key="index" style="cursor: pointer;" :class="(isActive(list.created_at)) ? 'bg-info-subtle' : ''">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 ms-1">
                                            <span v-if="list.is_locked"><i class="text-danger fs-16 ri-lock-2-fill"></i></span>
                                            <span v-else><i class="text-warning fs-16 ri-lock-unlock-line"></i></span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-0 fw-semibold fs-13">{{list.school_year}}</h5>
                                            <p class="mb-0 fs-11 text-muted">{{list.created_at}}</p>
                                        </div>
                                        <div class="flex-shrink-0 text-end">
                                            <span v-if="list.is_completed"><i class="text-success fs-18 ri-checkbox-circle-fill"></i></span>
                                            <span v-else><i class="text-warning fs-18 ri-close-circle-fill"></i></span>
                                        </div>
                                    </div>
                                </BListGroupItem>
                            </b-list-group>
                            <b-list-group flush v-else>
                                <BListGroupItem class="text-muted fs-12">
                                    No previous prospectus available
                                </BListGroupItem>
                            </b-list-group>
                        </div>
                    </div>
                </BCol>

                <BCol lg="9">
                    <div class="card bg-light-subtle shadow-none border" v-if="prospectus !== null">
                        <div class="card-header bg-light-subtle">
                            <div class="d-flex mb-n3">
                                <div class="flex-shrink-0 me-3">
                                    <div style="height:2.5rem;width:2.5rem;">
                                        <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                            <i class="ri-article-line text-primary fs-24"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0 fs-14"><span class="text-body">School Year : {{prospectus.school_year}}</span></h5>
                                    <p class="text-muted text-truncate-two-lines fs-12">A collection of available academic programs</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card-body bg-white rounded-bottom border-bottom">
                            <p class="mb-0 text-primary fs-12 fw-semibold">Current Prospectus</p>
                        </div> -->
                        <div class="card bg-white rounded-bottom shadow-none mb-0" no-body style="height: calc(100vh - 346px); overflow: auto;">
                            <div class="step-arrow-nav mt-0">
                                <ul class="nav nav-pills nav-justified custom-nav" role="tablist">
                                    <li class="nav-item" role="presentation" v-for="(semester, index) in semesters" v-bind:key="index">
                                        <button class="nav-link fs-12 p-3" :class="(index == 0) ? 'active' : ''" 
                                            :id="semester.year_ordinal+'-tab'" data-bs-toggle="pill" :data-bs-target="'#'+semester.year_ordinal" 
                                            type="button" role="tab" :aria-controls="semester.year_ordinal" aria-selected="true">
                                           {{semester.year_level}}
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="tab-content">
                                <div class="tab-pane" :class="(index == 0) ? 'show active' : ''" :id="semester.year_ordinal" role="tabpanel" :aria-labelledby="semester.year_ordinal+'-tab'" v-for="(semester, index) in semesters" v-bind:key="index">
                                
                                    <div class="carousel-container">
                                        <div class="carousel-content">
                                            <transition mode="out-in">
                                                <div :key="tabIndex" class="tab-content">
                                                    <table class="table table-bordered mb-0">
                                                        <thead class="bg-primary">
                                                            <tr class="text-center text-white fw-bold fs-13">
                                                                <th colspan="2" class="bg-soft-dark text-white">
                                                                    <a v-if="tabIndex > 0" class="bx-tada float-start" @click="prevTab">
                                                                        <i class='bx bx-chevrons-left text-white'></i>
                                                                    </a>
                                                                    <span class="mt-2">{{ semester.semesters[tabIndex].semester }}</span>
                                                                    <a v-if="tabIndex < semester.semesters.length - 1" class="bx-tada float-end" @click="nextTab">
                                                                        <i class='bx bx-chevrons-right text-white'></i>
                                                                    </a>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                    <table class="table align-middle">
                                                        <tbody>
                                                            <tr v-for="(course, index3) in semester.semesters[tabIndex].courses" v-bind:key="'a-'+index3" class="mb-n4" style="display: block;">
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
                                            </transition>
                                        </div>
                                        
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card bg-light-subtle shadow-none border" v-else>
                       
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
            prospectus: null,
            semesters: [],
            index: null,
            tabIndex: 0,
            activeList: null,
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
        activeProspectuses() {
            return this.course.prospectuses.filter(prospectus => prospectus.is_active === 1);
        },
        inactiveProspectuses() {
            return this.course.prospectuses.filter(prospectus => prospectus.is_active === 0);
        }
    },
    methods: {
        prevTab() {
            if (this.tabIndex > 0) {
                this.tabIndex--;
            }
        },
        nextTab() {
           
                this.tabIndex++;
            
        },
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
        filterReminder(data){
            if(data.created_at == this.activeList){
                this.activeList = null;
                this.prospectus = null;
            }else{
                this.activeList = data.created_at;
                this.openView(data);
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
        add(one,two){
            this.semesters[one].semesters[two].courses.push({code: '',subject: '',unit: '',is_lab: false,is_nonacademic: false})
        },
        rmv(one,two,three){
            this.semesters[one].semesters[two].courses.splice(three,1);
        },
        back(){
            this.$inertia.visit('/schools/'+this.code);
        },
        isActive(name) {
            return this.activeList === name;
        },
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