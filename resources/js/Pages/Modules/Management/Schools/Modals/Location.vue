<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" :title="(editable) ? 'Update Address' : 'Add Address'" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow>
                <BCol lg="12">
                    <BRow class="g-3">
                        <BCol lg="12" class="mt-3">
                            <InputLabel value="Region"/>
                            <Multiselect :options="regions" object v-model="form.region" label="name" :searchable="true" placeholder="Select Region" />
                        </BCol>
                        <BCol lg="12" class="mt-1">
                            <InputLabel value="Province"/>
                            <Multiselect :options="provinces" object v-model="form.province" label="name" :searchable="true" placeholder="Select Province" />
                        </BCol>
                        <BCol lg="12" class="mt-1">
                            <InputLabel value="Municipality" :message="form.errors.municipality_code"/>
                            <Multiselect :options="municipalities" object v-model="form.municipality" label="name" :searchable="true" placeholder="Select Municipality" />
                        </BCol>
                        <BCol lg="12" class="mt-1">
                            <InputLabel value="Barangay" :message="form.errors.municipality_code"/>
                            <Multiselect :options="barangays" object v-model="form.barangay" label="name" :searchable="true" placeholder="Select Barangay" />
                        </BCol>
                    </BRow>  
                </BCol>
            </BRow>
        </form>
          <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="submit('ok')" variant="primary" :disabled="form.processing || !isFormValid" block>Submit</b-button>
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
    props: ['regions'],
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                region: null,
                province: null,
                municipality: null,
                barangay: null
            }),
            provinces: [],
            municipalities: [],
            barangays: [],
            index: null,
            showModal: false,
            editable: false,
            selected: null,
        }
    },
    watch: {
        "form.region"(newVal){
            if(!newVal){
                this.form.province = null;
                this.form.municipality = null;
                this.form.barangay = null;
            }
            this.fetchProvince(newVal);
        },
        "form.province"(newVal){
            if(!newVal){
                this.form.municipality = null;
                this.form.barangay = null;
            }
            this.fetchMunicipality(newVal);
        },
        "form.municipality"(newVal){
            if(!newVal){
                this.form.barangay = null;
            }
            this.fetchBarangay(newVal);
        }
    },
    computed: {
        isFormValid() {
            return this.form.region && this.form.province && this.form.municipality && this.form.barangay;
        }
    },
    methods: { 
        show(index){
            this.form.reset();
            this.index = index;
            this.editable = false;
            this.showModal = true;
        },
        update(index,data){
            this.form.region = data.region;
            this.index = index;
            this.editable = true;
            this.showModal = true;
        },
        submit(){
            const address = `${this.form.barangay.name}, ${this.form.municipality.name}, ${this.form.province.name}, ${this.form.region.name}`;
            this.$emit('submit', {
                address: address,
                index: this.index,
                form: {
                    region: this.form.region,
                    province: this.form.province,
                    municipality: this.form.municipality,
                    barangay: this.form.barangay
                }
            });
            this.hide();
        },
        fetchProvince(code){
            axios.get('/search',{
                params: {
                    option: 'provinces',
                    code: code
                }
            })
            .then(response => {
                this.provinces = response.data;
            })
            .catch(err => console.log(err));
        },
        fetchMunicipality(code){
            axios.get('/search',{
                params: {
                    option: 'municipalities',
                    code: code
                }
            })
            .then(response => {
                this.municipalities = response.data;
            })
            .catch(err => console.log(err));
        },
        fetchBarangay(code){
            axios.get('/search',{
                params: {
                    option: 'barangays',
                    code: code
                }
            })
            .then(response => {
                this.barangays = response.data;
            })
            .catch(err => console.log(err));
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