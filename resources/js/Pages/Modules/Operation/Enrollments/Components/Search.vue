<template>
    <form class="app-search d-none d-md-block" style="margin-top: -25px;">
        <div class="position-relative">
            <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" />
            <span class="mdi mdi-magnify search-widget-icon"></span>
            <span @click="clear()" class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
        </div>
        <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
            <SimpleBar data-simplebar >
                <div class="notification-list">
                    <b-link @click="chooseScholar(list)" v-for="(list, index) of names" :key="index" class="d-flex dropdown-item notify-item py-2">
                        <img :src="currentUrl+'/images/avatars/avatar.jpg'" class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                        <div class="flex-1">
                            <h6 class="m-0">{{ list.name}}.</h6>
                            <span class="fs-11 mb-0 text-muted">{{list.program}}</span>
                        </div>
                    </b-link>
                </div>
            </SimpleBar>
        </div>
    </form>
</template>
<script>
import _ from 'lodash';
export default {
    data(){
        return {
            currentUrl: window.location.origin,
            names: [],
            scholar: {education: {school: {} ,course:{}, subcourse:{}}},
            keyword: null
        }
    },
    mounted() {
        this.isCustomDropdown();
    },
    methods: {
        checkSearchStr: _.debounce(function (string) {
            this.keyword = string;
            this.search();
        }, 500),
        search(){
            axios.get('/scholars', {
                params: {
                    keyword: this.keyword,
                    option: 'search'
                }
            })
            .then(response => {
                if(response){ 
                    this.scholar = {};
                    this.names = response.data; 
                }
            })
            .catch(err => console.log(err));
        },
        chooseScholar(data){
            this.$inertia.visit('/enrollments/'+data.code);
        },  
        isCustomDropdown() {
            var searchOptions = document.getElementById("search-close-options");
            var dropdown = document.getElementById("search-dropdown");
            var searchInput = document.getElementById("search-options");

            searchInput.addEventListener("focus", () => {
                var inputLength = searchInput.value.length;
                if (inputLength > 0) {
                    dropdown.classList.add("show");
                    searchOptions.classList.remove("d-none");
                } else {
                    dropdown.classList.remove("show");
                    searchOptions.classList.add("d-none");
                }
            });

            searchInput.addEventListener("keyup", () => {
                var inputLength = searchInput.value.length;
                if (inputLength > 0) {
                    dropdown.classList.add("show");
                    searchOptions.classList.remove("d-none");
                    this.checkSearchStr(searchInput.value);
                } else {
                    dropdown.classList.remove("show");
                    searchOptions.classList.add("d-none");
                }
            });

            searchOptions.addEventListener("click", () => {
                searchInput.value = "";
                dropdown.classList.remove("show");
                searchOptions.classList.add("d-none");
            });

            document.body.addEventListener("click", (e) => {
                if (e.target.getAttribute("id") !== "search-options") {
                    dropdown.classList.remove("show");
                    searchOptions.classList.add("d-none");
                }
            });
        }
    }
}
</script>
<style scoped>
    .dropdown-menu-lg {
        width: 90%;
    }
</style>