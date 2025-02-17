<template>
    <div class="table-responsive table-card" style="height: calc(100vh - 460px); overflow: auto;">                                               
        <table class="table align-middle table-centered mb-0">
            <thead class="thead-fixed">
                <tr class="fs-12 bg-primary">
                    <th class="text-white">Employment Information</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="row mt-n3 mb-n3 g-3" >
                            <div class="col-sm-3 mb-3">
                                <div class="p-1 border border-dashed rounded">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm me-0">
                                            <div class="avatar-title rounded bg-transparent text-primary fs-24"><i class="ri-price-tag-2-line"></i></div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="text-muted fs-11 mb-0">Processing type :</p>
                                            <h5 class="fs-13 mb-0">asda</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="p-1 border border-dashed rounded">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm me-0">
                                            <div class="avatar-title rounded bg-transparent text-primary fs-20"><i class="ri-calendar-2-line"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="text-muted fs-11 mb-0">Due Date:</p>
                                            <h5 class="fs-13 mb-0">asda</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="p-1 border border-dashed rounded">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm me-0">
                                            <div class="avatar-title rounded bg-transparent text-primary fs-20"><i class="ri-calendar-2-line"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="text-muted fs-11 mb-0">Claimed Date:</p>
                                            <h5 class="fs-13 mb-0">asda</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="p-1 border border-dashed rounded">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm me-0">
                                            <div class="avatar-title rounded bg-transparent text-primary fs-24"><i class="ri-price-tag-2-line"></i></div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="text-muted fs-11 mb-0">Payment :</p>
                                            <span>s</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table align-middle table-centered mb-0">
            <thead class="thead-fixed">
                <tr class="fs-12 bg-primary">
                    <th colspan="4" class="text-white">Professional Affiliations</th>
                </tr>
                <tr class="fs-12 bg-light">
                    <th class="text-center" style="width: 25%;">Organization</th>
                    <th class="text-center" style="width: 25%;">Address</th>
                    <th class="text-center" style="width: 25%;">Position</th>
                    <th class="text-center" style="width: 25%;">Duration</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                       
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table align-middle table-centered mb-0">
            <thead class="thead-fixed">
                <tr class="fs-12 bg-primary">
                    <th colspan="4" class="text-white">Research and Development Involvement</th>
                </tr>
                <tr class="fs-12 bg-light">
                    <th class="text-center" style="width: 25%;">Title</th>
                    <th class="text-center" style="width: 25%;">Location</th>
                    <th class="text-center" style="width: 25%;">Fund Source</th>
                    <th class="text-center" style="width: 25%;">Nature of Involvement</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                       
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table align-middle table-centered mb-0">
            <thead class="thead-fixed">
                <tr class="fs-12 bg-primary">
                    <th colspan="3" class="text-white">Awards and Recognitions Received</th>
                </tr>
                <tr class="fs-12 bg-light">
                    <th class="text-center" style="width: 33%;">Title</th>
                    <th class="text-center" style="width: 33%;">Date Given</th>
                    <th class="text-center" style="width: 33%;">Awarding Body</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                       
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    props: ['information'],
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
}
</script>