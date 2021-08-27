<template>
    <div>
        <b-container class="mb-5">
            <b-row>
                <b-col md="4"></b-col>
                <b-col md="4">
                    <b-card class="bg-royalblue">
                        <b-container class="mt-5 ">
                            <div class="text-warning">
                                Step 1 : Copy UPI Information
                            </div>
                            <label class="text-white">Account</label>
                            <b-input-group class="mb-3">
                                <input
                                    type="text"
                                    class="form-control cstmform"
                                    v-model="form.account"
                                />
                                <b-input-group-append>
                                    <b-button
                                        variant="primary"
                                        v-clipboard="value"
                                        >Copy</b-button
                                    >
                                </b-input-group-append>
                            </b-input-group>
                            <label class="text-white">UPI Account</label>
                            <b-input-group class="mb-3">
                                <input
                                    type="text"
                                    class="form-control cstmform"
                                    v-model="form.upi"
                                />
                                <b-input-group-append>
                                    <b-button
                                        variant="primary"
                                        v-clipboard="value1"
                                        >Copy</b-button
                                    >
                                </b-input-group-append>
                            </b-input-group>
                            <div class="text-warning">
                                Step 2 : Open online banking or wallet ,
                                transfer to the UPI account
                            </div>
                            <div class="text-white">
                                <small>transfer the money to UPI account</small>
                            </div>
                            <div class="text-danger">
                                <small
                                    >the UPI account may change any time.Please
                                    do not save the UPI account</small
                                >
                            </div>
                            <div class="text-warning">
                                Step 3 : Enter Ref No.
                            </div>
                            <div class="text-white">
                                <small
                                    >check the UPI reference no. after payment
                                    from your UPI app Example in below
                                    image</small
                                >
                            </div>

                            <input
                                type="text"
                                class="form-control cstmform"
                                placeholder="REF NO."
                            />
                            <small class="text-danger"
                                >*Please enter Ref No. to complete to
                                recharge.</small
                            >
                            <div class="text-center mt-3">
                                <Button>Confirm REF No.</Button>
                            </div>
                        </b-container>
                    </b-card>
                </b-col>
                <b-col md="4"></b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                account: "200.00",
                upi: "abc123@upi"
            }
        };
    },
    methods: {
        value() {
            this.i("link copied");
            return this.form.account;
        },
        value1() {
            this.i("link copied");
            return this.form.upi;
        }
    }
};
</script>

<style scoped>
.cstmform {
    background-color: transparent !important;
    border-color: white !important;
    color: goldenrod !important;
}
.cstmform::placeholder {
    color: goldenrod !important;
}
.cstmform:focus {
    background: transparent !important;
    color: goldenrod !important;
}
</style>
