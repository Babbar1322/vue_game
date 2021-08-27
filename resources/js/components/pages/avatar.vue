<template>
    <div>
        <b-container class="mb-5">
            <b-row>
                <b-col md="2"></b-col>
                <b-col md="8">
                    <b-card class="bg-royalblue pl-2 pr-2 ">
                        <b-row>
                            <b-col cols="6" class="text-white">
                                <router-link to="/mine/user">
                                    <Icon type="ios-arrow-back"
                                /></router-link>
                                Reset Avatar
                            </b-col>
                            <b-col cols="6"></b-col>
                        </b-row>
                        <div class="text-center pt-4" v-if="image">
                            <img
                                :src="`/uploads/${image}`"
                                v-bind="mainProps"
                                class="rounded-circle"
                            />
                        </div>
                        <div class="text-center pt-5">
                            <Upload
                                ref="uploads"
                                type="drag"
                                :headers="{
                                    'x-csrf-token': token,
                                    'x-Requested-With': 'XMLHttpRequest'
                                }"
                                :on-success="handleSuccess"
                                :on-error="handleError"
                                :format="['jpg', 'jpeg', 'png']"
                                :max-size="2048"
                                :on-format-error="handleFormatError"
                                :on-exceeded-size="handleMaxSize"
                                :action="compAction"
                            >
                                <div style="padding: 20px 0">
                                    <Icon
                                        type="ios-cloud-upload"
                                        size="52"
                                        style="color: #3399ff"
                                    ></Icon>
                                    <p>Click or drag files here to upload</p>
                                </div>
                            </Upload>
                        </div>
                    </b-card>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>
export default {
    data() {
        return {
            compAction: "",
            token: "",
            image: "",
            mainProps: { width: 100 }
        };
    },
    methods: {
        handleSuccess(res, file) {
            this.image = res;
            this.s("image uploaded successfully");
            this.$router.push({
                path: "/mine/user"
            });
        },
        handleError(res, file) {
            this.$Notice.warning({
                title: "The file format is incorrect",
                desc: `${
                    file.errors.file.length
                        ? file.errors.file[0]
                        : "something went wrong"
                }`
            });
        },
        handleFormatError(file) {
            this.$Notice.warning({
                title: "The file format is incorrect",
                desc:
                    "File format of " +
                    file.name +
                    " is incorrect, please select jpg or png."
            });
        },
        handleMaxSize(file) {
            this.$Notice.warning({
                title: "Exceeding file size limit",
                desc: "File  " + file.name + " is too large, no more than 2M."
            });
        }
    },
    async created() {
        this.token = window.Laravel.csrfToken;
        axios
            .get("../../../api/profile", {
                headers: {
                    Authorization: `Bearer ${localStorage.usertoken}`
                }
            })
            .then(res => {
                if (res.data[0] == "token_expired") {
                    this.auth = "";
                    this.$router.push("/login");
                }
                this.compAction = "../../../api/upload/" + res.data.user.id;
                this.image = res.data.user.image;
            })
            .catch(err => {
                console.log(err);
            });
    }
};
</script>

<style>
.bg-royalblue {
    background-color: #011f47ed !important;
}
.card {
    min-height: 472px;
}
</style>
