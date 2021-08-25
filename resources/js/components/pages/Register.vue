<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2"></div>
<<<<<<< HEAD
            <div class="col-md-8">
                <Form>
                    <b-input-group>
                        <template #prepend>
                            <select
                                name="cc"
                                id=""
                                class="form-control cstminpt"
                            >
                                <option value="+91">+91</option>
                                <option value="+60">+60</option>
                            </select>
                        </template>
                        <b-form-input
                            class="cstminpt"
                            v-model="form.phone"
                            type="text"
                            placeholder="Enter Phone"
                            required
                        ></b-form-input>
                    </b-input-group>
                    <b-input-group prepend="Code" class="text mt-2">
                        <b-form-input
                            class="cstminpt"
                            type="text"
                            placeholder="Code"
                            required
                        ></b-form-input>
                    </b-input-group>
                    <b-input-group prepend="Password" class="text1 mt-2 mb-2">
                        <b-form-input
                            class="cstminpt"
                            v-model="form.password"
                            type="password"
                            placeholder="Password"
                            required
                        ></b-form-input>
                    </b-input-group>

                    <Button type="primary" @click="register">SignUp</Button>
                    <Button type="default" to="/login">SignIn</Button>
                </Form>
=======
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
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
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
                select: "+91"
            }
        };
    },
    methods: {
        register() {
<<<<<<< HEAD
=======
            if (this.form.phone == "") {
                return this.e("Phone is required");
            }
            if (this.form.password == "") {
                return this.e("Password is required");
            }
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
            axios
                .post("/api/register", {
                    phone: this.form.phone,
                    password: this.form.password
                })
                .then(res => {
                    console.log(res);
                    this.s("registered successfully");
                    this.$router.push("/login");
                })
                .catch(err => {
                    console.log(err);
                    this.i("error while register");
                });
        }
    }
};
</script>

<style scoped>
.cstminpt {
<<<<<<< HEAD
=======
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
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
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
<<<<<<< HEAD
}
=======
} */
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
</style>
