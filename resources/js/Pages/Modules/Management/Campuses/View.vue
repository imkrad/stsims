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
                                                    <h4 class="fw-bold">{{ campus.school.name }}</h4>
                                                    <div class="hstack gap-3 flex-wrap">
                                                        <div><i class="ri-building-line align-bottom me-1"></i> {{(campus.campus == 'Main') ? 'Main Campus' : campus.campus}}</div>
                                                        <div class="vr"></div>
                                                        <div><i class="ri-map-pin-fill align-bottom me-1"></i> {{campus.address.address}}, {{campus.address.barangay.name}}, {{campus.address.municipality.name}}, {{campus.address.province.name}}, {{campus.address.region.region}}</div>
                                                        <div class="vr"></div>
                                                        <!-- <div>Class : <span class="fw-medium">{{campus.school.class.name}}</span></div>
                                                        <div class="vr"></div> -->
                                                        <!-- <div>Create Date : <span class="fw-medium">{{school.created_at}}</span></div>
                                                        <div class="vr"></div>  -->
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
                            <p class="text-muted text-uppercase fs-12 fw-medium mb-2 mt-0">Name History</p>
                            <b-list-group v-if="campus.names.length > 0">
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
import PageHeader from '@/Shared/Components/PageHeader.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { PageHeader, Pagination, Multiselect, simplebar, Name, Course, Semester, Grading},
    props:['campus','dropdowns'],
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
            index: null,
        }
    },
    methods: {
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
            this.$inertia.visit('/management/campuses');
        }
    }
}
</script>