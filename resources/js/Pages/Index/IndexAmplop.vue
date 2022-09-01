<template>
    <div>
        <!-- Amplop -->
        <div
            class="transition duration-[4s] relative h-screen w-screen overflow-clip"
            :class="[{ '-translate-y-full': !$parent.amplop }]"
            :style="{ height: windowHeight + 150 + 'px' }"
        >
            <!-- bg -->
            <div class="absolute transition">
                <div
                    class="h-screen w-screen"
                    style="background-image: url('/img/bg.png')"
                >
                    >
                </div>
                <div
                    style="background-image: url('/img/batas.png')"
                    class="h-[150px]"
                ></div>
            </div>
            <!-- Bunga bg kiri atas -->
            <img
                class="transition md:scale-x-[-2] md:scale-y-[2] scale-x-[-1] scale-y-[1] duration-[5s] absolute top-[-50px] left-[-75px] opacity-25"
                src="/img/bunga-2.png"
                :class="{ '-translate-y-full': !$parent.amplop }"
            />
            <!-- Bunga bg kanan bawah -->
            <img
                class="transition md:scale-x-[2] md:scale-y-[-2] scale-x-[1] scale-y-[-1] duration-[5s] absolute bottom-[75px] -right-[75px] opacity-50"
                src="/img/bunga-2.png"
                :class="{ '-translate-y-full': !$parent.amplop }"
            />
            <!-- Bunga atas kanan 746 × 682 -->
            <img
                class="transition duration-[5s] h-[300px] absolute -top-[75px] -right-[50px] fade-in-top"
                src="/img/bunga-2.png"
                :class="{
                    '-translate-y-full': !$parent.amplop,
                }"
            />
            <!-- Bercak -->
            <img
                class="transition scale-[1] md:scale-[2] duration-[5s] absolute top-[250px] -left-[150px]"
                src="/img/bercak.png"
                :class="{ '-translate-y-full': !$parent.amplop }"
            />
            <!-- Main Frame -->
            <div
                class="absolute h-screen w-screen flex items-center flex-col justify-center"
            >
                <div
                    class="rounded shadow-xl p-4 md:p-8"
                    style="background-color: rgba(240, 240, 240, 0.6)"
                >
                    <div class="bg-gradient-to-r from-dark-yellow to-light-yellow p-2">
                        <div
                            style="background-image: url('/img/bg.png')"
                            class="p-4 md:p-8 border-yellow flex flex-col items-center"
                        >
                            <h1
                                class="mb-4 tracking-[1em] text-xs sm:text-xl md:text-2xl whitespace-nowrap focus-in-contract"
                            >
                                The Wedding of
                            </h1>
                            <p
                                class="text-5xl sm:text-6xl md:text-7xl font-kaushan flex flex-col items-center focus-in-contract"
                            >
                                <span>Fernanda</span>
                                <span>&</span>
                                <span>Silvara</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bungan bawah kiri -->
            <img
                class="transition max-h-[400px] duration-[5s] absolute bottom-[100px] -left-[150px] md:left-[20px] fade-in-bottom"
                src="/img/bunga-1.png"
                style="opacity: 0"
                :style="{
                    transform: !$parent.amplop ? 'translateY(100px)' : '',
                }"
            />
            <!-- Action -->
            <div
                class="duration-[5s] absolute bottom-[200px] w-screen flex flex-col items-center space-y-4"
                :style="{
                    transform: !$parent.amplop ? 'translateY(50px)' : '',
                }"
            >
                <div class="shadow-xl flex w-fit text-md fade-in-bottom-a">
                    <div
                        class="bg-green-gradient text-white p-2"
                        v-if="$parent.user"
                    >
                        Kepada
                    </div>
                    <div
                        style="background-image: url('/img/bg.png')"
                        class="p-2 text-dark-green underline"
                    >
                        <span v-if="$parent.user">
                            {{ $parent.user.nama }}
                        </span>
                        <span v-else> Silakan scan barcode undangan Anda </span>
                    </div>
                </div>
                <div class="relative fade-in-bottom-b">
                    <button
                        class="btn z-0 py-2 pl-4 pr-6"
                        :class="{
                            'vibrate-1': comingSoonVibrate,
                        }"
                        @click="closeAmplop"
                    >
                        {{ textTombol }}
                    </button>
                    <div
                        class="translate-x-1/2 top-1/2 -translate-y-1/2 rounded-full bg-green-gradient absolute right-0 flex items-center justify-center"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8 text-gray-100"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    emits: ["closeAmplop"],
    computed: {
        windowHeight() {
            return window.innerHeight;
        },
    },
    data() {
        return {
            mounted: false,
            textTombol: "Buka Undangan",
            comingSoonVibrate: false,
        };
    },
    methods: {
        closeAmplop() {
            this.$emit("closeAmplop");
            // this.textTombol = "Coming Soon";
            // this.comingSoonVibrate = true;
            // setTimeout(() => {
            //     this.comingSoonVibrate = false;
            // }, 1000);
        },
    },
    mounted() {
        this.mounted = true;
    },
};
</script>

