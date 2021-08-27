<template>
    <perfect-scrollbar>
        <b-container class="mb-5">
            <b-row>
                <b-col md="2"></b-col>
                <b-col md="8">
                    <b-card class="bg-royalblue">
                        <b-row align-v="start">
                            <b-col cols="7">
                                <b-img
                                    v-bind="mainProps"
                                    rounded="circle"
                                    :src="`${image}`"
                                ></b-img>
                                <span class="pl-2 text-white">1234565432</span>
                            </b-col>
                            <b-col cols="3"></b-col>
                            <b-col cols="2">
                                <router-link
                                    to="/mine/user"
                                    class="text-yellow"
                                >
                                    <b-icon icon="pencil-fill"></b-icon>
                                </router-link>
                            </b-col>
                        </b-row>
                        <!-- <b-card class="mt-5 bg-dark-yellow">
                        <b-row align-v="start" class="text-yellow">
                            <b-col cols="6">
                                <p>Account Card</p>
                            </b-col>
                            <b-col cols="3"></b-col>
                            <b-col cols="3"></b-col>
                        </b-row>
                    </b-card> -->

                        <b-row class="mt-5">
                            <b-col cols="6">
                                <h6 class="text-white">Store</h6>
                                <div class="text-yellow">
                                    <b-icon icon="shop-window"></b-icon>
                                    Balance
                                    <span style="color:#12dfe9">0.99</span>
                                </div>
                            </b-col>
                            <b-col cols="3"></b-col>
                            <b-col cols="3">
                                <div class="text-right">
                                    <Button type="success" to="/wallet"
                                        >Recharge</Button
                                    >
                                </div>
                            </b-col>
                        </b-row>
                        <b-row class="mt-5">
                            <b-col cols="6">
                                <h6 class="text-white">Other</h6>
                            </b-col>
                            <b-col cols="3"></b-col>
                            <b-col cols="3"></b-col>
                        </b-row>
                        <b-container class="mt-5">
                            <b-row class="text-yellow">
                                <b-col cols="12">
                                    <b-row class="text-center">
                                        <b-col cols="4">
                                            <Icon
                                                type="ios-person-add-outline"
                                                @click="invite"
                                            />
                                            <div>
                                                Invite Friends
                                            </div>
                                        </b-col>
                                        <b-col cols="4">
                                            <Icon
                                                type="ios-medal-outline"
                                                @click="game"
                                            />
                                            <div>
                                                Game Rewards
                                            </div>
                                        </b-col>
                                        <b-col cols="4">
                                            <Icon
                                                type="ios-card-outline"
                                                @click="bank"
                                            />
                                            <div>
                                                Bank Cards
                                            </div>
                                        </b-col>
                                    </b-row>
                                    <b-row class="text-center mt-5">
                                        <b-col cols="4">
                                            <Icon
                                                type="md-settings"
                                                @click="reset"
                                            />
                                            <div>
                                                Reset Password
                                            </div>
                                        </b-col>
                                        <b-col cols="4">
                                            <Icon
                                                @click="help"
                                                type="ios-help-circle-outline"
                                            />
                                            <div>
                                                Help Center
                                            </div>
                                        </b-col>
                                        <b-col cols="4">
                                            <Icon type="ios-locate-outline" @click="$bvModal.show('bv-modal-example')"/>
                                            <div>
                                                Language
                                            </div>
                                        </b-col>
                                    </b-row>
                                    <b-row class="text-center mt-5">
                                        <b-col cols="4">
                                            <Icon
                                                type="ios-more"
                                                @click="logout"
                                            />
                                            <div>
                                                Logout
                                            </div>
                                        </b-col>
                                    </b-row>
                                </b-col>
                            </b-row>
                        </b-container>
                    </b-card>
                </b-col>
                <b-col md="2"></b-col>
            </b-row>
            <b-modal id="bv-modal-example" hide-footer title="Select Language" >
                  
                   <b-row class="pb-2" role="button">
                       <b-col cols="6">
                       <div>IND </div></b-col><b-col cols="6"><div class="text-right"> <Icon
                                            type="ios-arrow-forward"
                                            size="20"
                                        /></div></div></b-col></b-row>
                    <b-row class="pt-2" role="button">
                       <b-col cols="6">
                       <div>MY </div></b-col><b-col cols="6"><div class="text-right"> <Icon
                                            type="ios-arrow-forward"
                                            size="20"
                                        /></div></div></b-col></b-row></div>
                </b-modal>
                </div>
        </b-container>
    </perfect-scrollbar>
</template>

<script>
export default {
    data() {
        return {
<<<<<<< HEAD
=======
            image:"profile.jpg",
            balance:"",
            phone:"",
>>>>>>> branch1
            mainProps: { width: 50 }
        };
    },
    methods: {
        logout() {
            localStorage.removeItem("usertoken");
            this.$router.push("/login");
            this.auth = "";
        },
        game() {
            this.$router.push("/record/game");
        },
        invite() {
            this.$router.push("/mine/invite");
        },
        bank() {
            this.$router.push("/mine/user/bank");
        },
        reset() {
            this.$router.push("/mine/user/password");
        },
        help() {
            this.$router.push("/chat");
        }
<<<<<<< HEAD
=======
    },
    created() {
        axios
            .get("/api/profile", {
                headers: {
                    Authorization: `Bearer ${localStorage.usertoken}`
                }
            })
            .then(res => {
                if (res.data[0] == "token_expired") {
                    this.auth = "";
                    this.$router.push("/login");
                }
                this.balance = res.data.balance;
                this.phone = res.data.user.phone;
                   if (res.data.user.image == "" || res.data.user.image == null) {
                    this.image = "profile.jpg";
                } else {
                    this.image = "/uploads/" + res.data.user.image;
                }
                
            })
            .catch(err => {
                console.log(err);
            });
>>>>>>> branch1
    }
};
</script>

<style>
.text-yellow {
    color: #fdcf80;
}
.bg-dark-yellow {
    background-color: rgb(238, 164, 58) !important;
}
.bg-royalblue {
    background-color: #011f47ed !important;
}
.ivu-icon {
    font-size: 30px;
}
.ivu-icon-ios-person-add-outline,
.ivu-icon-ios-medal-outline,
.ivu-icon-ios-card-outline,
.ivu-icon-md-settings,
.ivu-icon-ios-help-circle-outline,
.ivu-icon-ios-locate-outline,
.ivu-icon-ios-more,
.ivu-icon-ios-arrow-forward {
    color: goldenrod !important;
}

/* .ps {
    height: 550px;
} */
</style>
