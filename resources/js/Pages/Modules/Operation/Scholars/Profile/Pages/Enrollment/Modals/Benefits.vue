<template>
    <b-modal v-model="showModal" title="List of Benefits" style="--vz-modal-width: 60%;" hide-footer header-class="p-3 bg-light" class="v-modal-custom" modal-class="zoomIn" centered>    
        <b-row class="mb-0 mt-n2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-3 py-2 bg-light mb-n1">
                    <li class="breadcrumb-item">{{enrollment.semester.academic_year}}</li>
                    <li class="breadcrumb-item active" aria-current="page"> {{enrollment.semester.semester.name}} </li>
                        <li class="breadcrumb-item active" aria-current="page"> {{enrollment.level.others}} </li>
                </ol>
            </nav>
            <div class="col-md-12">
                <hr class="text-muted"/>
                <div class="responsive mt-n1">
                    <table class="table table-bordered table-nowrap align-middle mb-0">
                        <thead class="table-dark">
                            <tr class="fs-11">
                                <th class="text-center" width="5%">#</th>
                                <th width="35%">Benefit</th>
                                <th class="text-center" width="20%">Month</th>
                                <th class="text-center" width="20%">Status</th>
                                <th class="text-center" width="20%">Amount</th>
                            </tr>
                        </thead>
                        <tbody class="fs-11">
                            <tr v-for="(list,index) in benefits" v-bind:key="list.id">
                                <td class="text-center">{{index + 1}}</td>
                                <td>
                                    <h5 class="fs-11 mb-0 text-dark">{{list.privilege.name}}</h5>
                                </td>
                                <td class="text-center">{{list.month}}</td>
                                <td class="text-center">
                                    <span :class="'badge '+list.status.color">{{list.status.name}}</span>
                                </td>
                                <td class="text-center">{{formatMoney(list.amount)}}</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr class="table-light fs-12 fw-semibold">
                                <td colspan="3"></td>
                                <td class="text-center">Total</td>
                                <td class="text-center text-primary">{{calculateTotalSum()}}</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </b-row>  
    </b-modal>
</template>

<script>
    export default {
        data() {
            return {
                currentUrl: window.location.origin,
                showModal: false,
                enrollment: { semester:{ semester: {}}, level: {}},
                benefits: []
            }
        },
        methods: {
            show(data) {
                this.enrollment = data;
                this.benefits = data.benefits;
                this.showModal = true;
            },
            formatMoney(value) {
                let val = (value/1).toFixed(2).replace(',', '.')
                return '₱'+val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            },
            calculateTotalSum() {
                return this.formatMoney(this.benefits.reduce((accumulator, currentValue) => accumulator + parseInt(currentValue.amount), 0));
            }
        }
    }
</script>
