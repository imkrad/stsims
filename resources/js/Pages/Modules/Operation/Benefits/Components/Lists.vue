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
        </table>
    </div>
</template>
<script>
import Multiselect from "@vueform/multiselect";
export default {
    components: { Multiselect },
    data(){
        return {
            filter: { 
                keyword: null,
                status: null,
                ongoing: null,
                progress: null,
                type: null,
                year: null
            },
            months: ['January','February','March','April','May','June','July','August','September','October','November','December'],
        }
    },
    methods: {
        openGenerate(){
            this.$emit('updateShow',true);
        }
    }
}
</script>