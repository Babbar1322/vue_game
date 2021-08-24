<template>
    <div class="h-100 text-gold">
        <b-container class="pt-3 pb-2 text-gold">
            <h5 class="text-white">{{ msg }}</h5>
            <h6 class="text-gold mt-5">Choose Amount</h6>
            <div class="mt-3">
                <Button ghost @click="amunt('50')">50</Button>
                <Button ghost @click="amunt('100')" class="active1">100</Button>
                <Button ghost @click="amunt('500')">500</Button>
                <Button ghost @click="amunt('1000')">1000</Button>
                <Button ghost @click="amunt('5000')">5000</Button>
                <Button ghost @click="amunt('10000')">10000</Button>
                <Button ghost @click="amunt('50000')">50000</Button>
                <Button ghost @click="amunt('100000')">100000</Button>
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
                <Button type="success" long size="large"> Confirm</Button>
            </div>
        </b-container>
    </div>
</template>

<script>
export default {
    props: ["msg"],
    data() {
        return {
            data: {
                amount: 100
            }
        };
    },
    methods: {
        amunt(amt) {
            this.data.amount = amt;
        }
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
