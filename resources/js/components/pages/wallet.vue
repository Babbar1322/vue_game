<template>
    <perfect-scrollbar>
        <b-container class="mb-5">
            <b-row>
                <b-col md="2"></b-col>
                <b-col md="8">
                    <b-card class="bg-royalblue pl-2 pr-2">
                        <b-row align-v="start">
                            <b-col cols="6">
                                <b-img
                                    v-bind="mainProps"
                                    rounded="circle"
                                    src="profile.jpg"
                                ></b-img>
                                <span class="pl-2 " style="color:#12dfe9"
                                    >0.99</span
                                >
                            </b-col>
                            <b-col cols="3"></b-col>
                            <b-col cols="3">
                                <div class="text-right">
                                    <Button type="primary">Rules</Button>
                                </div>
                            </b-col>
                        </b-row>

                        <div class="uk-margin-medium-top">
                            <vk-tabs align="justify">
                                <vk-tabs-item title="Recharge">
                                    <b-row>
                                        <b-col cols="3">
                                            <Button type="success" ghost long
                                                >Ocpay
                                            </Button>
                                        </b-col>
                                        <b-col cols="3">
                                            <Button type="success" ghost long
                                                >UPI
                                            </Button>
                                        </b-col>
                                    </b-row>
                                    <b-row class="mt-4 mb-4">
                                        <b-col cols="3">
                                            <div class="text-white">
                                                Amount Of Payment
                                            </div>
                                        </b-col>
                                    </b-row>
                                    <div>
                                        <!-- <Icon type="ios-card-outline" /> -->
                                        <Input
                                            v-model="value"
                                            placeholder="300-50000"
                                            size="large"
                                            className="cstminp"
                                        />
                                    </div>

                                    <b-row class="mt-4 mb-5 pb-5">
                                        <b-col cols="2"></b-col>
                                        <b-col cols="8">
                                            <Button
                                                type="success"
                                                long
                                                size="large"
                                                @click="payment"
                                                >Recharge
                                            </Button>
                                            <div class="mt-4 mb-2 text-center">
                                                <Button
                                                    type="error"
                                                    ghost
                                                    to="/record/recharge"
                                                    >Recharge Record</Button
                                                >
                                            </div>
                                        </b-col>
                                        <b-col cols="2"></b-col>
                                    </b-row>
                                </vk-tabs-item>

                                <vk-tabs-item title="Withdraw"
                                    ><b-row>
                                        <b-col cols="3">
                                            <Button type="success" ghost long
                                                >Ocpay
                                            </Button>
                                        </b-col>
                                        <b-col cols="3"> </b-col>
                                    </b-row>
                                    <b-row class="mt-4 mb-4">
                                        <b-col cols="3">
                                            <div class="text-white">
                                                Amount Of Withdraw
                                            </div>
                                        </b-col>
                                    </b-row>
                                    <div class="mb-3">
                                        <!-- <Icon type="ios-card-outline" /> -->
                                        <Input
                                            v-model="value"
                                            placeholder="200-50000"
                                            size="large"
                                        />
                                    </div>
                                    <div class="mt-5 d-inline">
                                        <b-card class="bg-dark height">
                                            <b-row class="pb-2">
                                                <b-col cols="3">
                                                    <span class="pt-5"
                                                        >Bank Name
                                                    </span>
                                                </b-col>
                                                <b-col cols="9">
                                                    <input
                                                        type="text"
                                                        class="form-control colored"
                                                    />
                                                </b-col>
                                            </b-row>
                                            <b-row class=" pt-2 pb-2">
                                                <b-col cols="3">
                                                    <span class="pt-5"
                                                        >Phone
                                                    </span>
                                                </b-col>
                                                <b-col cols="9">
                                                    <input
                                                        type="text"
                                                        class="form-control colored"
                                                    />
                                                </b-col>
                                            </b-row>
                                            <b-row class=" pt-2 pb-2">
                                                <b-col cols="3">
                                                    <span class="pt-5"
                                                        >Email
                                                    </span>
                                                </b-col>
                                                <b-col cols="9">
                                                    <input
                                                        type="text"
                                                        class="form-control colored"
                                                    />
                                                </b-col>
                                            </b-row>
                                            <b-row class=" pt-2 pb-2">
                                                <b-col cols="10">
                                                    <span class="pt-5"
                                                        >Choose Card
                                                    </span>
                                                </b-col>
                                                <b-col cols="2">
                                                    <Upload>
                                                        <Button type="primary"
                                                            >Choose</Button
                                                        >
                                                    </Upload>
                                                </b-col>
                                            </b-row>
                                            <b-row class=" pt-2">
                                                <b-col cols="3">
                                                    <span class="pt-5"
                                                        >Actual Name
                                                    </span>
                                                </b-col>
                                                <b-col cols="9">
                                                    <input
                                                        type="text"
                                                        class="form-control colored"
                                                        placeholder="Please Enter"
                                                    />
                                                </b-col>
                                            </b-row>
                                        </b-card>
                                    </div>
                                    <b-row class="mt-4 mb-5 pb-5">
                                        <b-col cols="2"></b-col>
                                        <b-col cols="8">
                                            <Button
                                                type="success"
                                                long
                                                size="large"
                                                >Withdraw
                                            </Button>
                                            <div class="mt-4 mb-2 text-center">
                                                <Button
                                                    type="error"
                                                    ghost
                                                    to="/record/withdraw"
                                                    >Withdraw Record</Button
                                                >
                                            </div>
                                        </b-col>
                                        <b-col cols="2"></b-col> </b-row
                                ></vk-tabs-item>
                            </vk-tabs>
                        </div>
                    </b-card>
                </b-col>
                <b-col md="2"></b-col>
            </b-row>
        </b-container>
    </perfect-scrollbar>
</template>

<script>
export default {
    data() {
        return {
            mainProps: { width: 35 }
        };
    },
    methods: {
        payment() {
            this.$router.push("/payment");
        }
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

body::-webkit-scrollbar {
    display: none;
}
.tab-content {
    color: white;
}
.tab-content > .tab-pane {
    display: inline-block !important;
}
.uk-tab {
    color: white;
}
.uk-tab::before {
    border-bottom: none !important;
}
.uk-tab > * > a {
    border: none;
}
.uk-tab > .uk-active > a {
    border-color: transparent !important;
}
.uk-active > a {
    color: rgb(238, 164, 58) !important;
    font-weight: 600;
}
/* input {
    text-align: right;
} */
.ivu-input-large {
    color: white !important;
    background-color: #22232f !important;
    border-color: #22232f !important;
    text-align: right;
}
.ivu-icon {
    /* position: absolute; */
    color: white;
    /* left: 30px;
    bottom: 25px; */
}
.colored {
    background-color: transparent !important;
    color: white !important;
    border: transparent !important;
}
.form-control:focus {
    box-shadow: none !important;
}
.height {
    min-height: auto !important;
}
</style>
