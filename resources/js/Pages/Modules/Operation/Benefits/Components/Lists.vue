<template>
    <b-row class="g-2 mb-2 mt-n2">
        <b-col lg>
            <div class="input-group mb-1">
                <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                <input type="text" v-model="filter.year" placeholder="Search Year" class="form-control">
                <Multiselect class="white" style="width: 13%;" :options="months" v-model="filter.type" label="name" :searchable="true" placeholder="Select Month" />
                <Multiselect class="white" style="width: 15%;" :options="['Undergraduate','JLSS']" v-model="filter.type" label="name" :searchable="true" placeholder="Select Status" />
                <span @click="refresh()" class="input-group-text" v-b-tooltip.hover title="Refresh" style="cursor: pointer;"> 
                    <i class="bx bx-refresh search-icon"></i>
                </span>
                <b-button type="button" variant="primary" @click="openGenerate()">
                    <i class="ri-add-circle-fill align-bottom me-1"></i> Generate
                </b-button>
            </div>
        </b-col>
    </b-row>
    <div class="table-responsive">
        <table class="table table-nowrap align-middle mb-0">
            <thead class="table-light">
                <tr class="fs-11">
                    <th style="width: 20%;">Release Month</th>
                    <th style="width: 15%;" class="text-center">Scholars</th>
                    <th style="width: 15%;" class="text-center">Total</th>
                    <th style="width: 15%;" class="text-center">Added By</th>
                    <th style="width: 20%;" class="text-center">Released Date</th>
                    <th style="width: 10%;" class="text-center">Status</th>
                    <th style="width: 10%;"></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(list,index) in lists" v-bind:key="index">
                    <td>
                        <h5 class="fs-13 mb-0 text-dark">{{list.month}}</h5>
                        <p class="fs-12 text-muted mb-0">Batch {{list.batch }}</p>
                    </td>
                    <td class="text-center">{{list.count}} Scholar<span v-if="list.count > 1">s</span></td>
                    <td class="text-center">{{ formatMoney(list.total) }}</td>
                    <td class="text-center">{{list.user.name}}</td>
                    <td class="text-center">{{list.created_at}}</td>
                    <td class="text-center">
                        <span :class="'badge '+list.status.color">{{list.status.name}}</span>
                    </td>
                    <td class="text-end">
                        <b-button @click="openView(list)" variant="soft-info" v-b-tooltip.hover title="View" size="sm" class="edit-list me-1"><i class="ri-eye-fill align-bottom"></i> </b-button>
                        <b-button v-if="list.status.name != 'Released'" @click="openConfirmation(list)" variant="soft-success" v-b-tooltip.hover title="Mark as Completed" size="sm" class="edit-list"><i class="ri-checkbox-circle-fill align-bottom"></i> </b-button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
import _ from 'lodash';
import Multiselect from "@vueform/multiselect";
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { Multiselect, Pagination },
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            filter: { 
                keyword: null,
                status: null,
                month: null
            },
            months: ['January','February','March','April','May','June','July','August','September','October','November','December'],
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
                    keyword: this.filter.keyword,
                    status: this.filter.status,
                    month: this.filter.month,
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
        openGenerate(){
            this.$emit('updateShow',true);
        },
        formatMoney: function formatMoney(value) {
            var val = (value / 1).toFixed(2).replace(',', '.');
            return '₱' + val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        },
        refresh(){
            this.fetch();
        }
    }
}
</script>