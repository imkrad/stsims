<template>
    <Head title="Financial Benefits" />
    <PageHeader title="Financial Benefits" pageTitle="List" />
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="file-manager-sidebar">
            <Sidebar :latest="upcoming" ref="sidebar"/>
        </div>
        <div class="file-manager-content w-100 p-4 pb-0" style="height: calc(100vh - 180px); overflow: auto;" ref="box">
            <Lists v-if="show == 'default'" @updateShow="showGenerate" ref="lists"/>
            <Generate v-else-if="show == 'generate'" @close="show = 'default'" ref="generate"/>
        </div>
    </div>
</template>
<script>
import _ from 'lodash';
import Lists from './Components/Lists.vue';
import Generate from './Components/Generate.vue';
import Sidebar from './Components/Sidebar.vue';
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    components: { PageHeader, Sidebar, Lists, Generate },
    props: ['upcoming'],
    data(){
        return {
            currentUrl: window.location.origin,
            show: 'default'
        }
    },
    watch: {
        '$page.props.flash' : {
            deep: true,
            handler(val = null) {
                if(val.data){
                    this.lists[this.index] = val.data.data;
                }
            }
        }
    },
    methods: {
        showGenerate(){
            this.show = 'generate';
            this.$nextTick(function () {
                this.$refs.generate.fetch(this.upcoming);
            });
        },
    }
}
</script>