<template>
    <b-row class="mt-n2 mb-3">
        <div class="col-md-12">
            <div class="alert alert-light border-1" role="alert">
                <div class="align-items-center d-flex">
                    <h5 class="card-title text-dark mb-0 fs-13 flex-grow-1">
                        <ol class="breadcrumb mt-1">
                            <li class="breadcrumb-item">{{ selected.semester.academic_year }}</li>
                            <li class="breadcrumb-item"><span class="">{{ selected.level.others }}</span></li>
                            <li class="breadcrumb-item"><span class="text-muted">{{ selected.semester.semester.name }}</span></li>
                        </ol>
                    </h5>
                    <div class="flex-shrink-0">
                        <button v-if="selected.is_locked == 0" @click="openLock(selected)" :disabled="!selected.is_grades_completed" v-b-tooltip.hover title="Lock" class="btn btn-sm btn-primary btn-md float-end me-1" type="button">
                            <div class="btn-content"><i class="bx bxs-lock-alt"></i></div>
                        </button>
                        <button v-if="selected.is_locked == 0" @click="openSave()" class="btn btn-sm btn-success btn-label me-1" type="button">
                            <div class="btn-content"><i class="ri-check-double-line label-icon align-middle fs-16 me-2"></i> Save </div>
                        </button>
                        <button v-if="selected.is_locked == 1 && ($page.props.role == 'Scholarship Coordinator' || $page.props.role == 'Administrator')" @click="openLock(selected)" class="btn btn-sm btn-danger btn-md btn-label" type="button" v-b-tooltip.hover title="Scholarship Coordinator Only">
                            <div class="btn-content"><i class="ri-lock-unlock-fill label-icon align-middle fs-16 me-2" ></i> Unlock </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <hr class="text-muted mt-0"/>
            <div class="table-responsive">
                <simplebar data-simplebar style="height: calc(100vh - 300px);">
                    <table class="table table-bordered align-middle mb-0">
                        <thead class="table-dark thead-fixed">
                            <tr class="fs-12">
                                <th style="width: 5%;" class="text-center">#</th>
                                <th style="width: 15%;" class="text-center">Code</th>
                                <th class="text-center" style="width: 60%;">Subject</th>
                                <th class="text-center" style="width: 10%;">Unit</th>
                                <th class="text-center" style="width: 10%;">Grade</th>
                            </tr>
                        </thead>
                        <tbody class=" fs-12">
                            <tr v-for="(list,index) in lists" v-bind:key="list.id" :class="[(list.is_failed) ? 'table-danger' : '']">
                                <td style="width: 5%;" class="text-center">{{ index+1 }}</td>
                                <td style="width: 15%;" class="text-center fw-semibold">{{list.code}} <span v-if="list.is_lab == true" class="text-warning fw-bold">(Lab)</span></td>
                                <td style="width: 63%;" class="text-center">{{list.subject}} <span v-if="list.is_lab == true" class="text-warning fw-bold">(Lab)</span></td>
                                <td style="width: 10%;" class="text-center">{{list.unit}}</td>
                                <td style="width: 7%;" class="text-center">
                                    <select  v-model="list.grade" v-if="selected.is_locked == 0" class="form-select form-select-sm mt-n1 mb-n1" style="">
                                        <option :value="null" disabled>-</option>
                                        <option :value="list1.grade" v-for="(list1,index) in gradings" v-bind:key="index">{{list1.grade}}</option>
                                    </select>
                                    <span class="fw-semibold" v-else>{{list.grade}}</span>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot class="table-light tfoot-fixed">
                            <tr class="fs-12">
                                <th colspan="3"></th>
                                <th class="text-center text-primary">{{ units }}</th>
                                <th class="text-center text-primary">{{ total }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </simplebar>
            </div>
        </div>
    </b-row>
    <Lock @update="updateEnrollment" ref="lock"/>
    <Confirm @update="updateEnrollment" ref="confirm"/>
</template>
<script>
import Lock from './Modals/Lock.vue';
import Confirm from './Modals/Confirm.vue';
import simplebar from "simplebar-vue";
export default {
    components: { simplebar, Confirm, Lock },
    props: ['gradings'],
    data(){
        return {
            lists: [],
            selected: { semester: { semester: {}}, level: {}},
        }
    },
    computed: {
        units: function () {
            var sum = 0;
            if(this.lists != undefined){
                this.lists.forEach(e => {
                sum += Number(e.unit);
                });
            }
            return sum
        },
        total: function () {
            var sum = 0; var tot = 0;
            if(this.lists != undefined){
                this.lists.forEach(e => {
                    if(e.is_nonacademic == false){
                        tot++;
                        if(e.grade == 'F' || e.grade == 'f'){

                        }else{
                            sum += Number(e.grade);
                        }
                    }
                });
            }
            return (sum/tot).toFixed(3);
        },
        failed: function(){
            var count = 0;
            this.lists.forEach(e => {
                if(e.grade == 'F' || e.grade == 'f' || e.grade > 3){
                    count = count + 1;
                }
            });
            return count;
        }
    },
    methods: {
        set(data){
            this.selected = data;
            this.lists = data.subjects;
        },
        openSave(){
            let data = new FormData();
            data.append('id',this.selected.id);
            data.append('lists',(this.lists.length != 0) ? JSON.stringify(this.lists) : '');
            data.append('file_type','grade');
            data.append('option','grade');
            this.$refs.confirm.set(data);
        },
        openLock(data){
            this.$refs.lock.set(data,this.lists);
        },
        updateEnrollment(data){
            this.$emit('update-enrollment', data);
        }
    }
}
</script>