<template>
    <b-modal v-model="showModal" hide-footer header-class="p-3 bg-light" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <template v-slot:header>
            <h5 class="modal-title">Truncate Scholars</h5>
            <button @click="hide()" type="button" class="btn-close" aria-label="Close"></button>
        </template>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="p-2">
                    <div class="text-center">
                        <div class="avatar-sm mx-auto">
                            <div class="avatar-title rounded-circle bg-light">
                                <i class="ri-delete-bin-2-fill h2 mb-0 text-danger"></i>
                            </div>
                        </div>
                        <div class="p-2 mt-4 fs-12">
                            <p class="text-muted">Truncate all scholars from database. <br /> This will empty all tables with scholars relationship. <b>For Development Only</b></p>
                            <span v-if="isLoading"><i class='bx bx-loader-circle bx-spin mt-2'></i><span class="text-muted ms-1 mt-n4">Loading ... </span></span>
                            <div v-else class="mt-4">
                                <button @click="submit()" type="button"  class="btn btn-danger w-lg">Truncate</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </b-modal>
</template>
<script>
import { useForm } from '@inertiajs/vue3';
export default {
    data(){
        return {
            currentUrl: window.location.origin,
            showModal: false,
            isLoading: false,
            form: useForm({
                option: 'truncate'
            }),
        }
    },
    methods : {
        show(){
            this.showModal = true;
        },
        submit(){
            this.isLoading = true;
            this.form.post('/management',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.form.reset();
                    this.$emit('success',true);
                    this.hide();
                },
            });
        },
        hide(){
            this.isLoading = false;
            this.showModal = false;
        }
    }
}
</script>
