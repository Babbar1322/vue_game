<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 bg-royalblue p-20 ">
                <div class="text-center">
                    <h3 class="text-white pb-3">User Login</h3>
                </div>
                <b-row>
                    <b-col cols="3"></b-col>
                    <b-col cols="6">
                        <Form>
                            <b-input-group>
                                <!-- <template #prepend>
                            <select
                                name="cc"
                                id=""
                                class="form-control cstminpt"
                            >
                                <option value="+91">+91</option>
                                <option value="+60">+60</option>
                            </select>
                        </template> -->
                                <b-form-input
                                    class="cstminpt"
                                    v-model="form.phone"
                                    type="text"
                                    placeholder="Enter Phone"
                                    required
                                ></b-form-input>
                            </b-input-group>
                            <b-input-group class="mt-2 mb-2 text1">
                                <b-form-input
                                    class="cstminpt"
                                    v-model="form.password"
                                    type="password"
                                    placeholder="Password"
                                    required
                                ></b-form-input>
                            </b-input-group>
                            <div class="mt-4">
                                <Button
                                    type="success"
                                    @click="login"
                                    long
                                    size="large"
                                    >SignIn</Button
                                >
                            </div>
                            <div class="pt-3">
                                <router-link class="text-white" to="/register"
                                    >Create Account</router-link
                                >
                            </div>
                        </Form>
                    </b-col>
                    <b-col cols="3"></b-col>
                </b-row>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import EventBus from "../EventBus.vue";
export default {
    data() {
        return {
            form: {
                email: "",
                password: ""
                // select: "+91"
            }
        };
    },
    mounted() {
        // if (localStorage.usertoken) {
        //     this.$router.push("/play");
        // }
    },
    methods: {
        login() {
            axios
                .post("/api/login", {
                    phone: this.form.phone,
                    password: this.form.password
                })
                .then(res => {
                    localStorage.setItem("usertoken", res.data.token);
                    this.phone = "";
                    this.password = "";
                    this.auth = "loggedin";
                    this.$router.push("/play");
                })
                .catch(err => {
                    console.log(err);
                    this.i("Invalid Creadetial or " + err);
                });

            this.emitMethod();
        },

        emitMethod() {
            EventBus.$emit("logged-in", "loggedin");
        }
    }
};
</script>

<style scoped>
.cstminpt {
    border: 1px solid goldenrod;
    background: goldenrod;
    color: white;
    height: 40px;
    margin: 20px 0px;
}
/*.text1 {
    margin-left: -15px;
}
.text1 > div > div {
    background-color: transparent;
    border: none;
} */
.cstminpt::placeholder {
    color: white;
}
.p-20 {
    padding: 80px 0px !important;
}
</style>
