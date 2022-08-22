<template>
    <div>
        <div
            class="transition duration-[5s] relative h-screen w-screen overflow-clip"
            :class="[{ '-translate-y-full': !$parent.amplop }]"
        >
            <!-- bg -->
            <div
                class="absolute transition duration-[4s]"
                :style="{
                    transform: !$parent.amplop
                        ? 'translateY(-' + 350 + 'px)'
                        : '',
                }"
            >
                <div
                    style="background-image: url('/img/bg.png')"
                    class="h-screen w-screen"
                ></div>
                <!-- <img src="/img/tes-halaman-1/batas.png" /> -->
            </div>
            <!-- Bunga bg kiri atas -->
            <img
                class="transition -scale-x-100 duration-[3s] absolute top-[-40px] left-[-80px] opacity-20"
                src="/img/bunga-3.png"
                :class="{ '-translate-y-full': !$parent.amplop }"
            />
            <!-- Bunga bg kanan bawah -->
            <img
                class="transition -scale-y-100 duration-[3s] absolute -bottom-[30px] -right-[70px] opacity-20"
                src="/img/bunga-1.png"
                :class="{ '-translate-y-full': !$parent.amplop }"
            />
            <!-- Bunga atas kanan 746 × 682 -->
            <img
                class="transition duration-[4s] h-[300px] absolute -top-[75px] -right-[50px] fade-in-top"
                src="/img/bunga-3.png"
                :class="{
                    '-translate-y-full': !$parent.amplop,
                }"
            />
            <!-- Bercak -->
            <img
                class="transition duration-[4s] absolute top-[250px] -left-[150px]"
                src="/img/bercak.png"
                :class="{ '-translate-y-full': !$parent.amplop }"
            />
            <!-- Title -->
            <div
                class="absolute h-screen w-screen flex items-center flex-col justify-center"
            >
                <div
                    class="rounded shadow-xl"
                    style="background-color: rgba(240, 240, 240, 0.6)"
                >
                    <div
                        style="background-image: url('/img/bg.png')"
                        class="m-4 md:m-8 border-yellow border-4 p-8 sm:p-20 flex flex-col items-center"
                    >
                        <h1
                            class="mb-4 tracking-[1em] text-[0.5em] sm:text-xl md:text-2xl whitespace-nowrap focus-in-contract"
                        >
                            The Wedding of
                        </h1>
                        <p
                            class="text-4xl sm:text-5xl md:text-6xl font-kaushan flex flex-col items-center focus-in-contract"
                        >
                            <span>Fernanda</span>
                            <span>&</span>
                            <span>Silvara</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bungan bawah kiri
            <img
                class="transition scale-[1.5] sm:scale-[0.8] md:scale-[0.8] duration-[3s] absolute -bottom-[100px] sm:bottom-[-250] md:bottom-[-220px] -left-[150px] md:left-[20px] fade-in-bottom"
                src="/img/bunga-1.png"
                :style="{
                    transform: !$parent.amplop
                        ? 'translateY(-' + (windowHeight + 100) + 'px)'
                        : '',
                }"
            /> -->
            <!-- Bungan bawah kiri -->
            <img
                class="transition h-[400px] sm:scale-[0.8] md:scale-[0.8] duration-[3s] absolute -bottom-[75px] sm:bottom-[-250] md:bottom-[-220px] -left-[150px] md:left-[20px] fade-in-bottom"
                src="/img/bunga-1.png"
                :style="{
                    transform: !$parent.amplop
                        ? 'translateY(-' + (windowHeight + 100) + 'px)'
                        : '',
                }"
            />
            <div
                class="duration-[4s] absolute md:bottom-10 bottom-20 w-screen flex flex-col items-center space-y-4"
                :style="{
                    transform: !$parent.amplop
                        ? 'translateY(-' + windowHeight + 'px)'
                        : '',
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
                <div class="relative fade-in-bottom-b" @click="comingSoon">
                    <!-- @click="$emit('closeAmplop')" -->
                    <!-- <p class="-bold text-gray-100 text-xs pr-8">Cooming Soon</p> -->
                    <button
                        class="btn z-0 py-2 pl-4 pr-6"
                        :class="{
                            'vibrate-1': comingSoonVibrate,
                        }"
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
        comingSoon() {
            this.textTombol = "Coming Soon";
            this.comingSoonVibrate = true;
            setTimeout(() => {
                this.comingSoonVibrate = false;
            }, 1000);
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
