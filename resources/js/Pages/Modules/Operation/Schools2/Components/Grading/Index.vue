<template>
     <b-row class="g-2 mb-4" style="margin-top: -12px;">
        <b-col lg>
            <div class="input-group mb-1">
                <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                <input type="text" placeholder="Search Grade" class="form-control" style="width: 100px;">
                <span  class="input-group-text" v-b-tooltip.hover title="Refresh" style="cursor: pointer;"> 
                    <i class="bx bx-refresh search-icon"></i>
                </span>
                <b-button @click="openCreate()" type="button" variant="primary">
                    <i class="ri-add-circle-fill align-bottom me-1"></i> Create
                </b-button>
            </div>
        </b-col>
    </b-row>
    <div class="table-responsive table-card">
        <simplebar data-simplebar style="height: calc(100vh - 460px);">
            <table class="table table-nowrap align-middle mb-0">
                <thead class="table-light thead-fixed">
                    <tr class="fs-11">
                        <th style="width: 15%;" class="text-center">Grade</th>
                        <th style="width: 15%;" class="text-center">Upper Limit</th>
                        <th style="width: 15%;" class="text-center">Lower Limit</th>
                        <th style="width: 15%;" class="text-center">Is Failed?</th>
                        <th style="width: 15%;" class="text-center">Is Incomplete?</th>
                        <th style="width: 15%;" class="text-center">Status</th>
                        <th style="width: 10%;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="fs-12" v-for="(list,index) in gradings" v-bind:key="index" :class="{'bg-danger-subtle': list.is_failed,'bg-warning-subtle': list.is_incomplete}">
                        <td class="text-center">{{ list.grade }}</td>
                        <td class="text-center">{{ list.upper_limit }}</td>
                        <td class="text-center">{{ list.lower_limit }}</td>
                        <td class="text-center">
                            <span v-if="list.is_failed" class="badge bg-info-subtle text-info">Yes</span>
                            <span v-else class="badge bg-warning-subtle text-warning">No</span>
                        </td>
                        <td class="text-center">
                            <span v-if="list.is_incomplete" class="badge bg-info-subtle text-info">Yes</span>
                            <span v-else class="badge bg-warning-subtle text-warning">No</span>
                        </td>
                        <td class="text-center">
                            <span v-if="list.is_active" class="badge bg-success">Active</span>
                            <span v-else class="badge bg-danger">Inactive</span>
                        </td>
                        <td class="text-end">
                            <b-button @click="openEdit(list)" variant="soft-warning" v-b-tooltip.hover title="Edit" size="sm">
                                <i class="ri-pencil-fill align-bottom"></i>
                            </b-button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </simplebar>
    </div>
    <Create :campus="campus" ref="create"/>
</template>
<script>
import Create from './Create.vue';
import simplebar from "simplebar-vue";
export default {
    components: { Create, simplebar },
    props: ['campus','gradings'],
    methods: {
        openCreate(){
            this.$refs.create.show();
        },
        openEdit(data){
            this.$refs.create.edit(data);
        }
    }
}
</script>