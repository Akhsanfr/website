<template>
    <div class="group-index-content">
        <div class="isi py-20">
            <!-- <div class="flex w-full">
                <div class="w-8 flex flex-col">
                    <template v-for="n in 10" :key="n">
                        <div class="h-2 bg-yellow"></div>
                        <div class="h-2 flex justify-between">
                            <div class="w-2 bg-yellow"></div>
                            <div class="w-2 bg-yellow"></div>
                        </div>
                        <div class="h-2 bg-yellow"></div>
                    </template>
                </div>
                <div class="grow bg-yellow-gradient p-8">
                    <h1 class="judul">Reservasi Kehadiran</h1>
                    <div>
                        <button
                            class="bg-green-gradient p-2 rounded text-lime-200"
                        >
                            Ya, hadir
                        </button>
                        <button>Maaf, tidak hadir</button>
                    </div>
                </div>
                <div class="w-8 flex flex-col">
                    <template v-for="n in 10" :key="n">
                        <div class="h-2 bg-yellow"></div>
                        <div class="h-2 flex justify-between">
                            <div class="w-2 bg-yellow"></div>
                            <div class="w-2 bg-yellow"></div>
                        </div>
                        <div class="h-2 bg-yellow"></div>
                    </template>
                </div>
            </div> -->
            <div
                class="rounded shadow-xl p-4 md:p-8"
                style="background-color: rgba(240, 240, 240, 0.6)"
            >
                <div
                    style="background-image: url('/img/bg.png')"
                    class="border-yellow border-4 p-4 sm:p-20 flex flex-col items-center"
                >
                    <h1 class="judul">Konfirmasi Kehadiran</h1>
                    <template v-if="!$parent.$parent.user">
                        <p>
                            Silakan scan barcode undangan Anda terlebih dahulu
                        </p>
                    </template>
                    <template v-else-if="editMode">
                        <div v-if="hadir === -1">
                            <p class="my-4 text-sm">
                                Tanpa mengurangi rasa hormat kami bermaksud
                                mengundang Bapak/Ibu/Saudara(i) untuk menghadiri
                                acara
                                <strong
                                    class="decoration-green underline decoration-2"
                                    >Ngunduh mantu</strong
                                >
                                yang akan dilaksanakan pada
                                <strong
                                    class="decoration-green underline decoration-2"
                                >
                                    Sabtu, 03 September 2022</strong
                                >
                                pada jam
                                <strong
                                    class="decoration-green underline decoration-2"
                                >
                                    10:00 - 11:00 WIB</strong
                                >
                            </p>
                            <div
                                class="flex flex-col justify-center items-center md:flex-row space-y-2 md:space-y-0 space-x-0 md:space-x-2 mt-8"
                            >
                                <button
                                    @click="konfirmasi(1)"
                                    class="btn btn-sm"
                                >
                                    Ya, hadir
                                </button>
                                <button
                                    @click="konfirmasi(0)"
                                    class="btn btn-sm"
                                >
                                    Maaf, tidak hadir
                                </button>
                            </div>
                        </div>
                        <template v-else>
                            <p>
                                Terima kasih atas rencana kehadiran
                                Bapak/Ibu/Saudara/i sebanyak
                            </p>
                            <div
                                class="flex items-center space-x-2 justify-center"
                            >
                                <button
                                    class="btn btn-sm"
                                    @click="ubahJumlahKehadiran(-1)"
                                >
                                    -
                                </button>
                                <input
                                    class="rounded-lg border-2 w-16 border-green text-2xl text-center"
                                    v-model="hadir"
                                />
                                <button
                                    class="btn btn-sm"
                                    @click="ubahJumlahKehadiran(1)"
                                >
                                    +
                                </button>
                            </div>
                            <p>orang yang akan menghadiri acara</p>
                            <button
                                @click="submitKonfirmasi"
                                class="btn btn-sm"
                            >
                                Konfirmasi kehadiran
                            </button>
                        </template>
                    </template>
                    <div v-else>
                        <p>
                            Terima kasih atas konfirmasi
                            <strong class="text-dark-green">kehadiran</strong>
                            saudara sebanyak {{ hadir }} orang
                        </p>
                        <button class="btn" @click="edit">
                            Ubah Jumlah Kehadiran
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- 744 x 835 -->
        <img
            class="gambar top-[-100px] right-[-100px] h-[500px] rotate-180 scale-x-[-1]"
            src="/img/bunga-1.png"
        />
        <!-- gradient ijo -->
        <svg viewBox="0 0 500 500" fill="none" class="gambar">
            <defs>
                <linearGradient id="grad1" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop
                        offset="0%"
                        style="stop-color: #5b912f; stop-opacity: 1"
                    />
                    <stop
                        offset="100%"
                        style="stop-color: rgb(255, 255, 255); stop-opacity: 0"
                    />
                </linearGradient>
            </defs>
            <path
                fill="url(#grad1)"
                d="M0.012,164.716C0.012,164.716 116.907,108.433 249.469,165.229C382.421,222.193 500.392,165.745 500.392,165.745L501.102,498.991L-0.11,499.209L0.012,164.716Z"
            />
        </svg>
        <!-- bunga bawah -->
        <img
            class="gambar bottom-[-500px] right-0 h-[1000px]"
            src="/img/bunga-3.png"
        />
    </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";

export default {
    data() {
        return {
            hadir: this.$parent.$parent.user && this.$parent.$parent.user.hadir,
            editMode:
                this.$parent.$parent.user &&
                this.$parent.$parent.user.hadir === -1
                    ? true
                    : false,
        };
    },
    methods: {
        edit() {
            this.editMode = true;
        },
        konfirmasi(value) {
            this.hadir = value;
            // if (value === 1) return;
            this.submitKonfirmasi();
        },
        ubahJumlahKehadiran(value) {
            if (value === -1 && this.hadir === 1) return;
            this.hadir += value;
        },
        async submitKonfirmasi() {
            Inertia.post(
                "/api/konfirmasi",
                { hadir: this.hadir, param: this.$parent.$parent.param },
                {
                    onSuccess: () => {
                        alert("Sukses menyimpan data");
                    },
                    onError: (error) => {
                        alert(error);
                    },
                }
            );
            this.editMode = false;
        },
    },
};
</script>

<style></style>
