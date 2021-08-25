<template>
    <b-container>
        <b-row>
            <b-col md="2"></b-col>
            <b-col md="8">
                <b-card class="bg-royalblue pl-2 pr-2 ">
                    <b-row>
                        <b-col cols="6" class="text-white">
                            <router-link to="/mine">
                                <Icon type="ios-arrow-back"
                            /></router-link>
                            My Info
                        </b-col>
                        <b-col cols="6"></b-col>
                    </b-row>
                    <div class="mt-4">
                        <div role="button" class="text-white">
                            <b-row class="pb-2">
                                <b-col cols="3">
                                    <div>
                                        Avatar
                                    </div>
                                </b-col>
                                <b-col cols="6"></b-col>
                                <b-col cols="3">
                                    <div class="text-right">
                                        <b-img
                                            v-bind="mainProps"
                                            rounded="circle"
                                            src="../profile.jpg"
                                        ></b-img>
                                        <Icon
                                            type="ios-arrow-forward"
                                            size="20"
                                        />
                                    </div>
                                </b-col>
                            </b-row>
                            <b-row
                                class="pt-2 pb-2 border-bottom border-top border-dark"
                                @click="resetname"
                            >
                                <b-col cols="3">
                                    <div>
                                        NickName
                                    </div>
                                </b-col>
                                <b-col cols="6"></b-col>
                                <b-col cols="3">
                                    <div class="text-right">
<<<<<<< HEAD
                                        7453462768
=======
                                        {{ phone }}
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
                                        <Icon
                                            type="ios-arrow-forward"
                                            size="20"
                                        />
                                    </div>
                                </b-col>
                            </b-row>
                        </div>
                    </div>
                </b-card>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
export default {
    data() {
        return {
<<<<<<< HEAD
            mainProps: { width: 30 }
=======
            mainProps: { width: 30 },
            users: [],
            phone: ""
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
        };
    },
    methods: {
        resetname() {
            this.$router.push("/mine/user/info/nickname");
        }
<<<<<<< HEAD
=======
    },
    created() {
        axios
            .get("../../api/profile", {
                headers: {
                    Authorization: `Bearer ${localStorage.usertoken}`
                }
            })
            .then(res => {
                if (res.data[0] == "token_expired") {
                    this.auth = "";
                    this.$router.push("/login");
                }
                console.log(res);
                this.phone = res.data.user.phone;
            })
            .catch(err => {
                console.log(err);
            });
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
    }
};
</script>

<style></style>
