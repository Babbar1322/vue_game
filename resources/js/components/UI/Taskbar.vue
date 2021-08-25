<template>
    <div>
        <div>
            <b-tabs fill v-if="auth == ''">
                <template #tabs-end>
                    <b-nav-item to="/home">Home</b-nav-item>
                    <b-nav-item to="/search"
                        ><b-icon icon="search"></b-icon>Search</b-nav-item
                    >
                    <b-nav-item to="/login"
                        ><b-icon icon="person-fill"></b-icon>Account</b-nav-item
                    >
                </template>
            </b-tabs>
            <b-tabs fill v-else>
                <template #tabs-end>
                    <b-nav-item to="/play" class="bg-navy" cols="3"
                        ><b-icon icon="diamond"></b-icon>Play</b-nav-item
                    >
                    <b-nav-item to="/wallet" class="bg-navy" cols="3"
                        ><b-icon icon="wallet"></b-icon>Wallet</b-nav-item
                    >
                    <b-nav-item to="/chat" class="bg-navy" cols="3"
                        ><b-icon icon="chat"></b-icon>Chat</b-nav-item
                    >
                    <b-nav-item to="/mine" class="bg-navy" cols="3"
                        ><b-icon icon="person-fill"></b-icon>Mine</b-nav-item
                    >
                </template>
            </b-tabs>

            <!-- <b-tabs fill>
                <template #tabs-end>
                    <b-nav-item to="/play">Play</b-nav-item>
                </template>
            </b-tabs> -->
        </div>
        <!-- <vk-tabs align="justify">
            <vk-tabs-item icon="home" title="home"> <h1>home</h1></vk-tabs-item>
            <vk-tabs-item title="search" icon="search"
                ><h1>search</h1></vk-tabs-item
            >
            <vk-button></vk-button> -->
        <!-- <vk-tabs-item title="account" icon="user" 
                ></vk-tabs-item> -->
        <!-- </vk-tabs> -->
    </div>
</template>

<script>
// import Login from "../pages/Login.vue";
import EventBus from "../EventBus.vue";

export default {
    data() {
        return {
            auth: "",
            user: ""
        };
    },
    // components: {
    //     Login
    // },

    methods: {
        login() {
            this.$router.push("/login");
        },
        logout() {
            localStorage.removeItem("usertoken");
            this.$router.push("/login");
        }
    },

    mounted() {
        EventBus.$on("logged-in", status => {
            this.auth - status;
        });
<<<<<<< HEAD
        if (!localStorage.usertoken && this.$route.path != "/login") {
=======
        if (!localStorage.usertoken) {
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
            this.auth = "";
            // this.$router.push("/login");
        } else if (localStorage.usertoken) {
            // this.$router.push("/play");
            this.auth = "loggedin";
        }
    }
};
</script>

<style>
svg {
    margin-right: 10px;
}
.bg-dark {
    background: #323440;
    color: #646566;
}
.bg-navy {
    background-color: #011f47ed !important;
}
.nav-link {
    color: #fdcf80;
}
</style>
