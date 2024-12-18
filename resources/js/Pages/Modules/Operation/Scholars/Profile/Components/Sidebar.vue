<template>
    <table class="table">
        <tbody>
            <tr>
                <td style="border-right: none; border-top: none; border-left: none;">
                    <span class="fw-semibold fs-12 ms-2">Scholar Information</span>
                    <!-- <i @click="openUpdate()" class="mdi mdi-file-document-edit-outline fs-18 mb-n2 mt-n1 text-muted float-end" style="cursor: pointer;"></i> -->
                </td>
            </tr>
            <tr>
                <td style="border-left: none;">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="d-flex mt-0">
                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                        <i class="ri-service-fill"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="mb-1 fs-12 text-muted">Status :</p> <span :class="'badge '+scholar.status.color+' '+scholar.status.others">{{scholar.status.name}}</span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="d-flex mt-3">
                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                        <i class="ri-service-fill"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="mb-1 fs-12 text-muted">Program :</p> 
                                    <h6 class="text-truncate mb-0 fs-12">{{ scholar.program.program.name + ' - ' + scholar.program.name }}</h6>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="d-flex mt-3">
                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                        <i class="ri-calendar-fill"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="mb-1 fs-12 text-muted">Awarded Year :</p> 
                                    <h6 class="text-truncate mb-0 fs-12">{{ scholar.awarded_year }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="border-right: none; border-left: none;">
                    <span class="fw-semibold fs-12 ms-2">Education Information</span>
                    <!-- <i @click="openUpdate()" class="mdi mdi-file-document-edit-outline fs-18 mb-n2 mt-n1 text-muted float-end" style="cursor: pointer;"></i> -->
                </td>
            </tr>
            <tr>
                <td style="border-right: none; border-left: none;">
                    <div class="row ms-n2 mb-0">
                        <div class="col-md-12">
                            <div class="d-flex mt-0">
                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary"><i class="ri-hotel-fill"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="mb-1 fs-12 text-muted">School :</p> 
                                    <h6 class="text-truncate mb-0 fs-12">{{ scholar.education.campus.school.name + ((scholar.education.campus.campus == 'Main') ? '' : ' - '+scholar.education.campus.campus) }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex mt-3">
                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary"><i class="bx bxs-graduation"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="mb-1 fs-12 text-muted">Course :</p>
                                    <h6 class="text-truncate mb-0"> <span class="fs-12">{{ scholar.education.course.shortcut }}</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex mt-3">
                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary"><i class="mdi mdi-seal-variant"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="mb-1 fs-12 text-muted">Level :</p>
                                    <h6 class="text-truncate mb-0"> <span class="fs-12">{{ (scholar.education.level) ? scholar.education.level.others : '-' }}</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="border-right: none; border-left: none;">
                    <span class="fw-semibold fs-12 ms-2">Address Information</span>
                    <!-- <i @click="openUpdate()" class="mdi mdi-file-document-edit-outline fs-18 mb-n2 mt-n1 text-muted float-end" style="cursor: pointer;"></i> -->
                </td>
            </tr>
            <tr>
                <td style="border-left: none;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex mt-0">
                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                        <i class="ri-map-pin-fill"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="mb-1 fs-12 text-muted">Address :</p>  <h6 class="text-truncate mb-0"> {{(scholar.address.address) ? scholar.address.address : 'n/a'}} </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex mt-3">
                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                        <i class="ri-pushpin-fill"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="mb-1 fs-12 text-muted">Municipality :</p>  <h6 class="text-truncate mb-0"> {{scholar.address.municipality.name}} </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex mt-3">
                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                        <i class="ri-road-map-fill"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="mb-1 fs-12 text-muted">Province :</p>  <h6 class="text-truncate mb-0"> {{scholar.address.province.name}} </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex mt-3">
                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                        <i class="ri-earth-fill"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="mb-1 fs-12 text-muted">Region :</p> <h6 class="text-truncate mb-0"> {{scholar.address.region.region}} </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    props: ['scholar']
}
</script>