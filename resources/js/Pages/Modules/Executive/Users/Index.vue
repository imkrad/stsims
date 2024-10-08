<template>
    <PageHeader title="List of Staffs" pageTitle="List" />
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="file-manager-content w-100 p-4 pb-0" style="height: calc(100vh - 180px); overflow: auto;" ref="box">

            <b-row class="g-2 mb-2 mt-n2">
                <b-col lg>
                    <div class="input-group mb-1">
                        <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                        <input type="text" v-model="filter.keyword" placeholder="Search Staff" class="form-control" style="width: 100px;">
                        <Multiselect class="white" style="width: 10%;" :options="dropdowns.agencies" v-model="filter.agency" label="name" :searchable="true" placeholder="Select Agency" />
                        <Multiselect class="white" style="width: 13%;" :options="dropdowns.roles" v-model="filter.role" label="name" :searchable="true" placeholder="Select Role" />
                        <span @click="refresh()" class="input-group-text" v-b-tooltip.hover title="Refresh" style="cursor: pointer;"> 
                            <i class="bx bx-refresh search-icon"></i>
                        </span>
                            <b-button @click="openCreate" type="button" variant="primary">
                                <i class="ri-add-circle-fill align-bottom me-1"></i> Create
                        </b-button>
                    </div>
                </b-col>
            </b-row>
            <div class="table-responsive">
                <table class="table table-nowrap align-middle mb-0">
                    <thead class="table-light">
                        <tr class="fs-11">
                            <th></th>
                            <th style="width: 20%;">Name</th>
                            <th style="width: 25%;" class="text-center">Assigned</th>
                            <th style="width: 10%;" class="text-center">Agency</th>
                            <th style="width: 15%;" class="text-center">Email</th>
                            <th style="width: 10%;" class="text-center">Mobile</th>
                            <th style="width: 10%;" class="text-center">Status</th>
                            <th style="width: 7%;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(list,index) in lists" v-bind:key="index" :class="[(list.is_active == 0) ? 'table-warnings' : '']">
                            <td>
                                <div class="avatar-xs chat-user-img online">
                                    <img :src="list.avatar" alt="" class="avatar-xs rounded-circle">
                                    <span v-if="list.is_active" class="user-status text-success"></span>
                                </div>
                            </td>
                            <td>
                                <h5 class="fs-13 mb-0 text-dark">{{list.name}}</h5>
                                <p class="fs-12 text-muted mb-0">{{list.assigned_role}}</p>
                            </td>
                            <td class="text-center fs-12">{{list.assigned_type.name}}</td>
                            <td class="text-center fs-12">{{list.assigned_agency}}</td>
                            <td class="text-center fs-12">{{list.email}}</td>
                            <td class="text-center fs-12">{{list.mobile}}</td>
                            <td class="text-center fs-12">
                                <span v-if="list.is_active" class="badge bg-success">Active</span>
                                <span v-else class="badge bg-danger">Inactive</span>
                            </td>
                            <td class="text-end">
                                <b-button variant="soft-success" @click="openActivation('activation',list,index)" v-b-tooltip.hover title="Lock" size="sm" class="remove-list me-1">
                                    <i class="ri-lock-2-fill align-bottom"></i>
                                </b-button>
                                <b-button variant="soft-warning" @click="openActivation('verification',list,index)" v-b-tooltip.hover title="Verify" size="sm" class="remove-list me-1">
                                    <i class="ri-mail-send-fill align-bottom"></i>
                                </b-button>
                                <b-button variant="soft-primary" @click="openEdit(list,index)" v-b-tooltip.hover title="Edit" size="sm" class="edit-list">
                                    <i class="ri-pencil-fill align-bottom"></i>
                                </b-button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <Pagination class="ms-2 me-2" v-if="meta" @fetch="fetch" :lists="lists.length" :links="links" :pagination="meta" />
            </div>
        </div>
    </div>
    <Create :dropdowns="dropdowns" ref="create"/>
    <Activation @update="updateData" ref="activation"/>
</template>
<script>
import _ from 'lodash';
import Create from './Create.vue';
import Activation from './Modals/Activation.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { PageHeader, Pagination, Multiselect, Create, Activation },
    props:['dropdowns'],
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            filter: { 
                keyword: null,
                role: null,
                agency: null,
            },
            index: null,
        }
    },
    watch: {
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal);
        },
        "filter.agency"(newVal){
            this.fetch();
        },
        "filter.role"(newVal){
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
            page_url = page_url || '/executive';
            axios.get(page_url,{
                params : {
                    keyword: this.filter.keyword,
                    role: this.filter.role,
                    agency: this.filter.agency,
                    count: ((window.innerHeight-350)/59),
                    option: 'users'
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
        openActivation(type,data,index){
            this.index = index;
            this.$refs.activation.show(type,data);
        },
        updateData(data){
            this.lists[this.index] = data;
        }
    }
}
</script>