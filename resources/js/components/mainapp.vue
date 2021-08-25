<template>
    <div>
        <router-view />
        <footer>
            <taskbar :key="$route.fullPath" />
        </footer>
    </div>
</template>

<script>
import taskbar from "./UI/Taskbar.vue";
export default {
    components: {
        taskbar
    },
    // data() {
    //     return {
    //         auth: "",
    //         user: ""
    //     };
    // },

    methods: {
        login() {
            this.$router.push("/login");
        }
    },
    mounted() {
<<<<<<< HEAD
        if (localStorage.usertoken) {
            this.$router.push("/play");
        } else {
            this.$router.push("/home");
=======
        // if (localStorage.usertoken) {
        //     this.$router.push("/play");
        // } else {
        //     this.$router.push("/login");
        // }
        if (localStorage.usertoken) {
            this.$router.push("/play");
        } else {
            this.$router.push("/login");
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
        }
    }
};
</script>

<style>
/* .ivu-tabs-nav-scroll,
.ivu-tabs-nav {
    text-align-last: center !important;
    float: inherit !important;
}
.ivu-tabs-ink-bar {
    display: none;
}
.ivu-tabs-bar {
    position: fixed;
    bottom: 0px;
    width: 100%;
    border-bottom: none;
} */
/* .uk-tab {
    position: absolute;
    width: 100%;
    bottom: 0px;
    margin-bottom: 0px;
}
.uk-tab > .uk-active > a {
    color: lightcoral;
    /* border-color: #1e87f0; */
/* border: none;
}  */
.nav-tabs {
    border-top: 2px solid #fdcf80;
    border-bottom: none;
    position: fixed;
    width: 100%;
    bottom: 0px;
    display: flex;
    margin-bottom: 0px;
}
/* :focus-visible {
    outline: none;
} */
.nav-tabs .nav-link:hover,
.nav-tabs .nav-link:focus {
    border: none;
}
.nav-tabs .nav-link:hover,
.nav-tabs .nav-link:focus {
    border: none;
}
a {
    color: black;
}
.router-link-exact-active,
.router-link-active {
    color: lightcoral !important;
}
/* body {
    overflow: hidden;
} */
</style>
