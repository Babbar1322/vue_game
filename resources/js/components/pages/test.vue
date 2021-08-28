<template>
    <!-- <div v-if="distance > 0">
        {{ `${minutes} :${seconds}` }}
    </div>
    <div v-else>OVER</div> -->
    <div>
        <Button @click="storeTime">StoreTime</Button>

        <vue-countdown-timer
            @start_callback="startCallBack('event started')"
            @end_callback="endCallBack('event ended')"
            :start-time="startTimer"
            :end-time="endTimer"
            :interval="1000"
            label-position="begin"
            :end-text="null"
            :day-txt="null"
            :hour-txt="':'"
            :minutes-txt="':'"
            :seconds-txt="null"
        >
        </vue-countdown-timer>
        <Spin size="large" fix v-if="spinShow"></Spin>
    </div>
</template>

<script>
export default {
    name: "Timer",
    data() {
        var vm = this;
        return {
            timer: null,
            fiften: null,
            spinShow: false,
            startTimer: null,
            endTimer: null,
            countDownDate: new Date().getTime(),
            days: 0,
            hours: 0,
            minutes: 0,
            seconds: 0,
            distance: 0
        };
    },
    created() {
        axios.get("/api/timer").then(res => {
            this.startTimer = parseInt(res.data.timer.start_time);
            this.endTimer = parseInt(res.data.timer.end_time);
            this.fiften = new Date().getTime() + 1000 * 15;
            localStorage.setItem("time", res.data.timer.end_time);

            // var ff = vs.startTimer + tt;
            // console.log(vs.timer);
        });
        var vs = this;
        setInterval(function() {
            // vs.timer = localStorage.time--;
            var tt = 276;
            var fif = this.endTimer - tt;
            if (fif == this.timer) {
                this.spinShow = true;
            }
            if (this.timer == this.endTimer) {
                this.spinShow = false;
            }
        }, 1000);
    },
    mounted() {
        var vm = this;
        var t = setInterval(function() {
            var now = this.startTimer + 60000 * 5;
            // console.log(this.startTimer);
            // vm.distance = this.endTimer + -this.startTimer;
            // console.log(vm.distance);
        }, 1000);
        // console.log(t);
        var x = setInterval(function() {
            var now = new Date().getTime();
            vm.distance = localStorage.time - now;
            // console.log(vm.distance);
            vm.days = Math.floor(vm.distance / (1000 * 60 * 60 * 24));
            var h =
                Math.floor(vm.distance % (1000 * 60 * 60 * 24)) /
                (1000 * 60 * 60);
            vm.hours = parseFloat(h).toFixed(0);
            var m = Math.floor(vm.distance % (1000 * 60 * 60)) / (1000 * 60);
            vm.minutes = parseFloat(m).toFixed(0);
            vm.seconds = Math.floor((vm.distance % (1000 * 60)) / 1000);
            if (vm.seconds > 29) {
                vm.minutes -= 1;
            }
            if (vm.minutes == 0 && vm.seconds == 15) {
                vm.seconds = 15;
                vm.spinShow = true;
            }
            if (vm.minutes == 0 && vm.seconds == 0) {
                vm.spinShow = false;
            }

            if (vm.distance < 0) {
                if (vm.distance < -1000 * 60 * 24 * 1) {
                    vm.countDownDate += 1000 * 60 * 60 * 24 * 1 * 365;
                }
            }
        }, 1000);
    },

    methods: {
        startCallBack: function(x) {
            console.log(x);
        },
        endCallBack: function(x) {
            console.log(x);
        },
        storeTime() {
            axios.post("/api/time", {
                start_time: new Date().getTime(),
                end_time: new Date().getTime() + 60000 * 5,
                last_time: new Date().getTime() + 1000 * 15
            });
        }
    }
};
</script>
