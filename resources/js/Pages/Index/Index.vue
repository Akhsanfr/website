<template>
    <div
        class="overflow-hidden text-dark-green font-comforta text-center text-xs"
        style="background-image: url('/img/bg.png')"
    >
        <div class="relative w-screen min-h-screen overflow-scroll">
            <IndexAmplop
                @closeAmplop="closeAmplop"
                class="absolute top-0 left-0 z-50"
            />
            <IndexContent class="absolute w-screen" v-if="!amplop" />
        </div>
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
        };
    },
    components: { IndexAmplop, IndexContent },
    methods: {
        closeAmplop() {
            this.amplop = false;
            // const audio = new Audio("/music.mp3");
            // audio.play();
        },
    },
    mounted() {
        console.log(this.param);
    },
};
</script>

<style></style>
