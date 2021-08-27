<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 bg-royalblue p-20">
                <div class="text-center pb-3">
                    <h3 class="text-white">User Register</h3>
                </div>
                <b-row>
                    <b-col cols="3"></b-col>
                    <b-col cols="6">
                        <Form>
                            <b-input-group>
                                <b-form-input
                                    class="cstminpt"
                                    v-model="form.phone"
                                    type="text"
                                    placeholder="Enter Phone"
                                    required
                                ></b-form-input>
                            </b-input-group>
                            <b-input-group class="text mt-2">
                                <b-form-input
                                    class="cstminpt"
                                    type="text"
                                    placeholder="Code"
                                    required
                                ></b-form-input>
                            </b-input-group>
                            <b-input-group class="text1 mt-2 mb-2">
                                <b-form-input
                                    class="cstminpt"
                                    v-model="form.password"
                                    type="password"
                                    placeholder="Password"
                                    required
                                ></b-form-input>
                            </b-input-group>
                            <b-input-group class="text1 mt-2 mb-2">
                                <b-form-input
                                    class="cstminpt"
                                    v-model="form.sid"
                                    type="text"
                                    placeholder="Invite Code"
                                    required
                                ></b-form-input>
                            </b-input-group>
                            <div class="mt-4">
                                <Button
                                    type="info"
                                    @click="register"
                                    long
                                    size="large"
                                    >SignUp</Button
                                >
                            </div>
                            <div class="pt-3">
                                <router-link class="text-white" to="/login">
                                    Instead SignIn</router-link
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
export default {
    data() {
        return {
            form: {
                phone: "",
                password: "",
                select: "+91",
                sid: ""
            }
        };
    },
    mounted() {
        if (this.$route.params.id) {
            this.form.sid = this.$route.params.id;
        }
    },
    methods: {
        register() {
            if (this.form.phone == "") {
                return this.e("Phone is required");
            }
            if (this.form.password == "") {
                return this.e("Password is required");
            }
            axios
                .post("/api/register", {
                    phone: this.form.phone,
                    password: this.form.password,
                    sid: this.form.sid
                })
                .then(res => {
                    console.log(res);
                    this.s("registered successfully");
                    this.$router.push("/login");
                })
                .catch(err => {
                    if (err.response.data.res) {
                        this.i(err.response.data.res);
                    } else {
                        this.i("error while register");
                    }
                });
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
.cstminpt::placeholder {
    color: white;
}
.p-20 {
    padding: 60px 0px !important;
}
/* .cstminpt {
    border: none;
}
.text {
    margin-left: 13px;
}
.text1 {
    margin-left: -15px;
}
.text > div > div {
    background-color: transparent;
    border: none;
}
.text1 > div > div {
    background-color: transparent;
    border: none;
} */
</style>
