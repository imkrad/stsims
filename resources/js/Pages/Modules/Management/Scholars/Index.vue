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
                        <Multiselect class="white" style="width: 12%;" :options="progresses" v-model="filter.progress" label="name" :searchable="true" placeholder="Select Status" />
                        <span @click="openUpload()" class="input-group-text" v-b-tooltip.hover title="Upload" style="cursor: pointer;"> 
                            <i class="ri-upload-cloud-fill search-icon"></i>
                        </span>
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
                
                <Pagination class="ms-2 me-2" v-if="meta" @fetch="fetch" :lists="lists.length" :links="links" :pagination="meta" />
            </div>
        </div>
    </div>
    <Upload ref="upload"/>
</template>
<script>
import _ from 'lodash';
import Upload from './Modals/Upload.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { PageHeader, Pagination, Multiselect, Upload },
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
                year: null
            },
            index: null
        }
    },
    watch: {
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal);
        },
        "filter.status"(newVal){
            this.fetch();
        },
        "filter.progress"(newVal){
            if(newVal != 7){
                this.filter.ongoing = null;
                this.filter.status = this.filter.progress;
                this.fetch();
            }
        },
        "filter.ongoing"(newVal){
            this.fetch();
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
            page_url = page_url || '/management';
            axios.get(page_url,{
                params : {
                    keyword: this.filter.keyword,
                    status: this.filter.status,
                    count: ((window.innerHeight-350)/52),
                    option: 'courses'
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
        openUpload(){
            this.$refs.upload.show();
        },
        openUpdate(data,index){
            this.index = index;
            this.$refs.create.update(data);
        }
    }
}
</script>