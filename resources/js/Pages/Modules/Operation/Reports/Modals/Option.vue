<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" title="Report Options" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform" v-if="type">
            <BRow>
                <BCol lg="12">
                    <div class="mt-1 mb-n3">
                        <div class="avatar-md mx-auto">
                            <div class="avatar-title rounded-circle bg-light">
                                <i class="ri-download-cloud-fill h1 mb-0 text-primary"></i>
                            </div>
                        </div>
                        <div class="p-2 mt-2 text-center">
                            <h6 class="mb-0">{{type.info}}</h6>
                            <p class="font-size-12 text-muted">Please click to preview the report</p>
                        </div>
                    </div>
                </BCol>
            </BRow>
           
            <BRow class="g-3 d-flex justify-content-center">
                <BCol lg="9" class="mt-4">
                    <Multiselect :options="programs" v-model="program" label="name" :searchable="true" placeholder="Select Program" />
                </BCol>
                <BCol lg="9" class="mt-2">
                    <Multiselect :options="years" @search-change="debouncedFetchYears" v-model="year" label="name" :searchable="true" placeholder="Select Academic Year" />
                </BCol>
                <BCol lg="9" class="mt-2" v-if="year">
                    <Multiselect :options="terms" v-model="term" label="name" :searchable="true" placeholder="Select Term" />
                </BCol>
            </BRow>
        </form>
          <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Preview</b-button>
            <b-button @click="submit('ok')" variant="primary" block>Submit</b-button>
        </template>
    </b-modal>
</template>
<script>
import _ from 'lodash';
import Multiselect from "@vueform/multiselect";
export default {
    components: { Multiselect },
    props: ['programs','terms'],
    data(){
        return {
            currentUrl: window.location.origin,
            form: {},
            program: null,
            year: null,
            type: null,
            term: null,
            showModal: false,
            years: [],
            debouncedFetchYears: null, 
        }
    },
    created() {
        this.debouncedFetchYears = _.debounce(this.fetchYears, 300);
    },
    methods: { 
        show(data){
            this.type = data;
            this.showModal = true;
        },
        fetchYears(code){
            axios.get('/search',{
                params: {
                    option: 'years',
                    code: code
                }
            })
            .then(response => {
                this.years = response.data;
            })
            .catch(err => console.log(err));
        },
        submit(){
            window.open('/reports?option=print&type='+this.type.report+'&program='+this.program+'&academicyear='+this.year+'&term='+this.term);
        },
        hide(){
            this.editable = false;
            this.showModal = false;
        }
    }
}
</script>