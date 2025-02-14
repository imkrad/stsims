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
                        <th style="width: 33%;">Course</th>
                        <th style="width: 13%;" class="text-center">Type</th>
                        <th style="width: 8%;" class="text-center">Years</th>
                        <th v-if="type == 'Private'" style="width: 8%;" class="text-center">Certification</th>
                        <th style="width: 8%;" class="text-center">Status</th>
                        <th style="width: 5%;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="fs-12" v-for="(list,index) in courses" v-bind:key="index" :class="{'bg-danger-subtle': !list.hasActive}">
                        <td class="text-center">{{ index+1 }}</td>
                        <td>{{ list.course.shortcut }}</td>
                        <td class="text-center">{{ list.type }}</td>
                        <td class="text-center">{{ list.years }}</td>
                        <td v-if="type == 'Private'" class="text-center">
                            <span v-if="list.certifications.length > 0" class="badge bg-success-subtle text-success">Active</span>
                            <span v-else class="badge bg-warning-subtle text-warning">Expired</span>
                        </td>
                        <td class="text-center">
                            <span v-if="list.is_active" class="badge bg-success">Active</span>
                            <span v-else class="badge bg-danger">Inactive</span>
                        </td>
                        <td class="text-end">
                            <BDropdown toggle-class="btn btn-soft-secondary btn-sm dropdown arrow-none" menu-class="dropdown-menu-end" :offset="{ alignmentAxis: -130, crossAxis: 0, mainAxis: 10 }">
                                <template #button-content><i class="ri-more-fill align-middle"></i></template>
                                <BDropdownItem @click="openView(list.code)">
                                    <i class="ri-eye-fill align-bottom me-2 text-muted"></i><span class="text-muted">View</span>
                                </BDropdownItem>
                                <BDropdownItem @click="openEdit(list)">
                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i><span class="text-muted">Edit</span>
                                </BDropdownItem>
                                <BDropdownItem @click="openCertification(list.certifications,list.id,list.course.shortcut)">
                                    <i class="ri-file-paper-2-fill align-bottom me-2 text-muted"></i><span class="text-muted">Certificate</span>
                                </BDropdownItem>
                            </BDropdown>
                        </td>
                    </tr>
                </tbody>
            </table>
        </simplebar>
    </div>
    <Create :campus="campus" :type="type" ref="create"/>
    <Certification :certifications="certifications" ref="certification"/>
</template>
<script>
import Create from './Create.vue';
import Certification from './Certification.vue';
import simplebar from "simplebar-vue";
export default {
    props:['code','campus','courses','certifications','type'],
    components: { Create, Certification, simplebar },
    data(){
        return {
            filter: {
                keyword: null
            },
            index: null,
        }
    },
    methods: {
        openCreate(){
            this.$refs.create.show();
        },
        openView(id){
            this.$inertia.visit('?course='+id);
        },
        openEdit(data){
            this.$refs.create.edit(data);
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