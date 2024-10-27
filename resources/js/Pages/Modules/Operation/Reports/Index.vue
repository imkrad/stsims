<template>
    <Head title="Reports" />
    <PageHeader title="Reports" pageTitle="List" />
        <b-row class="g-3" style="height: calc(100vh - 225px); overflow: auto;">
            <b-col xxl="3" v-for="(item, index) of types" :key="index">
                <b-card no-body>
                    <b-card-body style="cursor: pointer;" @click="openPrint(item.report)">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-semibold fs-12 text-primary mb-n1">{{ item.name }} </p>
                                <span class="text-muted fs-10">{{item.info }}</span>
                            </div>
                            <div class="flex-shrink-0 align-self-end">
                                <div class="avatar-xs flex-shrink-0">
                                    <span class="avatar-title bg-light rounded fs-4">
                                       <i class="ri-file-text-fill text-primary"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </b-card-body>
                </b-card>
            </b-col>
        </b-row>
</template>
<script>
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    components:  { PageHeader },
    props: ['types'],
    methods: {
        openPrint(id){
            window.open('/reports?option=print&type='+id);
        }
    }
}
</script>