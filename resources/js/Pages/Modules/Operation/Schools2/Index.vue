<template>
    <Head title="Campuses"/>
    <PageHeader title="List of Schools" pageTitle="List" />
    <BRow>
        <div class="col-md-12">
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
                            <h5 class="mb-0 fs-14"><span class="text-body">School Campuses</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">A comprehensive list of campuses from various schools, providing location and institutional details</p>
                        </div>
                        <div class="flex-shrink-0" style="width: 45%;">
                            <div class="input-group mb-1" style="margin-top: -3px;">
                                <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                                <input type="text" v-model="filter.keyword" placeholder="Search School" class="form-control" style="width: 20%;">
                                <Multiselect class="white" style="width: 25%;" :options="dropdowns.terms" v-model="filter.term" label="name" :allow-empty="false" :searchable="true" placeholder="Select Term" />
                                <Multiselect class="white" style="width: 25%;" :options="dropdowns.gradings" v-model="filter.grading" label="name" :allow-empty="false" :searchable="true" placeholder="Select Grading" />
                                <b-button type="button" variant="primary" @click="openCreate">
                                    <i class="ri-add-circle-fill align-bottom me-1"></i> Create
                                </b-button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-white border-bottom shadow-none" no-body>
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <ul class="nav nav-tabs nav-tabs-custom nav-success fs-12" role="tablist">
                                <li class="nav-item">
                                    <BLink class="nav-link py-3 active text-primary" data-bs-toggle="tab" role="tab" aria-selected="true">
                                    <i class="ri-apps-2-line me-1 align-bottom"></i> All Schools
                                    </BLink>
                                </li>
                                <li class="nav-item" v-for="(list,index) in dropdowns.statuses" v-bind:key="index">
                                    <BLink @click="viewStatus(index,list.value)" class="nav-link py-3" :class="(this.index == index) ? list.others+' active' : ''" data-bs-toggle="tab" role="tab" aria-selected="false">
                                        <i :class="icons[index]" class="me-1 align-bottom"></i>
                                        {{ list.name }} <BBadge v-if="counts[index] > 0" :class="list.color" class="align-middle ms-1">{{counts[index]}}</BBadge>
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
                    <div class="table-responsive table-card" style="margin-top: -39px; height: calc(100vh - 400px); overflow: auto;">
                        <table class="table align-middle table-centered mb-0">
                            <thead class="table-light thead-fixed">
                                <tr class="fs-11">
                                    <th style="width: 3%;"></th>
                                    <th style="width: 32%;">Name</th>
                                    <th style="width: 10%;" class="text-center">Abbreviation</th>
                                    <th style="width: 12%;" class="text-center">Class</th>
                                    <th style="width: 12%;" class="text-center">Grading</th>
                                    <th style="width: 11%;" class="text-center">Term</th>
                                    <th style="width: 5%;" class="text-center">Status</th>
                                    <th style="width: 5%;"></th>
                                </tr>
                            </thead>
                            <tbody class="table-white fs-12">
                                <tr v-for="(list,index) in lists" v-bind:key="index">
                                    <td> 
                                        <div class="avatar-xs chat-user-img online">
                                            <span v-if="list.avatar == 'school.jpg'" :class="'avatar-title rounded-circle bg-primary text-white'">{{list.name[0]}}</span>
                                            <img v-else src="/images/logo-sm.png" alt="" class="avatar-xs rounded-circle">
                                            <span v-if="list.is_active" class="user-status text-success"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="fs-12 mb-0 text-dark">{{list.school.name}} {{(list.is_main) ? '' : '- '+list.campus}}</h5>
                                        <p class="fs-11 text-muted mb-0">{{(list.address.address === '-') ? '' : list.address.address+','}} {{list.address.barangay.name}}, {{list.address.municipality.name}}, {{list.address.province.name}}</p>
                                    </td>
                                    <td class="text-center">{{list.school.shortcut}}</td>
                                    <td class="text-center">
                                        {{(list.school.class.name == 'Private') ? list.school.class.name : (list.is_main == 1) ? list.school.class.name+' - Main' : list.school.class.name+' - Satellite'  }} 
                                    </td>
                                    <td class="text-center">{{list.grading.name}}</td>
                                    <td class="text-center">{{list.term.name}}</td>
                                    <td class="text-center">
                                        <span v-if="list.is_active" class="badge bg-success">Active</span>
                                        <span v-else class="badge bg-danger">Inactive</span>
                                    </td>
                                    <td class="text-end">
                                        <Link :href="`/schools/${list.code}`">
                                            <b-button variant="soft-info" v-b-tooltip.hover title="View" size="sm" class="me-1">
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
    <Campus :dropdowns="dropdowns" ref="campus"/>
</template>
<script>
import _ from 'lodash';
import Campus from './Modals/Campus.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { PageHeader, Pagination, Multiselect, Campus },
    props:['dropdowns'],
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            filter: { 
                keyword: null,
                term: null,
                grading: null,
                agency: null
            },
            index: null
        }
    },
    watch: {
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal);
        },
        "filter.term"(newVal){
            this.fetch();
        },
        "filter.grading"(newVal){
            this.fetch();
        },
        "filter.agency"(newVal){
            this.fetch();
        },
        '$page.props.flash' : {
            deep: true,
            handler(val = null) {
                if(val.data){
                    this.lists[this.index] = val.data.data;
                }
            }
        }
    },
    created(){
        this.fetch();
    },
    methods: {
        checkSearchStr: _.debounce(function(string) {
            this.fetch();
        }, 300),
        fetch(page_url){
            page_url = page_url || '/schools';
            axios.get(page_url,{
                params : {
                    keyword: this.filter.keyword,
                    term: this.filter.term,
                    grading: this.filter.grading,
                    count: 10, // ((window.innerHeight-350)/59)
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
            this.$inertia.visit('/management/school-create');
        },
        openEdit(data,index){
            this.index = index;
            this.$refs.campus.edit(data);
        },
        openUpdate(data,index){
            this.index = index;
            this.$refs.create.update(data);
        }
    }
}
</script>