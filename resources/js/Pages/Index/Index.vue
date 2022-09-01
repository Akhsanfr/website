<template>
    <div
        class="relative h-screen text-dark-green font-comforta text-center text-xs bg-green-gradient"
        :class="[amplop ? 'overflow-hidden' : 'overflow-scroll']"
        ref="base"
        @scroll="handleScroll"
    >
        <!-- @wheel="handleScroll" -->
        <!-- <div class="relative w-screen h-screen"> -->
        <IndexAmplop
            @closeAmplop="closeAmplop"
            class="absolute top-0 left-0 z-50"
        />
        <IndexContent class="absolute w-screen" v-if="!amplop" />
        <!-- </div> -->

        <!-- <div class="absolute top-20 w-screen bg-cyan-300 z-50">
            Scroll : {{ scroll }}
        </div> -->
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
            // scroll: {
            //     direction: undefined,
            //     execution: true,
            //     startPosition: undefined,
            //     timer: undefined,
            // },
            wheelOpt: undefined,
            wheelEvent: undefined,
            scroll: true,
            scrollTimer: undefined,
            scrollStart: undefined,
            // timer: {
            //     touched: false,
            //     timeout: undefined,
            //     startTime: 0,
            //     time: [],
            // },
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
            const audio = new Audio("/music.mp3");
            audio.loop = true;
            audio.play();
        },
        handleScroll(e) {
            // jika belum ada init position...
            // if (!this.scrollStart) {
            //     this.scrollStart = e.target.scrollTop;
            // } else {
            //     // tentukan arah
            //     if (this.scroll) {
            //         let arrow = undefined;
            //         if (e.target.scrollTop < this.scrollStart) {
            //             // atas
            //             arrow = "up";
            //         } else {
            //             arrow = "down";
            //             // bawah
            //         }
            //         // disable scroll
            //         this.disableScroll();
            //         this.scroll = false;
            //         console.log("exe");
            //         this.$refs.base.scrollTo({
            //             top: 200,
            //             behavior: "smooth",
            //         });
            //     }
            //     // go to page
            //     // enable scroll
            //     clearTimeout(this.scrollTimer);
            //     this.scrollTimer = setTimeout(() => {
            //         this.scroll = true;
            //         this.enableScroll();
            //     }, 1000);
            // }
            // console.log("wheel");
        },
        preventDefault(e) {
            e.preventDefault();
        },
        preventDefaultForScrollKeys(e) {
            // left: 37, up: 38, right: 39, down: 40,
            // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
            var keys = { 37: 1, 38: 1, 39: 1, 40: 1 };
            if (keys[e.keyCode]) {
                this.preventDefault(e);
                return false;
            }
        },
        // call this to Disable
        disableScroll() {
            window.addEventListener(
                "DOMMouseScroll",
                this.preventDefault,
                false
            ); // older FF
            window.addEventListener(
                this.wheelEvent,
                this.preventDefault,
                this.wheelOpt
            ); // modern desktop
            window.addEventListener(
                "touchmove",
                this.preventDefault,
                this.wheelOpt
            ); // mobile
            window.addEventListener(
                "keydown",
                this.preventDefaultForScrollKeys,
                false
            );
        },

        // call this to Enable
        enableScroll() {
            window.removeEventListener(
                "DOMMouseScroll",
                this.preventDefault,
                false
            );
            window.removeEventListener(
                this.wheelEvent,
                this.preventDefault,
                this.wheelOpt
            );
            window.removeEventListener(
                this.wheelEvent,
                this.preventDefault,
                this.wheelOpt
            );
            window.removeEventListener(
                "touchmove",
                this.preventDefault,
                this.wheelOpt
            );
            window.removeEventListener(
                "keydown",
                this.preventDefaultForScrollKeys,
                false
            );
        },

        // scroll() {},
    },
    mounted() {
        // window.addEventListener("scroll", this.handleScroll);

        // modern Chrome requires { passive: false } when adding event
        var supportsPassive = false;
        try {
            window.addEventListener(
                "test",
                null,
                Object.defineProperty({}, "passive", {
                    get: function () {
                        supportsPassive = true;
                    },
                })
            );
        } catch (e) {}

        this.wheelOpt = supportsPassive ? { passive: false } : false;
        this.wheelEvent =
            "onwheel" in document.createElement("div") ? "wheel" : "mousewheel";
        // this.disableScroll();
    },
};
</script>
