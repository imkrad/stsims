<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" :title="(editable) ? 'Update Semester' : 'Add Semester'" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow>
                <BCol lg="12">
                    <BRow class="g-3 mt-n1">
                        <BCol lg="6" class="mt-1">
                            <InputLabel for="name" value="School Year" :message="form.errors.year"/>
                            <Multiselect class="form-control"
                            placeholder="Select Year" label="name" trackBy="name"
                            v-model="form.from" :close-on-select="true" 
                            :searchable="true" :options="years" />
                        </BCol>
                        <BCol lg="6" class="mt-1">
                            <InputLabel for="name" value="Academic Year"/>
                            <TextInput id="name" v-model="academic_year" type="text" class="form-control" readonly :light="true"/>
                        </BCol>
                        <BCol lg="12" class="mt-1">
                            <InputLabel value="Semester" :message="form.errors.semester_id"/>
                            <Multiselect :options="semesters" v-model="form.semester_id" label="name" :searchable="true" placeholder="Select Semester" />
                        </BCol>
                        <BCol lg="6" class="mt-2">
                            <InputLabel for="name" value="Start At" :message="form.errors.start_at"/>
                            <Multiselect class="form-control"
                            placeholder="Select Year" label="name" trackBy="name"
                            v-model="form.start_at" :close-on-select="true" 
                            :searchable="true" :options="starts" />
                        </BCol>
                        <BCol lg="6" class="mt-2">
                            <InputLabel for="name" value="End At" :message="form.errors.end_at"/>
                            <Multiselect class="form-control"
                            placeholder="Select Year" label="name" trackBy="name"
                            v-model="form.end_at" :close-on-select="true" 
                            :searchable="true" :options="starts" />
                        </BCol>
                    </BRow>
                </BCol>
            </BRow>
        </form>
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="submit('ok')" variant="primary" :disabled="form.processing" block>Submit</b-button>
        </template>
    </b-modal>
</template>
<script>
import { useForm } from '@inertiajs/vue3';
import Multiselect from "@vueform/multiselect";
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    components: {InputLabel, TextInput, Multiselect },
    props: ['campus','term','terms'],
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                from: null,
                academic_year: null,
                start_at: null,
                end_at: null,
                year: null,
                semester_id: null,
                campus_id: this.campus,
                option: 'campus-semester'
            }),
            courses: [],
            showModal: false,
            editable: false
        }
    },
    computed: {
        academic_year : function(){
            if(this.form.from){
                this.form.year = this.form.from;
                const ay = this.form.year+'-'+ (Number(this.form.year)+1);
                this.form.academic_year = ay;
                return ay;
            }else{
                return '';
            }
        },
        semesters : function() {
            return this.terms.filter(x => x.classification === this.term);
        },
        starts : function(){
            const months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
            const monthsArray = [];
            if(this.form.from){
                for(let a = 0; a <= 1; a++){
                    const y = this.form.from + a;
                    months.forEach((item) => {
                        monthsArray.push(item+' '+y);
                    });
                }
                return monthsArray;
            }else{
                return [];
            }
        },
        years: function(){
            const currentYear = new Date().getFullYear();
            const startYear = 2000;
            const yearsArray = [];

            for(let year = currentYear; year >= startYear; year--){
                yearsArray.push(year);
            }
            return yearsArray;
        }
    },
    methods: { 
        show(){
            this.form.reset();
            this.showModal = true;
        },
        submit(){
            // this.form = this.$inertia.form({
            //     school_id: this.id,
            //     academic_year: (this.semester.from) ? this.academic_year : '',
            //     start_at: (this.semester.start != '') ? this.semester.start : '',
            //     end_at: (this.semester.end != '') ? this.semester.end : '',
            //     year: this.year,
            //     semester_id: this.semester.semester,
            //     editable: false,
            //     type: 'campus-semester'
            // })

            if(this.editable){
                this.form.put('/management/update',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.form.reset();
                        this.hide();
                    },
                });
            }else{
                this.form.post('/management',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.form.reset();
                        this.hide();
                        this.$emit('success',true);
                    },
                });
            }
        },
        handleInput(field) {
            this.form.errors[field] = false;
        },
        hide(){
            this.editable = false;
            this.showModal = false;
        }
    }
}
</script>