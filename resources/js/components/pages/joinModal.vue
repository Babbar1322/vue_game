<template>
    <div class="h-100 text-gold">
        <b-container class="pt-3 pb-2 text-gold">
            <h5 class="text-white">{{ msg }}</h5>
            <h6 class="text-gold mt-5">Choose Amount</h6>
            <div class="mt-3">
<<<<<<< HEAD
                <Button ghost>50</Button>
                <Button ghost class="active1">100</Button>
                <Button ghost>500</Button>
                <Button ghost>1000</Button>
                <Button ghost>5000</Button>
                <Button ghost>10000</Button>
                <Button ghost>50000</Button>
                <Button ghost>100000</Button>
=======
                <Button ghost @click="amunt('50')">50</Button>
                <Button ghost @click="amunt('100')" class="active1">100</Button>
                <Button ghost @click="amunt('500')">500</Button>
                <Button ghost @click="amunt('1000')">1000</Button>
                <Button ghost @click="amunt('5000')">5000</Button>
                <Button ghost @click="amunt('10000')">10000</Button>
                <Button ghost @click="amunt('50000')">50000</Button>
                <Button ghost @click="amunt('100000')">100000</Button>
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
            </div>
            <h6 class="text-gold mt-3">Enter Amount(Bet Amount)>=1</h6>
            <div class="mt-3">
                <b-container>
                    <input
                        type="text"
                        class="form-control cstmform"
                        v-model="data.amount"
                    />
                </b-container>
            </div>
            <div class="mt-3 text-white">
                Total Amount <span class="text-gold">100</span>
            </div>
            <div class="mt-4">
<<<<<<< HEAD
                <Button type="success" long size="large"> Confirm</Button>
=======
                <Button type="success" long size="large" @click="submit">
                    Confirm</Button
                >
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
            </div>
        </b-container>
    </div>
</template>

<script>
export default {
<<<<<<< HEAD
    props: ["msg"],
    data() {
        return {
=======
    props: ["msg", "bal"],
    data() {
        return {
            user_id: "",
            balance: "",
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
            data: {
                amount: 100
            }
        };
<<<<<<< HEAD
=======
    },
    methods: {
        amunt(amt) {
            this.data.amount = amt;
        },
        submit() {
            if (this.balance > this.data.amount) {
                axios
                    .post("/api/bet/" + this.user_id, {
                        balance: this.data.amount
                    })
                    .then(res => {
                        console.log(res);
                        this.$attrs.update(res.data[1]);
                        this.$FModal.hide();
                    })
                    .catch(err => {
                        console.log(err);
                    });
            } else {
                this.i("not enough balance to bet");
            }
        }
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
                this.user_id = res.data.user.id;
            })
            .catch(err => {
                console.log(err);
            });
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
    }
};
</script>

<style scoped>
/* .h-100 {
    min-height: 500px;
} */
.text-gold {
    background-color: #011f47ed !important;
    color: goldenrod;
}
.active1 {
    color: goldenrod !important;
    border-color: goldenrod !important;
    background: transparent !important;
}
.cstmform {
    background-color: #011f47ed;
    border-color: white;
    color: goldenrod;
}
.cstmform::placeholder {
    color: goldenrod;
}
.cstmform:focus {
    background: transparent;
    color: goldenrod;
}
</style>
