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
                                                        <div><span class="text-muted">Added Date :</span> {{course.created_at}} </div>
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
                                <BListGroupItem @click="openProspectus(list)" v-for="(list,index) in activeProspectuses" v-bind:key="index" style="cursor: pointer;" :class="(isActive(list.created_at)) ? 'bg-info-subtle' : ''">
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
                                <BListGroupItem @click="openProspectus(list)" v-for="(list,index) in inactiveProspectuses" v-bind:key="index" style="cursor: pointer;" :class="(isActive(list.created_at)) ? 'bg-info-subtle' : ''">
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
                                <div class="flex-grow-0" v-if="!prospectus.is_active">
                                    <button v-if="prospectus.is_completed" @click="openSave('lock',prospectus)" v-b-tooltip.hover :title="(prospectus.is_locked) ? 'Unlock' : 'Lock'" :class="(prospectus.is_locked) ? 'btn-light' : 'btn-danger'" class="btn w-md btn-label me-1" type="button">
                                        <div v-if="prospectus.is_locked" class="btn-content"><i class="ri-lock-unlock-fill label-icon align-middle fs-12 me-2"></i>Unlocked</div>
                                        <div v-else class="btn-content"><i class="ri-lock-fill label-icon align-middle fs-12 me-2"></i>Locked</div>
                                    </button>
                                    <button v-if="prospectus.is_locked" @click="openSave('status',prospectus)" class="btn btn-label me-1 w-md" :class="(prospectus.is_active) ? 'btn-danger' : 'btn-success'" type="button">
                                        <div v-if="!prospectus.is_active" class="btn-content"><i class="ri-list-check label-icon align-middle fs-12 me-2"></i>Activate</div>
                                        <div v-else class="btn-content"><i class="ri-list-check label-icon align-middle fs-12 me-2"></i>Deactivate</div>
                                    </button>
                                </div>
                                <div class="flex-grow-0" v-else>
                                    <button v-if="prospectus.is_completed" @click="openSave('status',prospectus)" class="btn btn-label me-1 w-md" :class="(prospectus.is_active) ? 'btn-danger' : 'btn-success'" type="button">
                                        <div v-if="!prospectus.is_active" class="btn-content"><i class="ri-list-check label-icon align-middle fs-12 me-2"></i>Activate</div>
                                        <div v-else class="btn-content"><i class="ri-list-check label-icon align-middle fs-12 me-2"></i>Deactivate</div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-white rounded-bottom shadow-none mb-0" no-body>
                            <div class="step-arrow-nav mt-0">
                                <ul class="nav nav-pills nav-justified custom-nav" role="tablist">
                                    <li class="nav-item" role="presentation" v-for="(semester, index) in semesters" v-bind:key="index">
                                        <button class="nav-link fs-12 p-3" @click="setIndex(index)" :class="(index == 0) ? 'active' : ''" 
                                            :id="semester.year_ordinal+'-tab'" data-bs-toggle="pill" :data-bs-target="'#'+semester.year_ordinal" 
                                            type="button" role="tab" :aria-controls="semester.year_ordinal" aria-selected="true">
                                           {{semester.year_level}}
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body bg-white rounded-bottom mt-4">
                            <div class="tab-content">
                                <div class="tab-pane" :class="(index == 0) ? 'show active' : ''" :id="semester.year_ordinal" role="tabpanel" :aria-labelledby="semester.year_ordinal+'-tab'" v-for="(semester, index) in semesters" v-bind:key="index">
                                    
                                    <div class="carousel-container">
                                        <div class="carousel-content">
                                            <transition mode="out-in">
                                                <div :key="tabIndex" class="tab-content">

                                                    <div class="table-responsive table-card" style="margin-top: -39px; height: calc(100vh - 460px); overflow: auto;">
                                                        
                                                        <table class="table align-middle table-centered mb-0">
                                                            <thead class="thead-fixed">
                                                                <tr class="text-center bg-primary text-white fw-bold fs-13">
                                                                    <th colspan="5" class="bg-soft-dark text-white">
                                                                        <a v-if="tabIndex > 0" class="bx-tada float-start" @click="prevTab">
                                                                            <i class='bx bx-chevrons-left text-white'></i>
                                                                        </a>
                                                                        <span class="mt-2">{{semester.year_level}} - {{ semester.semesters[tabIndex].semester }}</span>
                                                                        <a v-if="tabIndex < semester.semesters.length - 1" class="bx-tada float-end" @click="nextTab">
                                                                            <i class='bx bx-chevrons-right text-white'></i>
                                                                        </a>
                                                                    </th>
                                                                </tr>
                                                                <tr class="fs-11 bg-light">
                                                                    <th class="text-center" style="width: 5%;"></th>
                                                                    <th class="text-center" style="width: 10%;">Code</th>
                                                                    <th>Subject</th>
                                                                    <th style="width: 7%;" class="text-center">Unit ({{ totalUnits(semester.semesters[tabIndex].courses) }})</th>
                                                                    <th style="width: 10%;"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody v-if="semester.semesters[tabIndex].courses.length">
                                                                <tr class="fs-12" v-for="(course, index3) in semester.semesters[tabIndex].courses" v-bind:key="'a-'+index3">
                                                                    <td class="text-center">
                                                                        <i v-if="!course.is_nonacademic" class="ri-checkbox-circle-fill text-success fs-18" v-b-tooltip.hover title="Academic"></i>
                                                                        <i v-else class="ri-close-circle-fill text-danger fs-18" v-b-tooltip.hover title="Non-Academic"></i>
                                                                    </td>
                                                                    <td class="text-center">{{course.code}}</td>
                                                                    <td>{{course.subject}} <span v-if="course.is_lab" class="text-muted">(Laboratory)</span></td>
                                                                    <td class="text-center">{{course.unit}}</td>
                                                                    <td class="text-end">
                                                                        <b-button @click="openEdit(course,index3)" variant="soft-warning" v-b-tooltip.hover title="Edit" size="sm" class="me-1 mt-n1 mb-n1">
                                                                            <i class="ri-pencil-fill align-bottom"></i>
                                                                        </b-button>
                                                                        <b-button  @click="openRemove(index3)" variant="soft-danger" v-b-tooltip.hover title="Delete" size="sm" class="me-1 mt-n1 mb-n1">
                                                                            <i class="ri-delete-bin-fill align-bottom"></i>
                                                                        </b-button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                            <tbody v-else>
                                                                <tr>
                                                                    <td colspan="5" class="text-center text-muted fs-12">The prospectus does not contain any courses. Please add courses to continue</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </transition>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button v-if="prospectus.is_locked" class="btn btn-soft-primary btn-md btn-icon waves-effect waves-light me-1 mt-n1 mb-n1" type="button" style="">
                                <div class="btn-content"><i class="ri-lock-2-fill"></i></div>
                            </button>
                            <button v-if="!prospectus.is_locked" @click="openAdd()" class="btn btn-label me-1 mt-n1 mb-n1 w-md btn-light" type="button">
                                <div class="btn-content">
                                    <i class="ri-add-circle-fill label-icon align-middle fs-12 me-2"></i>Add
                                </div>
                            </button>
                            <button v-if="!prospectus.is_locked" @click="save()" class="btn btn-label me-1 me-1 mt-n1 mb-n1 w-md btn-success float-end" type="button">
                                <div class="btn-content">
                                    <i class="ri-checkbox-circle-fill label-icon align-middle fs-12 me-2"></i>Save
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="card bg-light-subtle shadow-none border d-flex justify-content-center align-items-center" style="height: calc(100vh - 277px);" v-else>
                        <div class="text-center"><h4>View Prospectus</h4>
                            <p class="text-muted">Please select a prospectus to view or modify. Note that only one active prospectus is allowed at a time.</p>
                            <button @click="openCreate()" class="btn btn-primary btn-md" type="button">
                                <div class="btn-content">Create New Prospectus</div>
                            </button>
                        </div>
                    </div>
                </BCol>
            </BRow>
            
        </div>
    </div>
    <Prospectus ref="prospectus"/>
    <Status @update="updateStatus" ref="status"/>
    <Lock @update="updateLock" ref="lock"/>
    <Save ref="save"/>
    <Add  @saveSubject="addSubject" @editSubject="editSubject" ref="add"/>
