<template>
    <Head title="Scholar Enrollment" />
    <PageHeader title="Scholar Enrollment" pageTitle="List" />
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="file-manager-sidebar">
            <div class="p-4 d-flex flex-column h-100" style="overflow: auto;">
                <ul class="list-unstyled mb-0 vstack gap-3">
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img :src="currentUrl+'/images/avatars/avatar.jpg'" alt="" class="avatar-sm rounded">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="fs-14 mb-1 text-primary text-uppercase">{{selected.profile.name}}</h6>
                                <span :class="'badge bg-secondary bg-'+selected.status.color">{{selected.status.name}}</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <i @click="showProspectus()" style="font-size: 70px; top: 70px; right: 15px; position: absolute; cursor: pointer;" class="ri-todo-fill text-light"></i>
                        <i class="mdi mdi-seal-variant me-2 align-middle text-primary fs-16"></i><span class="fs-12">{{selected.program.name}}</span>
                    </li>
                    <li class="mt-n3"><i class="ri-building-line me-2 align-middle text-primary fs-16"></i><span class="fs-12">{{selected.education.school.name}}</span></li>
                    <li class="mt-n3"><i class="mdi mdi-school-outline me-2 align-middle text-primary fs-16"></i><span class="fs-12">{{(selected.education.course.name) ? selected.education.course.name : selected.education.course.shortcut }}</span></li>
                    <li v-if="selected.education.school.semester">
                        <div v-if="!selected.education.school.is_enrolled" class="alert alert-warning alert-dismissible alert-label-icon rounded-label" role="alert">
                            <i class="ri-alert-line label-icon"></i>Scholar is not Enrolled
                        </div>
                        <div v-else class="alert alert-secondary alert-dismissible alert-label-icon rounded-label" role="alert">
                            <i class="ri-check-double-line label-icon"></i>Scholar is currently enrolled 
                        </div>
                    </li>
                    <li v-else>
                        <div class="alert alert-danger alert-dismissible alert-label-icon rounded-label" v-b-tooltip.hover title="Please remind the coordinator" role="alert">
                            <i class="ri-error-warning-line label-icon"></i>Enrollment is still closed.
                        </div>
                    </li>
                    <li>
                        <hr class="text-muted mt-n3"/>
                        <ul class="list-group">
                            <li class="list-group-item" v-for="(list,index) in selected.enrollments" v-bind:key="list.id">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <i v-if="list.is_locked" v-b-tooltip.hover title="Enrollment already locked." class="ri-lock-2-fill float-end fs-24 text-light align-middle me-2"></i>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-xs">
                                                <div v-if="list.is_enrolled" class="avatar-title rounded" :class="(list.is_grades_completed) ? 'bg-success-subtle text-success' : 'bg-warning-subtle text-warning'">
                                                    <i v-if="list.is_locked" class="ri-file-lock-fill"></i>
                                                    <i v-else class="ri-pages-fill"></i>
                                                </div>
                                                <div v-else class="avatar-title bg-danger-subtle text-danger rounded">
                                                    <i class="ri-file-warning-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 ms-3" @click="(!list.is_disabled) ? (list.is_enrolled) ? showAssessment(list,index) : showEnrollment(list,index) : ''" style="cursor: pointer;">
                                                <h6 class="fs-12 mb-0">
                                                    <span class="text-primary">{{ list.semester.semester.name }}</span>
                                                </h6>
                                                <small class="text-muted">{{ list.semester.academic_year }} - {{ list.level.others }}</small>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="file-manager-content w-100 p-4 pb-0" style="height: calc(100vh - 180px); overflow: auto;" ref="box">
            <Prospectus :id="selected.id" 
            :prospectus="selected.course" 
            :level="selected.education.level"
            :course="selected.education.course" 
            :campus="selected.education.campus_id" 
            @update-prospectus="updateProspectus"
            :levels="levels"
            v-if="show == 'default'" ref="prospectus"/>
            <Assessment 
            :gradings="selected.education.school.gradings" 
            @update-enrollment="updateEnrollment"
            v-else-if="show == 'assessment'" ref="assessment"/>
            <Enrollment 
            @update-enrollment="updateEnrollment"
            v-else-if="show == 'enrollment'" ref="enrollment"/>
        </div>
    </div>
</template>
<script>
import Assessment from './Pages/Assessment/Index.vue';
import Enrollment from './Pages/Enrollment/Index.vue';
import Prospectus from './Pages/Prospectus/Index.vue';
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    components: { PageHeader, Assessment, Enrollment, Prospectus },
    props: ['scholar','levels'],
    data(){
        return {
            currentUrl: window.location.origin,
            selected : this.scholar.data,
            show: 'default',
            index: null
        }
    },
    methods: {
        showEnrollment(data,index){
            this.index = index;
            this.show = 'enrollment';
            this.$nextTick(function () {
                this.$refs.enrollment.set(this.selected.course,data);
            });
        },
        showAssessment(data,index){
            this.index = index;
            this.show = 'assessment';
            this.$nextTick(function () {
                this.$refs.assessment.set(data);
            });
        },
        showProspectus(){
            this.show = 'default';
        },
        updateProspectus(data) {
            this.selected.course = data;
        },
        updateEnrollment(data) {
            if(this.show == 'enrollment'){
                this.show = 'asessement';
                this.showAssessment(data,this.index);
                this.selected.education.school.is_enrolled = true;
            }else{
                this.showAssessment(data,this.index);
                if(data.is_locked){
                    if (this.selected.enrollments[this.index-1]) {
                        this.selected.enrollments[this.index-1].is_disabled = 0;
                    }
                }
            }
            this.selected.enrollments[this.index] = data;
        }
    }
}
</script>