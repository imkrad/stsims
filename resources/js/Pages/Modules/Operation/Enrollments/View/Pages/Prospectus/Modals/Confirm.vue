
<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" title="Confirm" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <div>
            <div class="mt-1 mb-n3">
                <div class="avatar-md mx-auto">
                    <div class="avatar-title rounded-circle bg-light">
                        <i class="bx bxs-envelope h1 mb-0 text-primary"></i>
                    </div>
                </div>
                <div class="p-2 mt-2 text-center">
                    <h5>Prospectus Confirmation</h5>
                    <p class="fs-12 mt-n1 text-muted"> This will set the scholar's prospectus to the selected option.</p>
                </div>
            </div>
        </div>
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="submit('ok')" variant="primary" :disabled="form.processing" block>Submit</b-button>
        </template>
    </b-modal>
</template>
<script>
import { useForm } from '@inertiajs/vue3';
export default {
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                scholar_id: null,
                course_id: null,
                option: 'subcourse'
            }),
            showModal: false,
        }
    },
    methods: { 
        show(data,scholar){
            this.form.course_id = data.id;
            this.form.scholar_id = scholar;
            this.showModal = true;
        },
        submit(){
            this.form.post('/enrollments',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.$emit('update',this.$page.props.flash.data.data);
                    this.hide();
                },
            });
        },
        hide(){
            this.user = {};
            this.form.reset();
            this.form.clearErrors();
            this.showModal = false;
        }
    }
}
</script>