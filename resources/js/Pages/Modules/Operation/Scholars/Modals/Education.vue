<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" title="Filter Education" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow class="g-3">
                <BCol lg="12" class="mt-2" v-if="$page.props.user.data.assigned_role != 'University Coordinator'">
                    <InputLabel value="School"/>
                    <Multiselect :options="schools" @search-change="debouncedFetchSchools" v-model="school" label="name" :searchable="true" placeholder="Select School" />
                </BCol>
                <BCol lg="12" class="mt-1">
                    <InputLabel value="Course"/>
                    <Multiselect :options="courses" @search-change="debouncedFetchCourses" v-model="course" label="name" :searchable="true" placeholder="Select Course" />
                </BCol>
            </BRow>
        </form>
          <template v-slot:footer>
            <b-button @click="hide" variant="light" block>Cancel</b-button>
            <b-button @click="submit('ok')" variant="primary" block>Filter</b-button>
        </template>
    </b-modal>
</template>
<script>
import _ from 'lodash';
import Multiselect from "@vueform/multiselect";
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
export default {
    components: { Multiselect, InputLabel },
    data(){
        return {
            currentUrl: window.location.origin,
            school: null,
            course: null,
            schools: [],
            courses: [],
            showModal: false,
            debouncedFetchSchools: null, 
            debouncedFetchCourses: null, 
        }
    },
    created() {
        this.debouncedFetchSchools = _.debounce(this.fetchSchools, 300);
        this.debouncedFetchCourses = _.debounce(this.fetchCourses, 300);
    },
    methods: { 
        show(){
            this.showModal = true;
        },
        submit() {
            this.$emit('filter-selected', { school: this.school, course: this.course });
            this.hide(); 
        },
        fetchSchools(code){
            axios.get('/search',{
                params: {
                    option: 'schools',
                    code: code
                }
            })
            .then(response => {
                this.schools = response.data;
            })
            .catch(err => console.log(err));
        },
        fetchCourses(code){
            axios.get('/search',{
                params: {
                    option: 'courses',
                    code: code
                }
            })
            .then(response => {
                this.courses = response.data;
            })
            .catch(err => console.log(err));
        },
        hide(){
            this.showModal = false;
        }
    }
}
</script>