<template>
    <PageHeader title="Categories" pageTitle="Dropdown" />
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="file-manager-content w-100 p-4 pb-0" style="height: calc(100vh - 180px); overflow: auto;" ref="box">

            <b-row class="g-2 mb-2 mt-n2">
                <b-col lg>
                    <div class="input-group mb-1">
                        <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                        <input type="text" v-model="filter.keyword" placeholder="Search Dropdown" class="form-control" style="width: 100px;">
                        <Multiselect class="white"
                        style="width: 15%;"
                        :options="types" 
                        v-model="filter.classification" 
                        label="name"
                        :searchable="true" 
                        placeholder="Select Classification" />
                        <span @click="refresh()" class="input-group-text" v-b-tooltip.hover title="Refresh" style="cursor: pointer;"> 
                            <i class="bx bx-refresh search-icon"></i>
                        </span>
                        <b-button type="button" variant="primary" @click="openCreate()" :disabled="filter.classification == null">
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
                            <th style="width: 15%;">Name</th>
                            <th style="width: 15%;" class="text-center">Classification</th>
                            <th style="width: 15%;" class="text-center">Type</th>
                            <th style="width: 15%;" class="text-center">Color</th>
                            <th style="width: 15%;" class="text-center">Others</th>
                            <th style="width: 15%;" class="text-center">Status</th>
                            <th style="width: 7%;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(list,index) in lists" v-bind:key="index">
                            <td> {{ (meta.current_page - 1) * meta.per_page + index + 1 }}.</td>
                            <td>{{list.name}}</td>
                            <td class="text-center">{{list.classification}}</td>
                            <td class="text-center">{{list.type}}</td>
                            <td class="text-center">{{list.color}}</td>
                            <td class="text-center">{{list.others}}</td>
                            <td class="text-center">{{list.is_active}}</td>
                            <td class="text-end">
                                <b-button @click="openUpdate(list,index)" variant="soft-primary" v-b-tooltip.hover title="Edit" size="sm" class="edit-list">
                                    <i class="ri-pencil-fill align-bottom"></i>
                                </b-button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <Pagination class="ms-2 me-2" v-if="meta" @fetch="fetch" :lists="lists.length" :links="links" :pagination="meta" />
            </div>

            <Create @success="fetch()" :type="'Category'" ref="create" />
        </div>
    </div>
</template>
<script>
import _ from 'lodash';
import Create from '../Create.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { PageHeader, Pagination, Multiselect, Create },
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            filter: { 
                classification: null,
                keyword: null
            },
            types: ['Scholarship','Category','Type','Expenditure']
        }
    },
    watch: {
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal);
        },
        "filter.classification"(newVal){
            this.fetch();
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
            page_url = page_url || '/references';
            axios.get(page_url,{
                params : {
                    keyword: this.filter.keyword,
                    classification: this.filter.classification,
                    count: ((window.innerHeight-350)/52),
                    type: 'Category',
                    option: 'dropdowns'
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
            this.$refs.create.show(this.filter.classification);
        }
    }
}
</script>