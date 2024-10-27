<template>
     <b-row class="g-2 mb-2 mt-n2">
        <b-col lg>
            <div class="input-group mb-1">
                <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                <input type="text" placeholder="Search Year" class="form-control">
                <span @click="refresh()" class="input-group-text" v-b-tooltip.hover title="Refresh" style="cursor: pointer;"> 
                    <i class="bx bx-refresh search-icon"></i>
                </span>
                <b-button type="button" variant="danger" @click="openClose()">
                    <i class="ri-close-circle-fill align-bottom me-1"></i> Close
                </b-button>
            </div>
        </b-col>
    </b-row>
    <div class="table-responsive">
        <table class="table table-nowrap align-middle mb-0">
            <thead class="table-light">
                <tr class="fs-11">
                    <th width="25%" class="text-center">Account No.</th>
                    <th width="50%" class="text-center">Scholar</th>
                    <th width="25%" class="text-center">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="list in lists" v-bind:key="list.id" @click="openView(list)" style="cursor: pointer;">
                    <td width="25%" class="text-center">{{list.account_no}}</td>
                    <td width="50%" class="text-center">{{list.name}}</td>
                    <td width="25%" class="text-center"> ₱{{ formatMoney(list.total) }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <b-row class="mb-3 mt-3">
        <div class="col-md-12">
            <div class="hstack float-end gap-2 mt-4 mt-sm-0">
                <b-button v-if="lists.length != 0" @click="openRelease()" :disabled="(lists.length == 0) ? true : false" type="button" class="w-lg float-end me-0" variant="primary">Save</b-button>
            </div>
        </div>
    </b-row>
    <Release @update="updateList" ref="release"/>
    <View ref="view"/>
</template>
<script>
import View from '../Modals/View.vue';
import Release from '../Modals/Release.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { Pagination, View, Release },
    data(){
        return {
            currentUrl: window.location.origin,
            pagination: {},
            meta: {},
            links: {},
            lists: [],
            keyword: '',
            info: {},
        }
    },
    methods: {
        fetch(data) {
            this.info = data;
            axios.get('/benefits',{
                params : {
                    option: 'scholars',
                    count: Math.floor((window.innerHeight-350)/44.5),
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
        formatMoney(value) {
            let val = (value/1).toFixed(2).replace(',', '.')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },
        openView(data){
            this.$refs.view.set(data);
        },
        openRelease(){
            this.$refs.release.set(this.lists,this.info);
        },
        openClose(){
            this.$emit('close',true);
        },
        updateList(){
            this.$emit('update',true);
        }
    }
}
</script>