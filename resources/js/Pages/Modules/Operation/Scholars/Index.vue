<template>
    <Head title="Scholars" />
    <PageHeader title="List of Scholars" pageTitle="List" />
    <BRow>
        <div class="col-md-12">
            <div class="card bg-light-subtle shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height:2.5rem;width:2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i class="ri-account-box-fill text-primary fs-24"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">Scholar Directory</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">A comprehensive list of scholars, including their details and scholarship status.</p>
                        </div>
                        <div class="flex-shrink-0" style="width: 45%;">
                          
                        </div>
                    </div>
                </div>
                <div class="car-body bg-white border-bottom shadow-none">
                <b-row class="mb-2 ms-1 me-1" style="margin-top: 12px;">
                    <b-col lg>
                        <div class="input-group mb-1">
                            <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                            <input type="text" v-model="filter.keyword" placeholder="Search Scholar" class="form-control" style="width: 20%;">
                            <Multiselect v-if="filter.progress == 7" class="white" style="width: 25%;" :options="ongoing" v-model="filter.ongoing" label="name" :searchable="true" placeholder="Select Ongoing Status" />
                            <Multiselect class="white" style="width: 13%;" :options="progresses" v-model="filter.progress" label="name" :searchable="true" placeholder="Select Status" />
                            <Multiselect class="white" style="width: 13%;" :options="['Undergraduate','JLSS']" v-model="filter.type" label="name" :searchable="true" placeholder="Select Type" />
                            <span @click="openEducation()" class="input-group-text" v-b-tooltip.hover title="Education" style="cursor: pointer;"> 
                            <i class="bx bxs-graduation search-icon"></i>
                            </span>
                            <span @click="refresh()" class="input-group-text" v-b-tooltip.hover title="Refresh" style="cursor: pointer;"> 
                                <i class="bx bx-refresh search-icon"></i>
                            </span>
                            <b-button type="button" variant="primary" @click="openCreate">
                                <i class="ri-add-circle-fill align-bottom me-1"></i> Create
                            </b-button>
                        </div>
                    </b-col>
                </b-row>
                </div>
                <div class="card bg-white border-bottom shadow-none" no-body>
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <ul class="nav nav-tabs nav-tabs-custom nav-success border border-dashed border-end-0 border-start-0 fs-12" role="tablist">
                                <li class="nav-item">
                                    <BLink @click="filter.status = null" class="nav-link py-3 active text-primary" data-bs-toggle="tab" role="tab" aria-selected="true">
                                    <i class="ri-apps-2-line me-1 align-bottom"></i> All Scholars
                                    </BLink>
                                </li>
                                <li class="nav-item" v-for="(list,index) in counts" v-bind:key="index">
                                    <BLink @click="viewStatus(index,list.value)" class="nav-link py-3" :class="(this.index == index) ? list.others+' active' : ''" data-bs-toggle="tab" role="tab" aria-selected="false">
                                        <i :class="list.icon" class="me-1 align-bottom"></i>
                                        {{ list.name }} 
                                        <BBadge v-if="list.count > 0" :class="list.color+' '+list.others" class="align-middle ms-1">{{list.count}}</BBadge>
                                    </BLink>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="d-flex flex-wrap gap-2 mt-3">
                                <!-- <span class="badge bg-primary rounded-pill">Primary</span>
                                <span class="badge bg-secondary rounded-pill">Secondary</span>
                                <span class="badge bg-success rounded-pill">Success</span>
                                <span class="badge bg-secondary rounded-pill bg-info">Info</span>
                                <span class="badge bg-secondary rounded-pill bg-warning">Warning</span>
                                <span class="badge bg-danger rounded-pill">Danger</span>
                                <span class="badge bg-dark rounded-pill">Dark</span>
                                <span class="badge bg-light text-dark rounded-pill text-body">Light</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-white rounded-bottom">
                    <div class="table-responsive table-card" style="margin-top: -39px; height: calc(100vh - 465px); overflow: auto;">
                        <table class="table align-middle table-centered mb-0">
                            <thead class="table-light thead-fixed">
                                <tr class="fs-11">
                                    <th style="width: 3%;"></th>
                                    <th style="width: 25%;">Name</th>
                                    <th style="width: 28%;" class="text-center">School & Course</th>
                                    <th style="width: 12%;" class="text-center">Type</th>
                                    <th style="width: 12%;" class="text-center">Program</th>
                                    <th style="width: 8%;" class="text-center">Status</th>
                                    <th style="width: 7%;" class="text-center">Year Awarded</th>
                                    <th style="width: 5%;"></th>
                                </tr>
                            </thead>
                            <tbody class="table-white fs-12">
                                <tr v-for="(list,index) in lists" v-bind:key="index" @click="selectRow(index)" :class="{'bg-dark-subtle': selectedRow === index}">
                                    <td> {{ (meta.current_page - 1) * meta.per_page + index + 1 }}.</td>
                                    <td>
                                        <h5 class="fs-12 mb-0 fw-semibold text-primary">{{ list.profile.lastname+', '+list.profile.firstname}}</h5>
                                        <p class="fs-12 text-muted mb-0">{{list.spas_id}}</p>
                                    </td>
                                    <td class="text-center fs-12">
                                        <h5 class="fs-12 mb-0"> {{ list.education.campus.school.name + ((list.education.campus.campus == 'Main') ? '' : ' - '+list.education.campus.campus) }}</h5>
                                        <p class="fs-12 text-muted mb-0">{{ list.education.course.shortcut }}</p>
                                    </td>
                                    <td class="text-center fs-12">{{ list.program.type.name }}</td>
                                    <td class="text-center fs-12">{{ list.program.program.name + ' - ' + list.program.name }}</td>
                                    <td class="text-center">
                                        <span :class="'badge '+list.status.color+' '+list.status.others">{{list.status.name}}</span>
                                    </td>
                                    <td class="text-center">{{ list.awarded_year }}</td>
                                    <td class="text-end">
                                        <Link :href="`/scholars/${list.code}`">
                                            <b-button variant="soft-info" class="me-1" v-b-tooltip.hover title="View" size="sm">
                                                <i class="ri-eye-fill align-bottom"></i>
                                            </b-button>
                                        </Link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <Pagination class="ms-2 me-2 mt-n1" v-if="meta" @fetch="fetch" :lists="lists.length" :links="links" :pagination="meta" />
                </div>
            </div>
        </div>
    </BRow>
    <Education @filter-selected="handleFilterSelection" ref="education"/>
