<template>
    <div class="group-index-content">
        <div class="isi py-20">
            <div
                class="rounded shadow-xl p-4 md:p-8"
                style="background-color: rgba(240, 240, 240, 0.6)"
            >
                <div
                    style="background-image: url('/img/bg.png')"
                    class="border-yellow border-4 p-4 sm:p-20 flex flex-col items-center justify-center space-y-2"
                >
                    <h1 class="judul">Pesan dan Harapan</h1>
                    <template v-if="$parent.$parent.user">
                        <template v-if="editMode">
                            <textarea
                                style="
                                    background-color: rgba(240, 240, 240, 0.6);
                                "
                                class="shadow-lg rounded-lg p-2 w-full focus:border outline-none focus:border-dark-green"
                                v-model="pesan"
                            ></textarea>
                            <button class="btn btn-sm" @click="kirim">
                                Kirim
                            </button>
                        </template>
                        <button v-else class="btn" @click="editMode = true">
                            Edit Komentar
                        </button>
                        <!-- <p>{{ $parent.$parent.user.nama }}</p> -->
                    </template>
                    <div class="flex flex-col items-start space-y-2">
                        <template v-if="pesans.length">
                            <template
                                v-for="(pesan, i) in pesans[
                                    halamanPesanAktif - 1
                                ]"
                                :key="i"
                            >
                                <div class="flex items-start">
                                    <svg
                                        clip-rule="evenodd"
                                        class="w-5 shrink-0"
                                        fill-rule="evenodd"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="2"
                                        viewBox="0 0 64 64"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                    >
                                        <linearGradient
                                            id="_Linear1"
                                            gradientTransform="matrix(64 64 -64 64 0 0)"
                                            gradientUnits="userSpaceOnUse"
                                            x1="0"
                                            x2="1"
                                            y1="0"
                                            y2="0"
                                        >
                                            <stop
                                                offset="0"
                                                stop-color="#13603B"
                                            />
                                            <stop
                                                offset="1"
                                                stop-color="#A2C122"
                                            />
                                        </linearGradient>
                                        <g id="Solid-Gradient">
                                            <path
                                                d="m32 29c-11.643 0-21.096 9.453-21.096 21.096 0 2.785 1.823 5.163 5.053 6.835 3.892 2.013 9.963 3.069 16.043 3.069s12.151-1.056 16.043-3.069c3.23-1.672 5.053-4.05 5.053-6.835 0-11.643-9.453-21.096-21.096-21.096zm0-26c-6.623 0-12 5.377-12 12s5.377 12 12 12 12-5.377 12-12-5.377-12-12-12z"
                                                fill="url(#_Linear1)"
                                            />
                                        </g>
                                    </svg>
                                    <div class="text-start">
                                        <h2
                                            class="font-comforta-bold text-lg capitalize"
                                        >
                                            {{
                                                pesan.undangan.nama.toLowerCase()
                                            }}
                                        </h2>
                                        <p
                                            class="text-light-green flex items-center"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                    clip-rule="evenodd"
                                                />
                                            </svg>
                                            1 bulan yang lalu
                                        </p>
                                        <p class="text-sm">
                                            {{ pesan.isi }}
                                        </p>
                                    </div>
                                </div>
                            </template>
                        </template>
                    </div>
                    <div class="flex rounded-lg overflow-scroll w-48">
                        <button
                            class="p-2 hover:bg-green-gradient hover:text-lime-200 hover:border-none"
                            :class="[
                                // 'btn rounded-none': n === halamanPesanAktif,
                                n === halamanPesanAktif
                                    ? 'btn rounded-none border-none'
                                    : 'border-y',
                            ]"
                            v-for="n in jumlahHalamanPesan"
                            :key="n"
                            @click="ubahHalaman(n)"
                        >
                            {{ n }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";

export default {
    data() {
        return {
            pesan: "",
            pesans: [],
            halamanPesanAktif: 1,
            editMode: true,
        };
    },
    methods: {
        kirim() {
            if (!this.pesan) return;
            Inertia.post(
                "/api/pesan",
                {
                    isi: this.pesan,
                    id: this.$parent.$parent.user.id,
                    param: this.$parent.$parent.user.url,
                },
                {
                    onSuccess: () => {
                        alert("berhasil mengirim pesan");
                        this.getPesan();
                        this.editMode = false;
                    },
                    onError: (err) => {
                        console.log(err);
                    },
                }
            );
        },
        ubahHalaman(value) {
            this.halamanPesanAktif = value;
        },
        async getPesan() {
            this.pesans = [];
            let res = await fetch("/api/pesan");
            res = await res.json();
            let pesans = [];
            if (this.$parent.$parent.user) {
                const pesanUser = res.find((p) => {
                    return p.undangan_id === this.$parent.$parent.user.id;
                });
                if (pesanUser) {
                    console.log("punya pesan");
                    pesans = res.filter((p) => {
                        return p.undangan_id !== this.$parent.$parent.user.id;
                    });
                    pesans.unshift(pesanUser);
                    this.pesan = pesanUser.isi;
                } else {
                    pesans = res;
                }
                // this.pesan = this.pesans[0];
            } else {
                pesans = res;
            }
            while (pesans.length) {
                this.pesans.push(pesans.splice(0, 5));
            }
        },
    },
    async mounted() {
        await this.getPesan();
        if (this.pesan) {
            this.editMode = false;
        }
    },
    computed: {
        jumlahHalamanPesan() {
            return this.pesans.length;
        },
    },
};
</script>

<style></style>
