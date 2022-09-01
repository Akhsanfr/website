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
                    <!-- USER BELUM LOGIN -->
                    <template v-if="!$parent.$parent.user">
                        <p>
                            Silakan scan barcode undangan Anda terlebih dahulu
                        </p>
                    </template>
                    <!-- USER BELUM KONFIRMASI -->
                    <template v-else-if="editMode">
                        <p>
                            Tanpa mengurangi rasa hormat, kami bermaksud
                            mengundang Bapak/Ibu/Saudara(i) untuk menghadiri
                            acara
                            <strong
                                class="decoration-green underline decoration-2"
                            >
                                {{
                                    $parent.$parent.user.hadir_ke === "bwi"
                                        ? "Akad Nikah"
                                        : "Ngunduh Mantu"
                                }}
                            </strong>
                            yang akan dilaksanakan pada
                            <strong
                                class="decoration-green underline decoration-2"
                            >
                                {{
                                    $parent.$parent.user.hadir_ke === "bwi"
                                        ? "3 September 2022"
                                        : "11 September 2022"
                                }}
                            </strong>
                            jam
                            <strong
                                class="decoration-green underline decoration-2"
                            >
                                {{
                                    $parent.$parent.user.hadir_ke === "bwi"
                                        ? "Akad Nikah"
                                        : this.$parent.$parent.user.jadwal
                                }}
                            </strong>
                        </p>
                        <div>
                            <div class="flex flex-col space-y-2">
                                <div
                                    v-if="diundang_ke !== 'undefined'"
                                    class="radio"
                                    :class="{
                                        'radio-selected': hadir_ke === 'mlg',
                                    }"
                                    @click="setHadirKe('mlg')"
                                >
                                    <div class="checkbox">
                                        <span class="bg"></span>
                                        <span class="centang">
                                            <span></span>
                                        </span>
                                    </div>
                                    <div>Ya, hadir</div>
                                </div>
                                <template v-else>
                                    <div
                                        class="radio"
                                        :class="{
                                            'radio-selected':
                                                hadir_ke === 'bwi',
                                        }"
                                    >
                                        <div class="checkbox">
                                            <span class="bg"></span>
                                            <span class="centang">
                                                <span></span>
                                            </span>
                                        </div>
                                        <div>Ya, hadir di Banyuwangi</div>
                                    </div>
                                    <div
                                        class="radio"
                                        :class="{
                                            'radio-selected':
                                                hadir_ke === 'mlg',
                                        }"
                                    >
                                        <div class="checkbox">
                                            <span class="bg"></span>
                                            <span class="centang">
                                                <span></span>
                                            </span>
                                        </div>
                                        <div>Ya, hadir di Malang</div>
                                    </div>
                                </template>
                                <div
                                    class="radio"
                                    :class="{
                                        'radio-selected': hadir_ke === 'tdk',
                                    }"
                                    @click="setHadirKe('tdk')"
                                >
                                    <div class="checkbox">
                                        <span class="bg"></span>
                                        <span class="centang">
                                            <span></span>
                                        </span>
                                    </div>
                                    <div>Maaf, tidak hadir</div>
                                </div>
                                <button class="btn" @click="submitKonfirmasi">
                                    Konfirmasi
                                </button>
                            </div>
                        </div>
                    </template>
                    <div v-else>
                        <p>
                            Terima kasih atas
                            <span v-if="hadir_ke === 'tdk'">konfirmasinya</span>
                            <strong v-else class="text-dark-green"
                                >konfirmasi kehadirannya</strong
                            >
                        </p>
                        <button class="btn mt-2" @click="edit">
                            Konfirmasi Ulang
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
            // konfirmasi_kehadiran: null,
            diundang_ke: undefined,
            jadwal: undefined,
            editMode: false,
            // check: true,
            hadir_ke: undefined,
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
        konfirmasiJumlah() {
            this.submitKonfirmasi();
            this.editJumlahKehadiran;
        },
        setHadirKe(val) {
            this.hadir_ke = val;
        },
        async submitKonfirmasi() {
            Inertia.post(
                "/api/konfirmasi",
                { hadir_ke: this.hadir_ke, param: this.$parent.$parent.param },
                {
                    onSuccess: () => {
                        alert("Sukses menyimpan data");
                        this.editMode = false;
                    },
                    onError: (error) => {
                        alert(error);
                    },
                }
            );
        },
    },
    mounted() {
        // jika user sudah login
        if (this.$parent.$parent.user) {
            this.diundang_ke = this.$parent.$parent.user.diundang_ke;
            this.hadir_ke = this.$parent.$parent.user.hadir_ke;
            if (this.hadir_ke === "undefined") {
                this.editMode = true;
            }
        }
    },
};
</script>
