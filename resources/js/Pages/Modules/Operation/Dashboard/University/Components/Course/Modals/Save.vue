<template>
    <b-modal v-model="showModal" title="Save Prospectus" header-class="p-3 bg-light" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>    
        <b-form class="customform">
            <div class="row">
                <div class="col-md-12 mt-2 mb-n3">
                    <div class="alert alert-info alert-dismissible alert-label-icon rounded-label fs-11" role="alert"><i class="ri-error-warning-line label-icon"></i>This will save the changes you have made to the prospectus.</div>
                </div>
                <BCol lg="12"><hr class="text-muted mt-3 mb-0"/></BCol>
                <BCol v-if="!editable" lg="8"  style="margin-top: 13px; margin-bottom: -12px;" class="fs-12" :class="(form) ? (form.errors.is_completed) ? 'text-danger' : '' : ''">Has the prospectus been completed?</BCol>
                <BCol v-if="!editable" lg="4"  style="margin-top: 13px; margin-bottom: -12px;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio" id="customRadio1" class="custom-control-input me-2" :value="true" v-model="is_completed">
                                <label class="custom-control-label fw-normal fs-12" for="customRadio1">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio" id="customRadio2" class="custom-control-input me-2" :value="false" v-model="is_completed">
                                <label class="custom-control-label fw-normal fs-12" for="customRadio2">No</label>
                            </div>
                        </div>
                    </div>
                </BCol>
                <BCol lg="12"><hr class="text-muted mt-2 mb-0"/></BCol>
            </div>
        </b-form>
        <template v-slot:footer>
            <b-button @click="showModal = false" variant="light" block>Cancel</b-button>
            <b-button @click="save('ok')" variant="primary"  block>Confirm</b-button>
        </template>
    </b-modal>
</template>

<script>
export default {
    data() {
        return {
            currentUrl: window.location.origin,
            showModal: false,
            form: null,
            is_completed: null
        }
    },
    methods: {
        set(data){
            this.form = data;
            this.showModal = true;
        },
        save(){
            if(this.is_completed != null){
                this.form.is_completed = this.is_completed;
            }
            this.form.put('/management/update',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.hide();
                }
            });
        },
        hide(){
            this.is_completed = null;
            this.form = null,
            this.showModal = false;
        }
    }
}
</script>