<template>
    <div class="justify-content-center row" v-if="!prospectus">
        <div class="col-lg-6">
            <div class="text-center mt-sm-5 pt-4 mb-4">
                <div>
                    <div class="mt-5">
                        <h5>Please select a Prospectus</h5>
                        <p class="text-muted">Select a subcourse from the list along with its prospectus. If it's not available in the list, please add the prospectus to the course in the school profile. 😊</p>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-nowrap align-middle mb-0">
                    <thead class="table-light">
                        <tr class="fs-13 text-primary">
                            <th colspan="2">{{course.shortcut}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(list,index) in subcourses" v-bind:key="index">
                            <td>
                                <h5 class="fs-12 mb-0 text-dark">{{(list.type == '-') ? 'Default Prospectus' : list.type }}</h5>
                                <p class="fs-12 text-muted mb-0">{{list.years}} years</p>
                            </td>
                            <td class="text-end">
                                <b-button @click="openConfirm(list,level)" variant="info" size="sm" class="me-1">
                                    Select Prospectus
                                </b-button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div v-else class="row mt-0">
        <div class="col-md-12 mb-2">
            <span class="fs-14 fw-bold text-primary">{{(prospectus.type == '-') ? 'Default Prospectus' : prospectus.type }}</span><span class="ms-2 fs-12 text-muted">({{ prospectus.years }} Years)</span>
            <hr class="text-muted mb-2 mt-2"/>
            <div class="todo-content position-relative px-4 mx-n4" id="todo-content">
                <div class="col-md-12" :style="{ height: (height) + 'px' }" style="overflow: auto;">
                    <div class="table-responsive" :class="(index == 0) ? 'mt-0' : 'mt-3'" v-for="(year,index) in prospectus.information.prospectus" v-bind:key="index">
                        <table class="table table-bordered mb-0"> 
                            <thead>
                                <tr class="text-light text-center font-weight-bold font-size-11 bg-dark">
                                    <th>
                                        {{ year.year_level }}
                                    </th>
                                </tr>
                            </thead>
                        </table>
                        <div class="row g-0">
                            <div :class="(semester.semester == 'Summer Class') ? 'col-md-12' : 'col-md-6'" v-for="(semester,index) in year.semesters" v-bind:key="index">
                                <table class="table table-bordered mb-0" v-if="semester.courses.length > 0"> 
                                    <thead>
                                        <tr class="text-dark text-center font-weight-bold font-size-11" style="background-color: #ededed;">
                                            <th colspan="3">
                                                {{ semester.semester }}
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="font-size-11" v-for="(course,index) in semester.courses" v-bind:key="index">
                                            <td width="15%" class="text-center fw-bold fs-11">{{course.code}}</td>
                                            <td width="70%" class="text-center text-muted fs-11">{{course.subject}}</td>
                                            <td class="text-center fw-bold fs-11" width="15%" v-if="!course.hasOwnProperty('grades')">
                                                {{ course.grade}}
                                            </td>
                                            <td class="text-center fw-bold fs-11" width="15%" v-else>
                                                <span :class="(grade > 3 || grade == 'F') ? 'text-danger' : 'text-dark'" v-for="(grade,index) in course.grades" v-bind:key="index">
                                                    <span class="text-muted" v-if="course.grades.length > 1 && index != 0"> / </span> {{grade}} 
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Confirm @update="addCourse" :levels="levels" ref="confirm"/>
</template>
<script>
import Confirm from './Modals/Confirm.vue';
export default {
    components: { Confirm },
    props: ['id','prospectus','course','campus','level','levels'],
    data(){
        return {
            subcourses: [],
        }
    },
    watch: {
        prospectus: {
            immediate: true,
            handler(newVal) {
                if (!newVal) {
                    this.fetch();
                }
            }
        }
    },
    methods: {
        fetch(){
            axios.get('/enrollments',{
                params : {
                    campus_id: this.campus,
                    course_id: this.course.id,
                    option: 'prospectus'
                }
            })
            .then(response => {
                this.subcourses = response.data;
            })
            .catch(err => console.log(err));
        },
        openConfirm(data,level){
            this.$refs.confirm.show(data,this.id,level);
        },
        addCourse(data){
            this.$emit('update-prospectus', data);
        }
    }
}
</script>