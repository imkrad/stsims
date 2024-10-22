<template>
    
</template>
<script>
export default {
    data(){
        return {
            selected: { semester: { semester: {}}, level: {}},
            info: {},
        }
    },
    methods: {
        set(info,data){
            this.info = info;
            this.selected = data;

            let semesters,semester, prospectus;

            prospectus = info.prospectus;
            semesters = prospectus.filter(x => x.year_level === this.selected.level.others);
            semester = semesters[0].semesters.filter(x => x.semester === this.selected.semester.semester.name);

            this.prospectus = Object.assign({},semester[0]);
            this.lists = this.prospectus.courses;

            prospectus.forEach((item) => {
                item.semesters.forEach((it) => {
                    it.courses.forEach((i) => {
                        if(!i.hasOwnProperty("grade")){
                            this.subjects.push(i);
                        }
                        this.customs.push(i);
                    });
                });
            });
        }
    }
}
</script>