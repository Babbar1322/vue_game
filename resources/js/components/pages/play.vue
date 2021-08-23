<template>
    <perfect-scrollbar>
        <b-container class="mb-5">
            <b-row>
                <b-col md="2"></b-col>
                <b-col md="8">
                    <b-card class="bg-royalblue pl-2 pr-2">
                        <b-row align-v="start" class="bordered">
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
                                    <div class="text-yellow">
                                        Statistics today
                                    </div>
                                    <div
                                        style="color:#12dfe9"
                                        class="text-right"
                                    >
                                        0.00
                                    </div>
                                </div>
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
                        <div class="text-center text-white mt-3">
                            <b>Parity</b>
                        </div>
                        <b-row class="mt-2">
                            <b-col cols="6">
                                <div>
                                    <div class="text-yellow">Next period</div>
                                    <div class="text-white">20321243243</div>
                                </div>
                            </b-col>
                            <b-col cols="3"></b-col>
                            <b-col cols="3">
                                <div class="text-right">
                                    <div class="text-yellow">Count Down</div>
                                    <div class="text-white">00:01:43</div>
                                </div>
                            </b-col>
                        </b-row>
                        <b-row class="mt-2 text-center">
                            <b-col cols="4">
                                <Button
                                    type="success"
                                    size="large"
                                    long
                                    @click="joinModal('Join Green')"
                                    >Join Green</Button
                                >
                            </b-col>
                            <b-col cols="4">
                                <Button
                                    type="warning"
                                    size="large"
                                    long
                                    @click="joinModal('Join Violet')"
                                    >Join Violet</Button
                                >
                            </b-col>
                            <b-col cols="4">
                                <Button
                                    type="error"
                                    size="large"
                                    long
                                    @click="joinModal('Join Red')"
                                    >Join Red</Button
                                >
                            </b-col>
                        </b-row>
                        <b-row class="mt-3">
                            <b-col cols="1"></b-col>
                            <b-col cols="2">
                                <Button
                                    type="warning"
                                    ghost
                                    size="large"
                                    long
                                    @click="joinModal('Select 0')"
                                    >0</Button
                                >
                            </b-col>
                            <b-col cols="2">
                                <Button
                                    type="success"
                                    ghost
                                    size="large"
                                    long
                                    @click="joinModal('Select 1')"
                                    >1</Button
                                >
                            </b-col>
                            <b-col cols="2">
                                <Button
                                    type="error"
                                    ghost
                                    size="large"
                                    long
                                    @click="joinModal('Select 2')"
                                    >2</Button
                                >
                            </b-col>
                            <b-col cols="2">
                                <Button
                                    type="success"
                                    ghost
                                    size="large"
                                    long
                                    @click="joinModal('Select 3')"
                                    >3</Button
                                >
                            </b-col>
                            <b-col cols="2">
                                <Button
                                    type="error"
                                    ghost
                                    size="large"
                                    long
                                    @click="joinModal('Select 4')"
                                    >4</Button
                                >
                            </b-col>
                            <b-col cols="1"></b-col>
                        </b-row>
                        <b-row class="mt-3">
                            <b-col cols="1"></b-col>

                            <b-col cols="2">
                                <Button
                                    type="warning"
                                    ghost
                                    size="large"
                                    long
                                    @click="joinModal('Select 5')"
                                    >5</Button
                                >
                            </b-col>
                            <b-col cols="2">
                                <Button
                                    type="error"
                                    ghost
                                    size="large"
                                    long
                                    @click="joinModal('Select 6')"
                                    >6</Button
                                >
                            </b-col>
                            <b-col cols="2">
                                <Button
                                    type="success"
                                    ghost
                                    size="large"
                                    long
                                    @click="joinModal('Select 7')"
                                    >7</Button
                                >
                            </b-col>
                            <b-col cols="2">
                                <Button
                                    type="error"
                                    ghost
                                    size="large"
                                    long
                                    @click="joinModal('Select 8')"
                                    >8</Button
                                >
                            </b-col>
                            <b-col cols="2">
                                <Button
                                    type="success"
                                    ghost
                                    size="large"
                                    long
                                    @click="joinModal('Select 9')"
                                    >9</Button
                                >
                            </b-col>
                            <b-col cols="1"></b-col>
                        </b-row>
                        <b-row class="mt-3">
                            <b-col cols="4"> </b-col>
                            <b-col cols="2">
                                <Button size="small" ghost to="/record/game"
                                    >Game Record</Button
                                >
                            </b-col>
                            <b-col cols="2">
                                <Button size="small" ghost @click="openModal"
                                    >Game Rule</Button
                                >
                            </b-col>
                            <b-col cols="4"> </b-col>
                        </b-row>
                        <div class="mt-2">
                            <!-- <table class="table table-responsive table-dark">
                                <thead>
                                    <tr>
                                        <th>Period</th>
                                        <th>Price</th>
                                        <th>Number</th>
                                        <th>Result</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2021876543</td>
                                        <td>87483</td>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2021876543</td>
                                        <td>87483</td>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2021876543</td>
                                        <td>87483</td>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2021876543</td>
                                        <td>87483</td>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2021876543</td>
                                        <td>87483</td>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2021876543</td>
                                        <td>87483</td>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table> -->

                            <Table
                                height="200"
                                :columns="columns1"
                                :data="data2"
                            ></Table>
                        </div>
                    </b-card>
                </b-col>
                <b-col md="2"></b-col>
            </b-row>
        </b-container>
    </perfect-scrollbar>
