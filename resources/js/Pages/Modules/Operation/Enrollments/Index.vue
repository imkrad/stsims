<template>
    <Head title="Enrollments" />
    <PageHeader title="List of Enrollments" pageTitle="List" />
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="file-manager-sidebar">
            <Sidebar ref="sidebar"/>
        </div>
        <div class="file-manager-content w-100 p-4 pb-0" style="height: calc(100vh - 180px); overflow: auto;" ref="box">

        </div>
    </div>
</template>
<script>
import _ from 'lodash';
import Sidebar from './Components/Sidebar.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { PageHeader, Pagination, Multiselect, Sidebar },
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
                    agency: this.filter.agency,
                    count: ((window.innerHeight-350)/59),
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