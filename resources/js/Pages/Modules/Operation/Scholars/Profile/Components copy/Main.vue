<template>
    <BTabs nav-class="nav-pills nav-custom nav-custom-light" small pills>
        <BTab title="Overview">
            <Enrollment :enrollments="scholar.enrollments"/>
        </BTab>
        <BTab title="Enrollments">
            <Enrollment :enrollments="scholar.enrollments"/>
        </BTab>
        <!-- <BTab title="Financial Benefits">
           
        </BTab> -->
        <BTab title="Tracer" v-if="scholar.status.name == 'Graduated'">
           
        </BTab>
        <BTab title="Logs">
           
        </BTab>
    </BTabs>
</template>
<script>
import Enrollment from '../Pages/Enrollment/Index.vue';
export default {
    props: ['scholar'],
    components: { Enrollment }
}
</script>