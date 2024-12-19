<template>
    <hr class="text-muted"/>
    <table class="table tablez table-bordered table-nowrap align-middle mb-0 mt-2">
        <thead class="table-light">
            <tr class="fs-11">
                <th class="text-center" width="5%">#</th>
                <th class="text-center" width="15%">Academic Year</th>
                <th class="text-center" width="15%">Semester</th>
                <th class="text-center" width="15%">Level</th>
                <th class="text-center" width="15%">Grades Submitted</th>
                <th class="text-center" width="15%">Benefits Received</th>
                <th class="text-center" width="15%">Status</th>
                <th></th>
            </tr>
        </thead> 
        <tbody>
            <template v-if="enrollments.length > 0">
                <tr class="font-size-11" v-for="(list,index) in enrollments" v-bind:key="index" :class="(list.is_completed) ? 'table-success' : (list.is_missed) ? 'table-danger' : ''">
                    <td class="text-center">{{index+1}}</td>
                    <td class="text-center">{{list.semester.academic_year}}</td>
                    <td class="text-center fs-12">{{list.semester.semester.name}}</td>
                    <td class="text-center fs-12">{{list.level.others}}</td>
                    <td v-if="list.subjects.length == 0" class="text-center fs-11 text-muted">No Prospectus</td>
                    <td v-else class="text-center fs-12">{{checkGrades(list.subjects)}}</td>
                    <td class="text-center fs-12">{{checkBenefits(list.benefits)}}</td>
                    <td class="text-center">
                        <span v-if="!list.is_enrolled" class="badge border border-warning text-warning" v-b-tooltip.hover title="Still not Enrolled">Not Enrolled</span>
                        <span v-else-if="!list.is_completed" class="badge border border-success text-success" v-b-tooltip.hover title="Enrolled but not completed">Enrolled</span> 
                        <span v-else><i class="text-success ri-checkbox-circle-fill" v-b-tooltip.hover title="Grades and Benefits completed"></i></span>
                    </td>
                    <td>
                        <button @click="viewGrades(list)" class="btn btn-sm btn-label me-1" :class="(list.is_grades_completed == 1) ? 'btn-success' : 'btn-light' " type="button" :disabled="list.subjects.length == 0">
                            <div class="btn-content"><i class="ri-eye-line label-icon align-middle fs-12 me-2"></i>Grades</div>
                        </button>
                        <button @click="viewBenefits(list)" class="btn btn-sm btn-label" :class="(list.is_benefits_released == 1) ? 'btn-success' : 'btn-light' " type="button">
                            <div class="btn-content"><i class="ri-eye-line label-icon align-middle fs-12 me-2"></i>Benefits</div>
                        </button>
                    </td>
                </tr>
            </template>
            <template v-else>
                <tr>
                    <td colspan="7" class="text-center text-muted fs-12">No records for enrollment.</td>
                </tr>
            </template>
        </tbody>
    </table>
     <Benefits ref="benefits"/>
    <Grades ref="grades"/>
</template>
<script>
import Grades from './Modals/Grades.vue';
import Benefits from './Modals/Benefits.vue';
export default {
    components: { Benefits, Grades },
    props: ['enrollments'],
    methods: {
        checkBenefits(lists){
            const released = lists.reduce((acc, val) => (val.status_id == 20)  ? acc + 1 : acc, 0);
            return released +' of '+lists.length;
        },
        checkGrades(lists){
            const count = lists.reduce((acc, val) => val.grade != null ? acc + 1 : acc, 0);
            return count +' of '+lists.length;
        },
        viewBenefits(list){
            this.$refs.benefits.show(list);
        },
        viewGrades(list){
            this.$refs.grades.show(list);
        },
    }
}
</script>