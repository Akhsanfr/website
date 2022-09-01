<template>
    <div
        class="relative h-screen text-dark-green font-comforta text-center text-xs"
        :class="[amplop ? 'overflow-hidden' : 'overflow-scroll']"
        style="background-image: url('/img/bg.png')"
        ref="base"
        @scroll="handleScroll"
        @touchstart="handleTouchStart"
        @touchend="handleTouchEnd"
    >
        <!-- <div class="relative w-screen h-screen"> -->
        <IndexAmplop
            @closeAmplop="closeAmplop"
            class="absolute top-0 left-0 z-50"
        />
        <IndexContent class="absolute w-screen" v-if="!amplop" />
        <!-- </div> -->
    </div>
</template>

<script>
import IndexAmplop from "./IndexAmplop.vue";
import IndexContent from "./IndexContent.vue";
export default {
    props: ["user", "param"],
    data() {
        return {
            amplop: true,
            timer: {
                timeout: undefined,
                startTime: 0,
                time: [],
            },
        };
    },
    components: { IndexAmplop, IndexContent },
    computed: {
        windowHeight() {
            return window.innerHeight;
        },
    },
    methods: {
        closeAmplop() {
            this.amplop = false;

            // const audio = new Audio("/music.mp3");
            // audio.play();
        },
        handleTouchStart(e) {
            console.log("ts", e);
        },
        handleTouchEnd(e) {
            console.log("ts", e);
        },
        handleScroll(e) {
            if (this.timer.time === []) {
                console.log("exe start");
                this.timer.startTime = e.timeStamp;
            }
            this.timer.time.push(e.timeStamp - this.timer.startTime);
            const pos = e.target.scrollTop;
            const mod = pos % this.windowHeight;
            const section = Math.floor(pos / this.windowHeight) + 1;
            clearTimeout(this.timer.timeout);
            this.timer.timeout = setTimeout(() => {
                console.log("time : ", this.timer.time);
                this.timer.time = [];
                this.$refs.base.scrollTo({
                    top: (section - 1) * this.windowHeight,
                    behavior: "smooth",
                });
                // if (mod <= this.windowHeight / 2) {

                // } else {
                //     this.$refs.base.scrollTo({
                //         top: section * this.windowHeight,
                //         behavior: "smooth",
                //     });
                // }
            }, 100);
        },
    },
    mounted() {
        window.addEventListener("scroll", this.handleScroll);
    },
    unmounted() {
        window.removeEventListener("scroll", this.handleScroll);
    },
};
</script>

<style></style>
