<template>
    <div class="h-100 text-gold">
        <b-container class="pt-3 text-gold">
            <h5 class="text-white">Game Rule</h5>
            <p>
                It is issued every 5 minutes, ordering in 4 minutes and 30
                seconds, and displaying the lottery result in 30 seconds. It is
                open all day. The total number of transactions is 288
            </p>
            <p><br /></p>
            <p>
                If you spend 100 for a transaction, after deducting 2 service
                fees, your contract amount is 98
            </p>
            <p><br /></p>
            <p>1. Join the green:</p>
            <p>If the result shows 1,3,7,9, you will get (98 * 2) 196</p>
            <p>If the result shows 5, you will get (98 * 1.5) 147</p>
            <p><br /></p>
            <p>2. Add red:</p>
            <p>If the result shows 2,4,6,8, you will get (98 * 2) 196</p>
            <p>If the result shows 0, you will get (98 * 1.5) 147</p>
            <p><br /></p>
            <p>3. Add violet:</p>
            <p>If the result shows 0 or 5, you will get (98 * 4.5) 441</p>
            <p><br /></p>
            <p>4. Select the number:</p>
            <p>
                If the result is the same as the number you selected, you will
                get (98 * 9) 882
            </p>
            <p>
                It is not allowed to trade 7 or more numbers at the same time,
                otherwise it will be regarded as illegal game rules. In severe
                cases, the account will be frozen.
            </p>
            <p><br /></p>
            <p>
                You cannot trade red, purple and green or red and green at the
                same time. If the situation is serious, your account will be
                frozen!
            </p>
            <p><br /></p>
        </b-container>
    </div>
</template>

<script>
export default {};
</script>

<style>
/* .h-100 {
    min-height: 500px;
} */
.text-gold {
    background-color: #011f47ed !important;
    color: goldenrod;
}
</style>
