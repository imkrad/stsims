<template>
    <Head title="Scholars" />
    <PageHeader title="Financial Release" pageTitle="List" />
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="file-manager-content w-100 p-4 pb-0" style="height: calc(100vh - 180px); overflow: auto;" ref="box">

            <b-row class="g-2 mb-2 mt-n2">
                <b-col lg>
                    <div class="input-group mb-1">
                        <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                        <input type="text" placeholder="Search Scholar" class="form-control">
                        <Multiselect class="white" style="width: 11%;" :options="['Undergraduate','JLSS']" label="name" :searchable="true" placeholder="Select Type" />
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
                            <th style="width: 20%;">Region</th>
                            <th style="width: 20%;" class="text-center">Batch</th>
                            <th style="width: 12%;" class="text-center">No. of scholars</th>
                            <th style="width: 12%;" class="text-center">Total</th>
                            <th style="width: 8%;" class="text-center">Status</th>
                            <th style="width: 5%;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(list,index) in lists" v-bind:key="index" @click="selectRow(index)" :class="{'bg-dark-subtle': selectedRow === index}">
                            <td> {{ (meta.current_page - 1) * meta.per_page + index + 1 }}.</td>
                            <td>
                                <h5 class="fs-13 mb-0 fw-semibold text-primary">{{ list.agency.name}}</h5>
                                <p class="fs-12 text-muted mb-0">{{list.agency.acronym}}</p>
                            </td>
                            <td class="text-center fs-12">{{list.batch}}</td>
                            <td class="text-center fs-12">{{list.count}}</td>
                            <td class="text-center fs-12">{{list.total}}</td>
                            <td class="text-center">
                                <span :class="'badge '+list.status.color+' '+list.status.others">{{list.status.name}}</span>
                            </td>
                            <td class="text-end">
                                
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
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            index: null,
            selectedRow: null,
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
            page_url = page_url || '/benefits';
            axios.get(page_url,{
                params : {
                    count: Math.floor((window.innerHeight-350)/59),
                    option: 'management'
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
        selectRow(index) {
            this.selectedRow = index;
        },
    }
}
</script>