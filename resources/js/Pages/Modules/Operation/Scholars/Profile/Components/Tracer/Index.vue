<template>
    <div v-if="scholar.status.name != 'Graduated'" class="d-flex justify-content-center align-items-center" style="height: calc(100vh - 429px);">
        <div class="col-md-6 text-center border border-dashed p-3 rounded bg-light-subtle mt-n4">
            <h5 class="text-primary fs-14 mt-2">Tracking Actual Career Experience Report</h5>
            <p class="text-muted fs-12">
                Access to the TRACER tab is restricted to graduated scholars only
            </p>
        </div>
    </div>
    <div v-else>
        <div v-if="!information" class="d-flex justify-content-center align-items-center" style="height: calc(100vh - 429px);">
            <div class="col-md-6 text-center border border-dashed p-3 rounded bg-light-subtle mt-n4">
                <h5 class="text-primary fs-14 mt-2">No TRACER Report Found</h5>
                <p class="text-muted fs-12">
                    There are no recorded career experiences for this scholar yet. <br /> Any updates or entries will appear here once added
                </p>
                <b-button @click="openAdd" variant="primary" class="btn-label btn-sm waves-effect waves-light"><i class="ri-add-circle-fill label-icon align-middle fs-16 me-2"></i> Add Record</b-button>
            </div>
        </div>
        <div v-else>
            <View :scholar="scholar" :information="information"/>
        </div>
    </div>
    <Add ref="add"/>
</template>
<script>
import Add from './Add.vue';
import View from './View.vue';
export default {
    components: { Add, View },
    props: ['scholar'],
    data(){
        return {
            information: (this.scholar.tracer) ? this.scholar.tracer.information : ''
        }
    },
    computed: {
        awardsAndRecognitions() {
            return this.information.awards_and_recognitions || [];
        },
        professionalAffiliations() {
            return this.information.professional_affiliations || [];
        },
        researchAndDevelopments() {
            return this.information.research_and_development || [];
        },
        employment_information() {
            return this.information.employment_information || [];
        }
    },
    methods: {
        openAdd(){
            this.$refs.add.show(this.scholar.id);
        }
    }
}
</script>