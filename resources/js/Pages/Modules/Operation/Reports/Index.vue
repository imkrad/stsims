<template>
    <Head title="Reports" />
    <PageHeader title="Reports" pageTitle="List" />
    <b-row class="g-3" style="height: calc(100vh - 225px); overflow: auto;">
        <b-col xxl="3" v-for="(item, index) of types" :key="index">
            <b-card no-body>
                <b-card-body style="cursor: pointer;" @click="openView(item)">
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
    <Option :programs="programs" :terms="terms" ref="option"/>
</template>
<script>
import Option from './Modals/Option.vue';
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    components:  { PageHeader, Option },
    props: ['types','programs','terms'],
    methods: {
        openView(data){
            this.$refs.option.show(data);
        }
    }
}
</script>