<template>
    <b-col lg="12">
        <b-card no-body>
            <div class="bg-info-subtle">
                <b-card-body class="pb-0 px-4">
                    <b-row class="mb-3">
                        <b-col md>
                            <b-row class="align-items-center g-3">
                                <div class="col-md-auto">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-white rounded-circle">
                                            <img src="/images/avatars/avatar.jpg" alt="" class="rounded-circle avatar-sm">
                                        </div>
                                    </div>
                                </div>
                                <b-col md>
                                    <div>
                                        <h4 class="fw-semibold text-primary">{{ scholar.profile.lastname+', '+scholar.profile.firstname}}</h4>
                                        <div class="hstack gap-3 flex-wrap fs-12">
                                            <!-- <div>
                                                <i class="ri-user-fill align-bottom me-1"></i>
                                                {{selected.customer.name}}
                                            </div>
                                             <div class="vr"></div> -->
                                            <div>
                                                <i class="ri-hashtag align-bottom me-1"></i>
                                                {{ scholar.spas_id }}
                                            </div>
                                            <div class="vr" style="width: 1px;"></div>
                                            <div><span class="text-muted">Program :</span> {{scholar.program.name}}</div>
                                            <div class="vr" style="width: 1px;"></div>
                                            <div><span class="text-muted">Type :</span> {{scholar.program.type.name}}</div>
                                            <!-- <div class="vr"></div>
                                            <div><i class="ri-phone-fill align-bottom me-1"></i>{{selected.conforme_no}}</div>
                                            <div class="vr" v-if="selected.status.name === 'Pending' || selected.status.name === 'For Payment'"></div>
                                            <div v-if="selected.status.name === 'Pending' || selected.status.name === 'For Payment'"><i class="ri-wallet-3-fill align-bottom me-1"></i>{{ (selected.customer.wallet != null) ? selected.customer.wallet.available : 'No Balance'}}</div> -->
                                        </div>
                                    </div>
                                </b-col>
                            </b-row>
                        </b-col>
                        <b-col md="auto">
                            <div class="hstack gap-1 flex-wrap mt-2">
                               
                                <Link href="/management">
                                    <b-button variant="soft-danger">
                                        <i class="ri-close-circle-fill align-bottom"></i> 
                                    </b-button>
                                </Link>
                            </div>
                        </b-col>
                    </b-row>
                    
                </b-card-body>
            </div>
        </b-card>
    </b-col>
</template>
<script>
export default {
    props:['scholar'],
    methods: {
        openSave(id){
            this.$refs.save.show(id,this.selected.customer.industry);
        },
        openWallet(id,customer,payment){
            this.$refs.wallet.show(id,customer,payment);
        },
        openPrint(id){
            window.open('/requests?option=print&id='+id);
        },
    }
}
</script>