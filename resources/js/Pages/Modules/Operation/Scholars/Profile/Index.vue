<template lang="">
    <Head title="Scholar"/>
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="w-100 p-4 pb-0" ref="box">
            <BRow>
                <BCol lg="12">
                    <BCard no-body class="mt-n4 mx-n4">
                        <div class="bg-warning-subtle">
                            <BCardBody class="pb-0 px-4">
                                <BRow class="mb-3">
                                    <BCol md>
                                        <BRow class="align-items-center g-3">
                                            <BCol md="auto">
                                                <div style="height: 3.5rem; width: 3.5rem;">
                                                    <div class="avatar-title bg-white rounded-circle">
                                                        <img :src="scholar.avatar" alt="" class="rounded-circle" style="height: 3.5rem; width: 3.5rem;">
                                                    </div>
                                                </div>
                                            </BCol>
                                            <BCol md>
                                                <div>
                                                    <h4 class="fw-bold fs-18">{{ scholar.profile.lastname+', '+scholar.profile.firstname }}</h4>
                                                    <div class="hstack gap-3 flex-wrap fs-12">
                                                        <div>
                                                            <i class="ri-hashtag align-bottom me-1"></i>
                                                            {{ scholar.spas_id }}
                                                        </div>
                                                        <div class="vr" style="width: 1px;"></div>
                                                        <div><span class="text-muted">Program :</span> {{scholar.program.name}}</div>
                                                        <div class="vr" style="width: 1px;"></div>
                                                        <div><span class="text-muted">Type :</span> {{scholar.program.type.name}}</div>
                                                    </div>
                                                </div>
                                            </BCol>
                                        </BRow>
                                    </BCol>
                                    <BCol md="auto">
                                        <div class="hstack gap-1 flex-wrap">
                                            <button @click="back()" type="button" class="btn py-0 fs-16 text-body">
                                                <i class="ri-share-line"></i>
                                            </button>
                                        </div>
                                    </BCol>
                                </BRow>
                            </BCardBody>
                        </div>
                    </BCard>
                </BCol>
                <BCol lg="3">
                    <Sidebar :scholar="scholar"/>
                </BCol>
                <BCol lg="9">
                    <Main :scholar="scholar" />
                </BCol>
            </BRow>
        </div>
    </div>
</template>
<script>
import simplebar from "simplebar-vue";
import Top from './Components/Top.vue';
import Main from './Components/Main.vue';
import Sidebar from './Components/Sidebar.vue';
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    components: { PageHeader, simplebar, Top, Sidebar, Main },
    props: ['s'],
    data(){
        return {
            currentUrl: window.location.origin,
            scholar: this.s.data
        }
    },
    methods: {
        back(){
            this.$inertia.visit('/scholars');
        }
    }
}
</script>