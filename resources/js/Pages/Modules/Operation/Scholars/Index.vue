<template>
    <Head title="Scholars" />
    <PageHeader title="List of Scholars" pageTitle="List" />
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="file-manager-content w-100 p-4 pb-0" style="height: calc(100vh - 180px); overflow: auto;" ref="box">

            <b-row class="g-2 mb-2 mt-n2">
                <b-col lg>
                    <div class="input-group mb-1">
                        <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                        <input type="text" v-model="filter.keyword" placeholder="Search Scholar" class="form-control">
                        <Multiselect v-if="filter.progress == 7" class="white" style="width: 15%;" :options="ongoing" v-model="filter.ongoing" label="name" :searchable="true" placeholder="Select Ongoing Status" />
                        <Multiselect class="white" style="width: 11%;" :options="progresses" v-model="filter.progress" label="name" :searchable="true" placeholder="Select Status" />
                        <Multiselect class="white" style="width: 11%;" :options="['Undergraduate','JLSS']" v-model="filter.type" label="name" :searchable="true" placeholder="Select Type" />
                        <span @click="refresh()" class="input-group-text" v-b-tooltip.hover title="Refresh" style="cursor: pointer;"> 
                            <i class="bx bx-refresh search-icon"></i>
                        </span>
                        <b-button type="button" variant="primary" @click="openCreate()">
                            <i class="ri-add-circle-fill align-bottom me-1"></i> Create
                        </b-button>
                    </div>
                </b-col>
            </b-row>
            <div class="table-responsive">
                <table class="table table-nowrap align-middle mb-0">
                    <thead class="table-light">
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
                    <tbody>
                        <tr v-for="(list,index) in lists" v-bind:key="index" @click="selectRow(index)" :class="{'bg-dark-subtle': selectedRow === index}">
                            <td> {{ (meta.current_page - 1) * meta.per_page + index + 1 }}.</td>
                            <td>
                                <h5 class="fs-13 mb-0 fw-semibold text-primary">{{ list.profile.lastname+', '+list.profile.firstname}}</h5>
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
                <Pagination class="ms-2 me-2" v-if="meta" @fetch="fetch" :lists="lists.length" :links="links" :pagination="meta" />
            </div>
        </div>
    </div>
</template>
<script>
import _ from 'lodash';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { PageHeader, Pagination, Multiselect },
    props:['dropdowns'],
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
                type: null,
                year: null
            },
            index: null,
            selectedRow: null,
        }
    },
    watch: {
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal);
        },
        "filter.status"(newVal){
            (newVal) ? this.fetch() : '';
        },
        "filter.type"(newVal){
            (newVal) ? this.fetch() : '';
        },
        "filter.progress"(newVal){
            if(newVal != 7){
                this.filter.ongoing = null;
                this.filter.status = this.filter.progress;
                (newVal) ? this.fetch() : '';
            }
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
                    count: Math.floor((window.innerHeight-350)/59),
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
        selectRow(index) {
            this.selectedRow = index;
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