</template>
<script>
import _ from 'lodash';
import Education from './Modals/Education.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { PageHeader, Pagination, Multiselect, Education },
    props:['dropdowns','counts'],
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            filter: { 
                keyword: null,
                status: null,
                ongoing: null,
                progress: null,
                school: null,
                course: null,
                type: null,
                year: null
            },
            icons: ['ri-information-line','ri-wallet-3-line','ri-indeterminate-circle-line','ri-checkbox-circle-line','ri-close-circle-line'],
            index: null,
            selectedRow: null,
        }
    },
    watch: {
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal);
        },
        "filter.status"(newVal){
            this.fetch();
        },
        "filter.year"(newVal){
            (newVal) ? this.fetch() : '';
        },
        "filter.type"(newVal){
            (newVal) ? this.fetch() : '';
        },
        "filter.progress"(newVal){
            // if(newVal != 7){
            //     this.filter.ongoing = null;
            //     this.filter.status = this.filter.progress;
            //     (newVal) ? this.fetch() : '';
            // }
            this.filter.status = newVal;
            (newVal) ? this.fetch() : '';
        },
        "filter.ongoing"(newVal){
            (newVal) ? this.fetch() : '';
        }
    },
    created(){
        this.fetch();
    },
    computed : {
        progresses : function() {
            return this.dropdowns.statuses.filter(x => x.type === 'Progress');
        },
        ongoing : function() {
            return this.dropdowns.statuses.filter(x => x.type === 'Ongoing');
        }
    },
    methods: {
        checkSearchStr: _.debounce(function(string) {
            this.fetch();
        }, 300),
        fetch(page_url){
            page_url = page_url || '/scholars';
            axios.get(page_url,{
                params : {
                    keyword: this.filter.keyword,
                    status: this.filter.status,
                    year: this.filter.year,
                    type: this.filter.type,
                    school: this.filter.school,
                    course: this.filter.course,
                    count: 10, //Math.floor((window.innerHeight-350)/59)
                    option: 'lists'
                }
            })
            .then(response => {
                if(response){
                    this.lists = response.data.data;
                    this.meta = response.data.meta;
                    this.links = response.data.links;          
                }
            })
            .catch(err => console.log(err));
        },
        openCreate(){
            this.$refs.create.show();
        },
        openUpdate(data,index){
            this.index = index;
            this.$refs.create.update(data);
        },
        openEducation(){
            this.$refs.education.show();
        },
        selectRow(index) {
            this.selectedRow = index;
        },
        handleFilterSelection(payload) {
            this.filter.school = payload.school;
            this.filter.course = payload.course;
            this.fetch();
        },
        viewStatus(index,status){
            this.index = index;
            this.filter.status = status;
            this.fetch();
        },
        refresh(){
            Object.keys(this.filter).forEach(key => {
                this.filter[key] = null;
            });
            this.fetch();
        }
    }
}
</script>