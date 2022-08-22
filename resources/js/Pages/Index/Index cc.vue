<template>
    <div
        class="overflow-hidden text-dark-green"
        style="background-image: url('/img/bg.png')"
    >
        <div class="relative w-screen" :style="{ height: height + 'px' }">
            <IndexAmplop
                @closeAmplop="closeAmplop"
                class="absolute top-0 left-0 z-10"
            />
            <!-- <IndexContent
                @setHeight="setHeight"
                class="absolute w-screen h-full"
                v-if="!amplop"
            /> -->
            <div
                style="background-image: url('/img/bg.png')"
                ref="bg"
                class="absolute w-screen h-fit"
                v-if="!amplop"
            >
                <!-- :style="{ height: bg + 'px' }" -->
                <div class="relative">
                    <img
                        class="absolute top-[-150px]"
                        src="/img/amplop-bunga-bawah-kiri.png"
                    />
                </div>
                <div class="relative flex flex-col items-center my-20">
                    <div class="z-50 w-full flex flex-col items-center">
                        <h1
                            class="text-5xl font-kaushan text-center mt-8 flex flex-col mx-auto"
                        >
                            <span> Pasangan </span>
                            <span class="ml-8"> Mempelai </span>
                        </h1>
                        <img class="h-[200px]" src="/img/mempelai-pria.png" />
                        <p class="underline font-kaushan text-2xl">
                            Fernanda Akhsanuddin Almas
                        </p>
                        <p class="text-xs">
                            Putra Bapak Parnoto dan Ibu Mus Mariati
                        </p>
                        <img class="h-[200px]" src="/img/mempelai-wanita.png" />
                        <p class="underline font-kaushan text-2xl">
                            Silvara Putri Rahma Agustyn
                        </p>
                        <p class="text-xs">
                            Putri Bapak Djatmiko Iwan Susanto dan Ibu Sulis
                            Fitri Asang
                        </p>
                    </div>
                    <img
                        class="absolute bottom-[-400px] right-[-150px] z-0"
                        src="/img/bunga-1.png"
                    />
                </div>
                <div class="relative h-[1000px]">
                    <h1 class="text-5xl font-kaushan">Kisah Perjalanan Kami</h1>
                </div>
                <div class="relative h-20 bg-yellow"></div>
            </div>
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
            height: 0,
        };
    },
    components: { IndexAmplop, IndexContent },
    methods: {
        closeAmplop() {
            this.amplop = false;
            this.height = this.$refs.bg.clientHeight;
            // const audio = new Audio("/music.mp3");
            // audio.play();
        },
    },
    mounted() {
        this.height = window.innerHeight;
    },
};
</script>

<style></style>
