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
                                                <div class="avatar-md">
                                                    <div class="avatar-title bg-white rounded-circle">
                                                    </div>
                                                </div>
                                            </BCol>
                                            <BCol md>
                                                <div>
                                                    <h4 class="fw-bold">{{ campus.school.name }}</h4>
                                                    <div class="hstack gap-3 flex-wrap">
                                                        <div><i class="ri-building-line align-bottom me-1"></i> {{(campus.campus == 'Main') ? 'Main Campus' : campus.campus}}</div>
                                                      
                                                        <div class="vr" style="width: 1px;"></div>
                                                        <div>Class : <span class="fw-medium">{{campus.school.class.name}}</span></div>
                                                        <div class="vr" style="width: 1px;"></div>
                                                        <div>Term : <span class="fw-medium">{{campus.term.name}}</span></div>
                                                        <div class="vr" style="width: 1px;"></div>
                                                        <div><i class="ri-map-pin-fill align-bottom me-1"></i> {{campus.address.address}}, {{campus.address.barangay.name}}, {{campus.address.municipality.name}}, {{campus.address.province.name}}, {{campus.address.region.region}}</div>
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
                <BCol lg="8">
                    <div class="card">
                        <div class="card-body" style="height: calc(100vh - 290px);">
                            <BTabs nav-class="nav-pills nav-custom nav-custom-light" pills>
                                <BTab title="Overview">
                                    <div class="row">
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
                            </BTabs>
                        </div>
                    </div>
                </BCol>
                <BCol lg="4">
                    <div class="card">
                        <div class="card-body" style="height: calc(100vh - 290px); overflow: auto;">
                            <p class="text-muted text-uppercase fs-12 fw-medium mb-2 mt-0">Active Semester</p>
                            <div class="list-group">
                                <div class="list-group-item " style="cursor: pointer;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded bg-dark-subtle text-dark"><i class="fs-15 ri-calendar-fill"></i></div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3" v-if="!active">
                                            <h5 class="mb-0 fs-12 text-danger">No active semester</h5>
                                            <p class="mb-0 fs-11 text-muted">Please add a new active semester</p>
                                        </div>
                                        <div class="flex-grow-1 ms-3" v-else>
                                            <h5 class="mb-0 fs-12">{{active.semester.name}}</h5>
                                            <p class="mb-0 fs-11 text-muted">{{active.academic_year}} ({{active.start_at}} - {{active.end_at}})</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted text-uppercase fs-12 fw-medium mb-2 mt-3">Statuses</p>
                            <div class="list-group">
                                <div class="list-group-item" style="cursor: pointer;" v-for="(list,index) in statuses" v-bind:key="index">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded" :class="list.color+' '+list.others"><i class="fs-15" :class="list.icon"></i></div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-0 fs-12">{{list.name}}</h5>
                                            <p class="mb-0 fs-11 text-muted">{{list.definition}}</p>
                                        </div><span class="text-muted fs-12">{{list.count}}</span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted text-uppercase fs-12 fw-medium mb-2 mt-3">Name History</p>
                            <b-list-group v-if="campus.names.length > 0" class="fs-11">
                                <b-list-group-item v-for="(list,index) in campus.names" v-bind:key="index"><i class="mdi mdi-check-bold align-middle lh-1 me-2"></i>{{ list.name }}</b-list-group-item>
                            </b-list-group>
                            <b-list-group v-else>
                                <b-list-group-item class="text-muted fs-12"><i class="ri-record-circle-fill align-middle lh-1 me-2"></i>There is no name change history.</b-list-group-item>
                            </b-list-group>
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
import Semester from './Components/Semester/Index.vue';
import Course from './Components/Course/Index.vue';
import Grading from './Components/Grading/Index.vue';
import Multiselect from "@vueform/multiselect";
export default {
    components: { Multiselect, simplebar, Name, Course, Semester, Grading},
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