</template>

<script>
import rule from "./rule.vue";
import joinmodal from "./joinModal.vue";
export default {
    data() {
        return {
            mainProps: { width: 35 },
            columns1: [
                {
                    title: "Period",
                    key: "period"
                },
                {
                    title: "Price",
                    key: "price"
                },
                {
                    title: "Number",
                    key: "number",
                    className: "green"
                },
                {
                    title: "Result",
                    key: "result",
                    className: "red"
                }
            ],
            data2: [
                {
                    period: "2021876543",
                    price: 87483,
                    number: 1,
                    date: "2016-10-03"
                },
                {
                    period: "2021876543",
                    price: 87483,
                    number: 2,
                    date: "2016-10-01"
                },
                {
                    period: "2021876543",
                    price: 87483,
                    number: 3,
                    date: "2016-10-02"
                },
                {
                    period: "2021876543",
                    price: 87483,
                    number: 1,
                    date: "2016-10-04"
                },
                {
                    period: "2021876543",
                    price: 87483,
                    number: 1,
                    date: "2016-10-03"
                },
                {
                    period: "2021876543",
                    price: 87483,
                    number: 1,
                    date: "2016-10-01"
                },
                {
                    period: "2021876543",
                    price: 87483,
                    number: 1,
                    date: "2016-10-02"
                },
                {
                    period: "2021876543",
                    price: 87483,
                    number: 1,
                    date: "2016-10-04"
                }
            ]
        };
    },
    methods: {
        openModal() {
            this.$FModal.show(
                {
                    component: rule
                }
                // {
                //     msg: "Welcome to Your Vue.js App"
                // }
            );
        },
        joinModal(val) {
            this.$FModal.show(
                {
                    component: joinmodal
                },
                {
                    msg: val
                }
            );
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
.ivu-icon {
    font-size: 30px;
}
/* .ps {
    height: 550px;
} */
.bordered {
    border: 1px solid;
    border-radius: 25px;
}
.ivu-btn-warning {
    background-color: rgb(114, 50, 221) !important;
    border-color: rgb(114, 50, 221) !important;
}
.ivu-btn-ghost.ivu-btn-warning {
    color: rgb(114, 50, 221) !important;
    background: transparent !important;
}
.ivu-table .ivu-table-row td {
    background-color: transparent !important;
    color: #fff;
}
.ivu-table th {
    background-color: #011f47ed !important;
    color: #fff;
}
.ivu-table td,
.ivu-table th {
    border-bottom: none !important;
}
.ivu-table {
    background-color: transparent !important;
}
.ivu-table:before {
    background-color: transparent !important;
}
.ivu-table-overflowY::-webkit-scrollbar {
    display: none;
}
body::-webkit-scrollbar {
    display: none;
}
td .green {
    color: lightgreen !important;
}
tbody > tr > .red > div > span {
    width: 10px;
    height: 10px;
    background: red;
    display: inline-block;
    border-radius: 100px;
}
tbody > tr > .red > div {
    text-align: center;
}
/* table {
    height: 200px;
    overflow: scroll;
} */
/* thead > tr > .green {
    color: white !important;
} */
tbody > tr > .green .ivu-table-cell {
    color: lightgreen !important;
}
</style>
