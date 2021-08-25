<template>
    <b-container>
        <b-row>
            <b-col md="2"></b-col>
            <b-col md="8">
                <b-card class="bg-royalblue pl-2 pr-2 ">
                    <b-row>
                        <b-col cols="6" class="text-white">
                            <router-link to="/mine">
                                <Icon type="ios-arrow-back"
                            /></router-link>
                            My Bank Card
                        </b-col>
                        <b-col cols="6"></b-col>
                    </b-row>
                    <div class="mt-5">
                        <div role="button" class="text-white">
                            <b-row class="pb-2">
                                <b-col cols="3">
                                    <div>
                                        4323322011
                                    </div>
                                </b-col>
                                <b-col cols="6"></b-col>
                                <b-col cols="3">
                                    <div class="text-right">
                                        NEFT
                                        <Icon
                                            type="ios-arrow-forward"
                                            size="20"
                                        />
                                    </div>
                                </b-col>
                            </b-row>
                            <b-row
                                class="pt-2 pb-2 border-bottom border-top border-dark"
                            >
                                <b-col cols="3">
                                    <div>
                                        64543322353
                                    </div>
                                </b-col>
                                <b-col cols="6"></b-col>
                                <b-col cols="3">
                                    <div class="text-right">
                                        UPI
                                        <Icon
                                            type="ios-arrow-forward"
                                            size="20"
                                        />
                                    </div>
                                </b-col>
                            </b-row>
                        </div>
                        <div class="text-center mt-5">
<<<<<<< HEAD
                            <Button type="success" size="large">
=======
                            <Button type="success" size="large  ">
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
                                + Add Bank Card</Button
                            >
                        </div>
                    </div>
                </b-card>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
export default {
    methods: {}
};
</script>

<style></style>
