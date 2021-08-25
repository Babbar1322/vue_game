<template>
    <div>
        <perfect-scrollbar>
            <b-container class="mb-5">
                <b-row>
                    <b-col md="2"></b-col>
                    <b-col md="8">
                        <b-card class="bg-royalblue pl-2 pr-2 pt-5">
                            <div class="text-center">
                                <b-img
                                    v-bind="mainProps"
                                    src="whatsapp.png"
                                ></b-img>
                                <h3 class="text-white d-inline pt-2">
                                    WhatsApp
                                </h3>
                                <h6 class="mt-5 text-white">open whatsapp</h6>
                                <div class="mt-4">
                                    <Button
                                        type="success"
                                        size="Large"
                                        to="https://wa.me/919876543210"
                                    >
                                        CHAT</Button
                                    >
                                </div>
                            </div>
                        </b-card>
                    </b-col>
                </b-row>
            </b-container>
        </perfect-scrollbar>
    </div>
</template>

<script>
export default {
    data() {
        return {
            mainProps: { width: 50 }
        };
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
