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
                        <div class="card-body" style="height: calc(100vh - 290px); overflow: auto;">
                            {{ course.campus.term }}
                            
                        </div>
                    </div>
                </BCol>
                <BCol lg="8">
                    <div class="card">
                        <div class="card-body" style="height: calc(100vh - 290px);">
                            {{ terms }}
                        </div>
                    </div>
                </BCol>
            </BRow>
            
        </div>
    </div>
</template>
<script>
import _ from 'lodash';
import simplebar from "simplebar-vue";
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    components: { PageHeader, Multiselect, simplebar },
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
            index: null,
        }
    },
    computed : {
        terms : function() {
            return this.dropdowns.terms.filter(x => x.classification === this.course.campus.term.name);
        },
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
            this.$inertia.visit('/management/campus-view?code='+this.code);
        }
    }
}
</script>