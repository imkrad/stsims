<template>
    <Head title="School Profile" />
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
                                                    <h4 class="fw-bold fs-18">{{ campus.school.name }}</h4>
                                                    <div class="hstack gap-3 flex-wrap fs-12">
                                                        <div><i class="ri-building-line align-bottom me-1"></i> {{(campus.campus == 'Main') ? 'Main Campus' : campus.campus}}</div>
                                                        <div class="vr" style="width: 1px;"></div>
                                                        <div><span class="text-muted">Class :</span> <span class="fw-medium">{{campus.school.class.name}}</span></div>
                                                        <div class="vr" style="width: 1px;"></div>
                                                        <div><span class="text-muted">Term :</span> <span class="fw-medium">{{campus.term.name}}</span></div>
                                                        <div class="vr" style="width: 1px;"></div>
                                                        <div><span class="text-muted">Address :</span> {{campus.address.address}}, {{campus.address.barangay.name}}, {{campus.address.municipality.name}}, {{campus.address.province.name}}, {{campus.address.region.region}}</div>
                                                        <!-- <div>Campuses : <span class="fw-medium">{{school.campuses_count}}</span></div>
                                                        <div class="vr"></div> -->
                                                    </div>
                                                </div>
                                            </BCol>
                                        </BRow>
                                    </BCol>
                                    <BCol md="auto">
                                        <div class="hstack gap-1 flex-wrap">
                                            <button @click="openName()" type="button" v-b-tooltip.hover title="Add name" class="btn py-0 fs-16 text-body me-n3">
                                                <i class="ri-add-circle-fill"></i>
                                            </button>
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
                                            <i class="ri-information-fill text-primary fs-24"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0 fs-14"><span class="text-body">School Insights</span></h5>
                                    <p class="text-muted text-truncate-two-lines fs-12">Latest semester and scholar statuses at a glance</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body bg-white rounded-bottom border-bottom">
                            <p class="mb-0 text-primary fs-12 fw-semibold">Currently Active Semester</p>
                        </div>
                        <div class="card bg-white rounded-bottom shadow-none mb-0" style="height: calc(100vh - 397px); overflow: auto;">
                            <ul class="list-group list-group-flush border-dashed mb-n4 mt-n2 p-3">
                                <li class="list-group-item px-0">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <span class="avatar-title bg-light p-1 rounded-circle">
                                                <i class="fs-16 text-success ri-calendar-fill"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-2" v-if="!active">
                                            <h5 class="mb-0 fs-12 text-danger">No active semester</h5>
                                            <p class="mb-0 fs-11 text-muted">Please add a new active semester</p>
                                        </div>
                                        <div class="flex-grow-1 ms-2" v-else>
                                            <h5 class="mb-0 fs-12">{{active.semester.name}}</h5>
                                            <p class="mb-0 fs-11 text-muted">{{active.academic_year}} ({{active.start_at}} - {{active.end_at}})</p>
                                        </div>
                                        <!-- <div class="flex-shrink-0 text-end">
                                            <h6 class="mt-2 fs-12">{{list.count}}</h6>
                                        </div> -->
                                    </div>
                                </li>
                            </ul>
                            <hr class="text-muted"/>
                                <p class="ms-3 mb-0 text-primary fs-12 fw-semibold">Scholarship Summary</p>
                            <hr class="text-muted mb-2"/>
                            <ul class="list-group list-group-flush border-dashed mb-n4 mt-n3 p-3">
                                <li class="list-group-item px-0" v-for="(list,index) in counts" v-bind:key="index">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <span class="avatar-title bg-light p-1 rounded-circle">
                                                <i :class="list.icon+' '+list.color"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <h6 class="mb-0 fs-12">{{list.name}}</h6>
                                            <p class="fs-11 mb-0 text-muted">{{ list.description }}</p>
                                        </div>
                                        <div class="flex-shrink-0 text-end">
                                            <h6 class="mt-2 fs-12">{{list.count}}</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <hr class="text-muted"/>
                                <p class="ms-3 mb-0 text-primary fs-12 fw-semibold">School Name History</p>
                            <hr class="text-muted mb-2"/>
                            <ul class="fs-11 text-muted mt-2" v-if="campus.names.length > 0">
                                <li class="mt-0" v-for="(list,index) in campus.names" v-bind:key="index">
                                    &nbsp; {{ list.name }}
                                </li>
                            </ul>
                            <ul class="fs-11 text-muted mt-2" v-else>
                                <li class="mt-0">
                                    &nbsp; No Record of Name Changes
                                </li>
                            </ul>
                        </div>
                    </div>
                </BCol>
                <BCol lg="9">
                    <div class="card bg-light-subtle shadow-none border">
                        <div class="card-header bg-light-subtle">
                            <div class="d-flex mb-n3">
                                <div class="flex-shrink-0 me-3">
                                    <div style="height:2.5rem;width:2.5rem;">
                                        <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                            <i class="ri-community-fill text-primary fs-24"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0 fs-14"><span class="text-body">School Details</span></h5>
                                    <p class="text-muted text-truncate-two-lines fs-12">Comprehensive information about the school's courses, semesters, grading system, and academic policies</p>
                                </div>
                            </div>
                        </div>
                       
                        <div class="card bg-white rounded-bottom shadow-none mb-0">
                            <div class="step-arrow-nav mt-0">
                                <ul class="nav nav-pills nav-justified custom-nav" role="tablist">
                                    <li class="nav-item" role="presentation" v-for="(menu, index) in menus" v-bind:key="index">
                                        <button class="nav-link fs-12 p-3" :class="(index == 0) ? 'active' : ''" 
                                            :id="menu+'-tab'" data-bs-toggle="pill" :data-bs-target="'#'+menu" 
                                            type="button" role="tab" :aria-controls="menu" aria-selected="true">
                                           {{menu}}
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <!-- <BTabs nav-class="nav-pills nav-custom nav-custom-light" pills>
                                <BTab title="Overview">
                                    <div class="row" style="height: calc(100vh - 413px);">
                                        <div class="col-md-4 mt-3" v-for="(list,index) in counts" v-bind:key="index">
                                            <BCard class="mb-3 shadow-none" no-body>
                                                <BLink class="card-header bg-light-subtle border" role="button">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0" style="height: 2.1rem; width: 2.1rem;">
                                                            <span :class="'avatar-title bg-'+list.color+' text-primary rounded-circle fs-4'">
                                                                <i :class="list.icon +' text-light align-middle'"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h4 class="mb-0"><span class="counter-value fs-14">{{list.name}}</span></h4>
                                                            <p class="fs-12 text-muted mb-1">{{ list.counts }} scholar</p>
                                                        </div>
                                                    </div>
                                                </BLink>
                                            </BCard>
                                        </div>
                                        <div class="col-md-12">
                                            <hr class="text-muted mt-0"/>
                                        </div>
                                    </div>

                                </BTab>
                                <BTab title="Courses">
                                    <Course :certifications="dropdowns.certifications" :type="campus.school.class.name" :campus="campus.id" :code="campus.code" :courses="campus.courses"/>
                                </BTab>
                                <BTab title="Semesters">
                                    <Semester :semesters="campus.semesters" :terms="dropdowns.terms" :term="campus.term.name" :campus="campus.id"/>
                                </BTab>
                                <BTab title="Grading">
                                    <Grading :gradings="campus.gradings" :campus="campus.id"/>
                                </BTab>
                            </BTabs> -->
                        </div>
                        <div class="card-body bg-white rounded-bottom">
                            <div class="tab-content">
                                <div class="tab-pane" :class="(index == 0) ? 'show active' : ''" :id="menu" role="tabpanel" :aria-labelledby="menu+'-tab'" v-for="(menu, index) in menus" v-bind:key="index">
                                    
                                    <div class="carousel-container">
                                        <div class="carousel-content">
                                            <transition mode="out-in">
                                                <div :key="tabIndex" class="tab-content">
                                                    <Overview v-if="menu == 'Overview'"/>
                                                    <Course v-if="menu == 'Courses'" :certifications="dropdowns.certifications" :type="campus.school.class.name" :campus="campus.id" :code="campus.code" :courses="campus.courses"/>
                                                    <Semester v-if="menu == 'Semesters'" :semesters="campus.semesters" :terms="dropdowns.terms" :term="campus.term.name" :campus="campus.id"/>
                                                    <Grading v-if="menu == 'Gradings'" :gradings="campus.gradings" :campus="campus.id"/>
                                                </div>
                                            </transition>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </BCol>
            </BRow>
            
        </div>
    </div>
    <Name ref="name"/>
</template>
<script>
import _ from 'lodash';
import Name from './Modals/Name.vue';
import simplebar from "simplebar-vue";
import Overview from './Components/Overview/Index.vue';
import Semester from './Components/Semester/Index.vue';
import Course from './Components/Course/Index.vue';
import Grading from './Components/Grading/Index.vue';
import Multiselect from "@vueform/multiselect";
export default {
    components: { Multiselect, simplebar, Name, Course, Semester, Grading, Overview },
    props:['campus','dropdowns','counts','statuses'],
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
            menus: [
                'Overview', 'Courses','Semesters','Gradings'
            ],
            active: null,
            index: null,
        }
    },
    created(){
        this.fetchActive();
    },
    methods: {
        fetchActive(){
            axios.get('/schools',{
                params : {
                    id: this.campus.id,
                    option: 'active-semester'
                }
            })
            .then(response => {
                this.active = response.data;
            })
            .catch(err => console.log(err));
        },
        openCreate(){
            this.$refs.campus.show(this.school.id);
        },
        openEdit(data){
            this.$refs.campus.edit(data);
        },
        openName(){
            this.$refs.name.show(this.campus.id);
        },
        back(){
            this.$inertia.visit('/schools');
        }
    }
}
</script>