</template>
<script>
import _ from 'lodash';
import Add from './Modals/Add.vue';
import simplebar from "simplebar-vue";
import Save from './Modals/Save.vue';
import Lock from './Modals/Lock.vue';
import Status from './Modals/Status.vue';
import Prospectus from './Modals/Prospectus.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    components: { PageHeader, Multiselect, simplebar, Prospectus, Status, Lock, Save, Add },
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
        save(){
            this.form.type = 'subjects';
            this.form.id = this.prospectus.id;
            this.form.subjects = this.updated;
            this.$refs.save.set(this.form);
        },
        openSave(type,data){
            if(type == 'status'){
                this.$refs.status.set(data,type);
            }else{
                this.$refs.lock.set(data,type);
            }
        },
        openCreate(){
            this.$refs.prospectus.show(this.course.campus.term.name,this.course.years,this.course.id);
        },
        openAdd(){
            this.$refs.add.show();
        },
        openEdit(data,index){
            this.$refs.add.edit(data,index);
        },
        openView(data){
            this.prospectus = data;
            this.index = 0;
            if(typeof this.prospectus.subjects === 'string'){
                this.semesters = JSON.parse(this.prospectus.subjects);
            }else{
                this.semesters = this.prospectus.subjects;
            }
        },
        openProspectus(data){
            if(data.created_at == this.activeList){
                this.activeList = null;
                this.prospectus = null;
            }else{
                this.activeList = data.created_at;
                this.openView(data);
            }
        },
        openRemove(index) {
            if (confirm("Are you sure you want to remove the subject?")) {
                this.semesters[this.index].semesters[this.tabIndex].courses.splice(index, 1);
            }
        },
        isActive(name) {
            return this.activeList === name;
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
        setIndex(index){
            this.index = index
        },
        addSubject(subjectData) {
            this.semesters[this.index].semesters[this.tabIndex].courses.push(subjectData);
        },
        editSubject(subjectData,index) {
            this.semesters[this.index].semesters[this.tabIndex].courses[index] = subjectData;
        },
        updateLock(data){
            this.prospectus.is_locked = data;
        },
        updateStatus(data){
            this.prospectus.is_active = data;
        },
        prevTab() {
            if (this.tabIndex > 0) {
                this.tabIndex--;
            }
        },
        nextTab() {
            this.tabIndex++;
        },
        back(){
            this.$inertia.visit('/schools/'+this.code);
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