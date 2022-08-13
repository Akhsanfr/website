<template>
    <div
        class="overflow-hidden text-dark-green"
        style="background-image: url('/img/bg.png')"
    >
        <div class="relative w-screen min-h-screen">
            <IndexAmplop
                @closeAmplop="closeAmplop"
                class="absolute top-0 left-0 z-10"
            />
            <IndexContent class="absolute" v-if="!amplop" />
        </div>
    </div>
</template>

<script>
import IndexAmplop from "./IndexAmplop.vue";
import IndexContent from "./IndexContent.vue";
export default {
    props: ["user"],
    data() {
        return {
            amplop: true,
        };
    },
    components: { IndexAmplop, IndexContent },
    methods: {
        closeAmplop() {
            // this.amplop = false;
            // const audio = new Audio("/music.mp3");
            // audio.play();
        },
    },
    mounted() {
        // Inertia
    },
};
</script>

<style></style>
