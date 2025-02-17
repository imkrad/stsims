<template>
    <form class="customform">
        <BRow class="g-3"> 
            <div class="col-md-12 mb-n3 mt-0">
                <hr class="text-muted"/>
                <h6 class="fs-12 text-primary fw-semibold text-uppercase">Personal Information</h6>
                <hr class="text-muted"/>
            </div>
            <div class="col-md-3 mb-n1">
                <div class="form-floating mb-n3">
                    <TextInput id="password" v-model="scholar.profile.firstname" class="form-control" placeholder="Please enter password" readonly/>
                    <InputLabel for="password" value="First name"/>
                </div>
            </div>
            <div class="col-md-3 mb-n1">
                <div class="form-floating mb-n3">
                    <TextInput id="password" v-model="scholar.profile.middlename" class="form-control" placeholder="Please enter password" readonly/>
                    <InputLabel for="password" value="Middle name"/>
                </div>
            </div>
            <div class="col-md-3 mb-n1">
                <div class="form-floating mb-n3">
                    <TextInput id="password" v-model="scholar.profile.lastname" class="form-control" placeholder="Please enter password" readonly/>
                    <InputLabel for="password" value="Last name"/>
                </div>
            </div>
            <div class="col-md-3 mb-n1">
                <div class="form-floating mb-n3">
                    <TextInput id="password" v-model="scholar.profile.suffix" class="form-control" placeholder="Please enter password" readonly/>
                    <InputLabel for="password" value="Suffix"/>
                </div>
            </div>
            <div class="col-md-12 text-primary mb-n3">
                <hr class="text-muted"/>
                <h6 class="fs-12 text-primary fw-semibold text-uppercase">Contact Information</h6>
                <hr class="text-muted"/>
            </div>
            <div class="col-md-3 mb-n1">
                <div class="form-floating mb-n3">
                    <TextInput id="password" v-model="scholar.information.contact_no" class="form-control" placeholder="Please enter password" readonly/>
                    <InputLabel for="password" value="Contact no."/>
                </div>
            </div>
            <div class="col-md-3 mb-n1">
                <div class="form-floating mb-n3">
                    <TextInput id="password" v-model="scholar.information.email" class="form-control" placeholder="Please enter password" readonly/>
                    <InputLabel for="password" value="Email Address"/>
                </div>
            </div>
            <div class="col-md-6 mb-n1">
                <div class="form-floating mb-n3">
                    <TextInput id="password" v-model="formattedAddress" class="form-control" placeholder="Please enter password" readonly/>
                    <InputLabel for="password" value="Address"/>
                </div>
            </div>
            <div class="col-md-12 mb-n3">
                <hr class="text-muted"/>
                <h6 class="fs-12 text-primary fw-semibold text-uppercase">Academic Information</h6>
                <hr class="text-muted"/>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-n3">
                    <TextInput id="password" v-model="scholar.information.contact_no" class="form-control" placeholder="Please enter password" readonly/>
                    <InputLabel for="password" value="School"/>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-n3">
                    <TextInput id="password" v-model="scholar.information.contact_no" class="form-control" placeholder="Please enter password" readonly/>
                    <InputLabel for="password" value="Course"/>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-n3">
                    <TextInput id="password" v-model="scholar.information.contact_no" class="form-control" placeholder="Please enter password" readonly/>
                    <InputLabel for="password" value="Level"/>
                </div>
            </div>
        </BRow>
    </form>
</template>
<script>
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    props: ['scholar'],
    components: { InputLabel, TextInput },
    computed: {
        formattedAddress() {
        return `${this.scholar.address.region.region}, ${this.scholar.address.province.name}, ${this.scholar.address.municipality.name}, ${this.scholar.address.barangay ? this.scholar.address.barangay.name : '-'}, ${this.scholar.address.address ? this.scholar.address.address : ''}`;
        }
    },
    data(){
        return {
            currentUrl: window.location.origin,
        }
    },
}
</script>