<style>
.fade-in-top {
    -webkit-animation: fade-in-top 2s cubic-bezier(0.39, 0.575, 0.565, 1) both;
    animation: fade-in-top 2s cubic-bezier(0.39, 0.575, 0.565, 1) both;
}
@-webkit-keyframes fade-in-top {
    0% {
        -webkit-transform: translateY(-50px);
        transform: translateY(-50px);
        opacity: 0;
    }
    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
    }
}
@keyframes fade-in-top {
    0% {
        -webkit-transform: translateY(-50px);
        transform: translateY(-50px);
        opacity: 0;
    }
    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
    }
}
.fade-in-bottom {
    -webkit-animation: fade-in-bottom 2s cubic-bezier(0.39, 0.575, 0.565, 1)
        both;
    animation: fade-in-bottom 2s cubic-bezier(0.39, 0.575, 0.565, 1) both;
}
.fade-in-bottom-a {
    -webkit-animation: fade-in-bottom 2s cubic-bezier(0.39, 0.575, 0.565, 1)
        0.3s both;
    animation: fade-in-bottom 2s cubic-bezier(0.39, 0.575, 0.565, 1) 0.3s both;
}
.fade-in-bottom-b {
    -webkit-animation: fade-in-bottom 2s cubic-bezier(0.39, 0.575, 0.565, 1)
        0.6s both;
    animation: fade-in-bottom 2s cubic-bezier(0.39, 0.575, 0.565, 1) 0.6s both;
}
@-webkit-keyframes fade-in-bottom {
    0% {
        -webkit-transform: translateY(50px);
        transform: translateY(50px);
        opacity: 0;
    }
    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
    }
}
@keyframes fade-in-bottom {
    0% {
        -webkit-transform: translateY(50px);
        transform: translateY(50px);
        opacity: 0;
    }
    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
    }
}
.focus-in-contract {
    -webkit-animation: focus-in-contract 3s cubic-bezier(0.25, 0.46, 0.45, 0.94)
        both;
    animation: focus-in-contract 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
}
/* ----------------------------------------------
 * Generated by Animista on 2022-8-22 11:38:52
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info.
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation focus-in-contract
 * ----------------------------------------
 */
@-webkit-keyframes focus-in-contract {
    0% {
        letter-spacing: 1em;
        -webkit-filter: blur(12px);
        filter: blur(12px);
        opacity: 0;
    }
    100% {
        -webkit-filter: blur(0px);
        filter: blur(0px);
        opacity: 1;
    }
}
@keyframes focus-in-contract {
    0% {
        letter-spacing: 1em;
        -webkit-filter: blur(12px);
        filter: blur(12px);
        opacity: 0;
    }
    100% {
        -webkit-filter: blur(0px);
        filter: blur(0px);
        opacity: 1;
    }
}
.vibrate-1 {
    -webkit-animation: vibrate-1 0.5s linear infinite both;
    animation: vibrate-1 0.5s linear infinite both;
}
/* ----------------------------------------------
 * Generated by Animista on 2022-8-22 11:53:28
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info.
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation vibrate-1
 * ----------------------------------------
 */
@-webkit-keyframes vibrate-1 {
    0% {
        -webkit-transform: translate(0);
        transform: translate(0);
    }
    20% {
        -webkit-transform: translate(-2px, 2px);
        transform: translate(-2px, 2px);
    }
    40% {
        -webkit-transform: translate(-2px, -2px);
        transform: translate(-2px, -2px);
    }
    60% {
        -webkit-transform: translate(2px, 2px);
        transform: translate(2px, 2px);
    }
    80% {
        -webkit-transform: translate(2px, -2px);
        transform: translate(2px, -2px);
    }
    100% {
        -webkit-transform: translate(0);
        transform: translate(0);
    }
}
@keyframes vibrate-1 {
    0% {
        -webkit-transform: translate(0);
        transform: translate(0);
    }
    20% {
        -webkit-transform: translate(-2px, 2px);
        transform: translate(-2px, 2px);
    }
    40% {
        -webkit-transform: translate(-2px, -2px);
        transform: translate(-2px, -2px);
    }
    60% {
        -webkit-transform: translate(2px, 2px);
        transform: translate(2px, 2px);
    }
    80% {
        -webkit-transform: translate(2px, -2px);
        transform: translate(2px, -2px);
    }
    100% {
        -webkit-transform: translate(0);
        transform: translate(0);
    }
}
</style>
