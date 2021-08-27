<template>
    <b-container>
        <b-row>
            <b-col cols="2"></b-col>
            <b-col cols="8">
                <b-card class="bg-royalblue">
                    <b-row>
                        <b-col cols="6" class="text-white">
                            <router-link to="/play">
                                <Icon type="ios-arrow-back"
                            /></router-link>
                            Invite Friends
                        </b-col>
                        <b-col cols="6"></b-col>
                    </b-row>
                    <div class="mt-3 text-center">
                        <h4 class="text-white mb-3">
                            Bonus : <span class="text-gold">0.51</span>
                        </h4>
                        <Button type="info"> Exchange to Balance</Button>
                        <Button ghost> Exchange Record</Button>
                    </div>
                    <div class="mt-4">
                        <vk-tabs align="justify">
                            <vk-tabs-item title="Level 1">
                                <b-row class="mt-2">
                                    <b-col cols="1"></b-col>
                                    <b-col cols="3" class="text-center">
                                        <p class="text-white">Total People</p>
                                        <p class="text-warning ">
                                            {{ people }}
                                        </p>
                                    </b-col>
                                    <b-col cols="4"></b-col>
                                    <b-col cols="3" class="text-center">
                                        <p class="text-white">Contribution</p>
                                        <p class="text-warning ">
                                            1008.94
                                        </p>
                                    </b-col>
                                    <b-col cols="1"></b-col>
                                </b-row>
                                <div class="mt-5">
                                    <b-row>
                                        <b-col cols="4">
                                            <Button type="warning" long
                                                >Invite Record</Button
                                            >
                                        </b-col>
                                        <b-col cols="4">
                                            <Button type="success" long
                                                >Bonus Record</Button
                                            >
                                        </b-col>
                                        <b-col cols="4">
                                            <Button type="error" long
                                                >Invite Rules</Button
                                            >
                                        </b-col>
                                    </b-row>
                                </div>
                                <div class="mt-3">
                                    <p class="text-white">
                                        Your Invitation Link
                                    </p>
                                </div>
                                <div class="mt-2 d-inline">
                                    <Input v-model="data.link" disabled>
                                        <Button
                                            type="primary"
                                            slot="append"
                                            v-clipboard="value"
                                            >Copy link</Button
                                        >
                                    </Input>
                                </div>
                                <div class="mt-2">
                                    <p class="text-white">
                                        Your invitation QR code
                                    </p>
                                </div>
                            </vk-tabs-item>
                            <vk-tabs-item title="Level 2">
                                <b-row class="mt-2">
                                    <b-col cols="1"></b-col>
                                    <b-col cols="3" class="text-center">
                                        <p class="text-white">Total People</p>
                                        <p class="text-warning ">
                                            6
                                        </p>
                                    </b-col>
                                    <b-col cols="4"></b-col>
                                    <b-col cols="3" class="text-center">
                                        <p class="text-white">Contribution</p>
                                        <p class="text-warning ">
                                            120.72
                                        </p>
                                    </b-col>
                                    <b-col cols="1"></b-col>
                                </b-row>
                                <div class="mt-5">
                                    <b-row>
                                        <b-col cols="4">
                                            <Button type="warning" long
                                                >Invite Record</Button
                                            >
                                        </b-col>
                                        <b-col cols="4">
                                            <Button type="success" long
                                                >Bonus Record</Button
                                            >
                                        </b-col>
                                        <b-col cols="4">
                                            <Button type="error" long
                                                >Invite Rules</Button
                                            >
                                        </b-col>
                                    </b-row>
                                </div>
                                <div class="mt-3">
                                    <p class="text-white">
                                        Your Invitation Link
                                    </p>
                                </div>
                                <div class="mt-2 d-inline">
                                    <Input v-model="data.link" disabled>
                                        <Button type="primary" slot="append"
                                            >Copy link</Button
                                        >
                                    </Input>
                                </div>
                                <div class="mt-2">
                                    <p class="text-white">
                                        Your invitation QR code
                                    </p>
                                </div>
                            </vk-tabs-item>
                        </vk-tabs>
                    </div>
                </b-card>
            </b-col></b-row
        >
    </b-container>
</template>

<script>
export default {
    data() {
        return {
            uid: "",
            people: "",
            data: {
                link: ""
            }
        };
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
                this.uid = res.data.user.UID;
                this.people = res.data.totalperson;
                this.data.link =
                    "http://localhost:8000/invite/" + res.data.user.UID;
            })
            .catch(err => {
                console.log(err);
            });
    },
    methods: {
        value() {
            this.i("link copied");
            return this.data.link;
        }
    }
};
</script>

<style>
.ivu-input[disabled] {
    color: white !important;
    background-color: #22232f !important;
    border-color: #22232f !important;
}
.ivu-btn-primary {
    background-color: #2d8cf0 !important;
    border: 1px solid #2d8cf0 !important;
    color: white !important;
}
</style>
