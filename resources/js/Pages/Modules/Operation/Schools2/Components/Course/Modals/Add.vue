<template>
    <b-modal v-model="showModal" title="Add Subject" header-class="p-3 bg-light" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>    
        <b-form class="customform">
            <div class="row g-3">
                <div class="col-md-12 mb-n3">
                    <InputLabel value="Subject"/>
                    <TextInput v-model="subject" type="text" class="form-control" placeholder="Please enter subject" :light="true" />
                </div>
                <div class="col-md-6">
                    <InputLabel value="Code"/>
                    <TextInput v-model="code" type="text" class="form-control" placeholder="Please enter subject" :light="true" />
                </div>
                <div class="col-md-6">
                    <InputLabel value="Unit"/>
                    <TextInput v-model="unit" type="text" class="form-control" placeholder="Please enter subject" :light="true" />
                </div>
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" v-model="is_nonacademic" type="checkbox" id="formCheck2">
                        <label class="form-check-label fs-12" for="formCheck2">&nbsp;&nbsp;Is Non-Academic?</label>
                    </div>
                </div>
            </div>
        </b-form>
        <template v-slot:footer>
            <b-button @click="showModal = false" variant="light" block>Cancel</b-button>
            <b-button @click="save('ok')" variant="primary"  block>Save</b-button>
        </template>
    </b-modal>
</template>

<script>
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    components: {InputLabel, TextInput },
    data() {
        return {
            currentUrl: window.location.origin,
            showModal: false,
            subject: null,
            unit: null,
            code: null,
            is_nonacademic: false
        }
    },
    methods: {
        show(){
            this.showModal = true;
        },
        save(){
            this.$emit('saveSubject', {
                subject: this.subject,
                unit: this.unit,
                code: this.code,
                is_nonacademic: this.is_nonacademic
            });

            // Close the modal after saving
            this.showModal = false;

            // Optionally clear the form (optional)
            this.subject = null;
            this.unit = null;
            this.code = null;
            this.is_nonacademic = false;
        },
        hide(){
            this.code= null,
            this.subject= null,
            this.unit= null,
            this.showModal = false;
        }
    }
}
</script>