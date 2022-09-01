<template>
    <div class="group-index-content">
        <!-- Batas -->
        <div
            style="
                background-image: url('/img/batas-2.png');
                height: 150px;
                width: 100vw;
            "
            class="absolute top-[-100px] rotate-180"
        ></div>
        <div class="isi py-20">
            <h1 class="judul">Galeri</h1>
            <div class="flex items-center justify-center">
                <svg
                    @click="changeFoto(false)"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-12 w-12 sm:h-20 sm:w-20 hover:scale-125 hover:cursor-pointer transition"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                >
                    <path
                        fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                    />
                </svg>
                <img
                    :src="fotosHD[fotoActive]"
                    class="rounded-xl shadow-xl max-w-[15rem] md:max-w-sm"
                />
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-12 w-12 sm:h-20 sm:w-20 hover:scale-125 hover:cursor-pointer transition"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    @click="changeFoto(true)"
                >
                    <path
                        fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                    />
                </svg>
            </div>
            <div class="mt-20 flex space-x-4 items-center">
                <img
                    class="rounded-xl w-28 overflow-hidden hover:cursor-pointer"
                    v-for="(foto, i) in fotoSD"
                    :key="i"
                    :src="foto"
                    :class="[fotoActive === i ? 'opacity-100' : 'opacity-75']"
                    @click="chooseFoto(i)"
                />
            </div>
        </div>
        <!-- 744 x 835 -->
        <img
            class="gambar top-[-100px] left-[-100px] w-[400px] sm:w-[500px] md:w-[750px]"
            src="/img/bunga-1.png"
        />
        <img
            class="gambar bottom-[-350px] left-[-150px] rotate-45"
            src="/img/bunga-1.png"
        />
    </div>
</template>

<script>
export default {
    data() {
        return {
            fotosHD: [
                "/img/galeri-hd-1.jpg",
                "/img/galeri-hd-2.jpg",
                "/img/galeri-hd-3.jpg",
                "/img/galeri-hd-4.jpg",
            ],
            fotoSD: [
                "/img/galeri-sd-1.jpg",
                "/img/galeri-sd-2.jpg",
                "/img/galeri-sd-3.jpg",
                "/img/galeri-sd-4.jpg",
            ],
            fotoActive: 0,
        };
    },
    methods: {
        changeFoto(isNext) {
            if (this.fotoActive === 3 && isNext) {
                this.fotoActive = 0;
            } else if (this.fotoActive === 0 && !isNext) {
                this.fotoActive = 3;
            } else {
                if (isNext) {
                    this.fotoActive++;
                } else {
                    this.fotoActive--;
                }
            }
            console.log(this.fotoActive);
        },
        chooseFoto(value) {
            this.fotoActive = value;
        },
    },
};
</script>

<style></style>
