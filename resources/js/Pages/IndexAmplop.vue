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
                <img src="/img/tes-halaman-1/batas.png" />
            </div>
            <!-- Bunga bg kiri atas -->
            <img
                class="transition -scale-x-100 duration-[3s] absolute top-[-40px] left-[-80px] opacity-20"
                src="/img/amplop-bunga-atas-kanan.png"
                :class="{ '-translate-y-full': !$parent.amplop }"
            />
            <!-- Bunga bg kanan bawah -->
            <img
                class="transition -scale-y-100 duration-[3s] absolute -bottom-[30px] -right-[70px] opacity-20"
                src="/img/amplop-bunga-atas-kanan.png"
                :class="{ '-translate-y-full': !$parent.amplop }"
            />
            <!-- Bunga atas kanan -->
            <img
                class="transition duration-[4s] absolute -top-[50px] -right-[50px]"
                src="/img/amplop-bunga-atas-kanan.png"
                :class="{ '-translate-y-full': !$parent.amplop }"
            />
            <!-- Title -->
            <div
                class="absolute h-screen w-screen flex items-center flex-col justify-center"
            >
                <div class="rounded shadow-xl">
                    <div
                        style="background-image: url('/img/bg.png')"
                        class="m-8 border-yellow border-4 p-4 sm:p-20 flex flex-col items-center"
                    >
                        <h1
                            class="mb-8 font-comforta tracking-[1em] text-[0.5em] sm:text-xl md:text-2xl whitespace-nowrap"
                        >
                            Menuju Halal
                        </h1>
                        <p
                            class="text-3xl sm:text-5xl md:text-6xl font-kaushan flex flex-col items-center"
                        >
                            <span>Fernanda</span>
                            <span>&</span>
                            <span>Silvara</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bungan bawah kiri -->
            <img
                class="transition scale-[1.5] sm:scale-[0.8] md:scale-[0.8] duration-[3s] absolute -bottom-[100px] sm:bottom-[-250] md:bottom-[-220px] -left-[150px] md:left-[20px]"
                src="/img/amplop-bunga-bawah-kiri.png"
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
                <div class="shadow-xl flex w-fit text-md">
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
                <div
                    class="relative bg-green-gradient p-2 rounded-l cursor-pointer"
                    @click="$emit('closeAmplop')"
                >
                    <p class="font-comforta-bold text-gray-100 text-xs pr-8">
                        Cooming Soon
                    </p>
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
};
</script>

<style></style>
