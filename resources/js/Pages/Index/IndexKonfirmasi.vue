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
                    <template v-if="editMode">
                        <div
                            v-if="hadir === -1"
                            class="flex flex-col justify-center items-center md:flex-row space-y-2 md:space-y-0 space-x-0 md:space-x-2 mt-8"
                        >
                            <p class="my-4">
                                Tanpa mengurangi rasa hormat ... berharap
                                Bapak/Ibu/Saudara(i) memberikan konfirmasi untuk
                                menhadiri acara Ngunduh mantu pada jam XX XX ...
                            </p>
                            <button @click="konfirmasi(1)" class="btn btn-sm">
                                Ya, hadir
                            </button>
                            <button @click="konfirmasi(0)" class="btn btn-sm">
                                Maaf, tidak hadir
                            </button>
                        </div>
                        <template v-else>
                            <p>Terima kasih atas bla-bla-bla</p>
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
                            <p>Orang yang akan menghadiri acara</p>
                            <button
                                @click="submitKonfirmasi"
                                class="btn btn-sm"
                            >
                                Konfirmasi kehadiran
                            </button>
                        </template>
                    </template>
                    <div v-else>
                        Terima kasih atas konfirmasi
                        <strong class="text-dark-green">kehadiran</strong>
                        saudara sebanyak 5 orang
                    </div>
                </div>
            </div>
        </div>
        <!-- 744 x 835 -->
        <img
            class="gambar top-[-100px] right-[-100px] h-[500px] rotate-180 scale-x-[-1]"
            src="/img/bunga-1.png"
        />
    </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";

export default {
    data() {
        return {
            hadir: this.$parent.$parent.user.hadir,
            editMode: this.$parent.$parent.user.hadir === -1 ? true : false,
        };
    },
    methods: {
        konfirmasi(value) {
            this.hadir = value;
            if (value === 1) return;
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
                        alert("sukses");
                    },
                    onError: (error) => {
                        alert(error);
                    },
                }
            );
        },
    },
};
</script>

<style></style>
