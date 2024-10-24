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
                        <button @click="openCustom()" v-b-tooltip.hover title="Custom list of subjects" class="me-1 btn btn-sm btn-outline-primary btn-icon waves-effect waves-light" type="button">
                            <div class="btn-content"><i class="ri-menu-add-fill"></i></div>
                        </button>
                        <button @click="openRetake()" v-b-tooltip.hover title="Add Subject" class="me-1 btn btn-sm btn-outline-danger btn-icon waves-effect waves-light" type="button">
                            <div class="btn-content"><i class="ri-add-circle-fill"></i></div>
                        </button>
                        <button @click="openSubmit()" class="btn btn-sm  btn-success btn-label" type="button">
                            <div class="btn-content"><i class="ri-check-double-line label-icon align-middle fs-16 me-2"></i> Submit </div>
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
                                <th style="width: 5%;" class="text-center"></th>
                                <th style="width: 15%;" class="text-center">Code</th>
                                <th style="width: 75%;" class="text-center">Subject</th>
                                <th style="width: 5%;" class="text-center">Unit</th>
                            </tr>
                        </thead>
                        <tbody class=" fs-12">
                            <tr class="align-middle" v-for="list in lists" v-bind:key="list.id" style="line-height: 10px;">
                                <td class="text-center" @click="openSwitch(list)" style="cursor: pointer;">
                                    <i v-if="list.is_lab == true" class='bx bx bxs-flask h5 mb-n2 text-warning'></i>
                                    <i v-else class='bx bxs-book-open  h5 mb-n2 text-info'></i>
                                </td>
                                <td class="fw-semibold fs-12 text-center">{{ list.code }} <span v-if="list.is_lab == true" class="text-warning fw-semibold">(Lab)</span></td>
                                <td class="text-center">{{ list.subject }} <span v-if="list.is_lab == true" class="text-warning fw-semibold">(Lab)</span></td>
                                <td class="text-center">{{ list.unit }}</td>
                            </tr>
                        </tbody>
                        <tfoot class="table-light tfoot-fixed">
                            <tr class="fs-12">
                                <th colspan="3"></th>
                                <th class="text-center text-primary">{{units}}</th>
                            </tr>
                        </tfoot>
                    </table>
                </simplebar>
            </div>
        </div>
    </b-row>
    <Retake ref="retake"/>
    <Swtch @status="fetchSemesters" ref="swtch"/>
    <Confirm @update="updateEnrollment" ref="confirm"/>
</template>
<script>
import simplebar from "simplebar-vue";
import Swtch from './Modals/Swtch.vue';
import Retake from './Modals/Retake.vue';
import Confirm from './Modals/Confirm.vue';
export default {
    components: { simplebar, Confirm, Swtch, Retake },
    data(){
        return {
            selected: { semester: { semester: {}}, level: {}},
            info: {},
            subjects: [],
            customs: [],
            lists: []
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
        }
    },
    methods: {
        set(info,data){
            this.info = info;
            this.selected = data;

            let semesters,semester, prospectus;

            prospectus = info.information.prospectus;
            semesters = prospectus.filter(x => x.year_level === this.selected.level.others);
            semester = semesters[0].semesters.filter(x => x.semester === this.selected.semester.semester.name);

            this.prospectus = Object.assign({},semester[0]);
            this.lists = this.prospectus.courses;

            prospectus.forEach((item) => {
                item.semesters.forEach((it) => {
                    it.courses.forEach((i) => {
                        if(!i.hasOwnProperty("grade")){
                            this.subjects.push(i);
                        }
                        this.customs.push(i);
                    });
                });
            });
        },
        openSubmit(){
            let data = new FormData();
            data.append('id',this.selected.id);
            data.append('lists', (this.lists.length != 0) ? JSON.stringify(this.lists) : '');
            data.append('file_type', 'enrollment');
            data.append('option', 'enrollment');
            this.$refs.confirm.set(data,this.selected.semester.academic_year,this.selected.level.others,this.selected.semester.semester.name);
        },
        openSwitch(subject){
            this.$refs.switch.set(this.subjects,subject,this.selected.scholar_id);
        },
        openRetake(){
            this.$refs.retake.set(this.customs);
        },
        openCustom(){
            this.custom = true;
            this.lists = [];
            this.$refs.custom.set(this.customs);
        },
        updateEnrollment(data){
            this.$emit('update-enrollment', data);
        }
    }
}
</script>