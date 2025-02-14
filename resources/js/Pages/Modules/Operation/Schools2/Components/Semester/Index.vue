<template>
     <b-row class="g-2 mb-4" style="margin-top: -12px;">
        <b-col lg>
            <div class="input-group mb-1">
                <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                <input type="text" v-model="filter.keyword" placeholder="Search Course" class="form-control" style="width: 100px;">
                <span @click="refresh()" class="input-group-text" v-b-tooltip.hover title="Refresh" style="cursor: pointer;"> 
                    <i class="bx bx-refresh search-icon"></i>
                </span>
                <b-button type="button" variant="primary" @click="openCreate()">
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
                        <th style="width: 4%;" class="text-center">#</th>
                        <th style="width: 15%;">Academic Year</th>
                        <th style="width: 15%;" class="text-center">Start At</th>
                        <th style="width: 15%;" class="text-center">End At</th>
                        <th style="width: 15%;" class="text-center">Year</th>
                        <th style="width: 15%;" class="text-center">Semester</th>
                        <th style="width: 14%;" class="text-center">Status</th>
                        <th style="width: 7%;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="fs-12" v-for="(list,index) in semesters" v-bind:key="index" :class="{'bg-success-subtle': list.is_main}">
                        <td class="text-center">{{ index+1 }}</td>
                        <td>{{ list.academic_year }}</td>
                        <td class="text-center">{{ list.start_at }}</td>
                        <td class="text-center">{{ list.end_at }}</td>
                        <td class="text-center">{{ list.year }}</td>
                        <td class="text-center">{{ list.semester.name }}</td>
                        <td class="text-center">
                            <span v-if="list.is_active" class="badge bg-success">Active</span>
                            <span v-else class="badge bg-danger">Inactive</span>
                        </td>
                        <td class="text-end">
                            <b-button @click="openEdit(list,index)" variant="soft-warning" v-b-tooltip.hover title="Edit" size="sm">
                                <i class="ri-pencil-fill align-bottom"></i>
                            </b-button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </simplebar>
    </div>
    <Create :terms="terms" :term="term" :campus="campus" ref="create"/>
</template>
<script>
import Create from './Create.vue';
import simplebar from "simplebar-vue";
export default {
    props:['campus','semesters','terms','term'],
    components: { Create, simplebar },
    data(){
        return {
            filter: {
                keyword: null
            }
        }
    },
    methods: {
        openCreate(){
            this.$refs.create.show();
        },
        openCertification(data,id,course){
            if(data.length > 0){
                
            }else{
                this.$refs.certification.show(id,course);
            }
        }   
    }
}
</script>