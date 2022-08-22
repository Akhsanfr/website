<template>
    <!-- style="background-image: url('/img/bg.png')" -->
    <div class="overflow-clip" ref="bg">
        <!-- class="w-screen overflow-x-hidden" -->
        <!-- class="h-fit" -->
        <!-- :style="{ height: bg + 'px' }" -->
        <!-- <div class="group-index-content">
            <img
                class="absolute top-[-150px] left-[-150px]"
                src="/img/amplop-bunga-bawah-kiri.png"
            />
        </div> -->
        <IndexMempelai />
        <div class="group-index-content">
            <div class="isi py-20">
                <h1 class="judul">Kisah Perjalanan Kami</h1>
                <div class="flex flex-col space-y-4">
                    <IndexContentKisah
                        type="kiri"
                        kisah="Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam excepturi ut repellat aliquid accusantium voluptatum minima deserunt quasi neque tenetur."
                    />
                    <IndexContentKisah
                        type="kanan"
                        kisah="Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam excepturi ut repellat aliquid accusantium voluptatum minima deserunt quasi neque tenetur."
                    />
                    <IndexContentKisah
                        type="kiri"
                        kisah="Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam excepturi ut repellat aliquid accusantium voluptatum minima deserunt quasi neque tenetur."
                    />
                </div>
            </div>
            <!-- 500 x 700 -->
            <img
                class="absolute bottom-[-50px] left-[-150px] h-[500px] z-0 opacity-25"
                src="/img/bunga-2.png"
            />
        </div>
        <div class="group-index-content bg-green-gradient">
            <div class="isi text-yellow text-xs py-20">
                <h1 class="judul text-yellow-gradient">Acara Pernikahan</h1>
                <p class="judul text-yellow-gradient">﷽</p>
                <p>
                    Kami akan mengadakan acara Lorem ipsum dolor sit amet
                    consectetur, adipisicing elit. Vel, atque!
                </p>
                <div class="seksi-acara">
                    <h2 class="text-yellow-gradient">Akad Nikah</h2>
                    <p>3 September 2022 | XX Safhar 1444 H</p>
                    <p>
                        Jalan XX Penganjuran, Kecamatan Banyuwangi, Banyuwangi
                    </p>
                </div>
                <div class="seksi-acara">
                    <h2 class="text-yellow-gradient">Ngunduh Mantu</h2>
                    <p>11 September 2022 | XX Safhar 1444 H</p>
                    <p>Jalan XX Penganjuran, Kota Malang</p>
                </div>
            </div>
            <!-- 614 x 922 -->
            <img
                class="gambar bottom-[-170px] left-[-120px] h-[300px] scale-x-[-1]"
                src="/img/bunga-1.png"
            />
        </div>
        <IndexGalery />
        <IndexHadiah />
        <IndexReservasi />
        <IndexKomentar />
        <IndexEnd />
        <div
            class="group-index-content h-20 text-light-yellow bg-dark-green flex justify-center items-center"
        >
            <p>Develop with 🤍 by Mempelai Pria</p>
        </div>
    </div>
</template>

<script>
import IndexContentKisah from "./IndexContentKisah.vue";
import IndexGalery from "./IndexGalery.vue";
import IndexHadiah from "./IndexHadiah.vue";
import IndexReservasi from "./IndexKonfirmasi.vue";
import IndexEnd from "./IndexEnd.vue";
import IndexKomentar from "./IndexKomentar.vue";
import IndexMempelai from "./IndexMempelai.vue";
export default {
    data() {
        return {
            // height: 0,
        };
    },
    mounted() {
        // this.height = this.$refs.bg.clientHeight;
        // console.log(this.$refs.bg.clientHeight);
        // this.$emit.setHeight(this.$refs.bg.clientHeight);
    },
    components: {
        IndexContentKisah,
        IndexGalery,
        IndexHadiah,
        IndexReservasi,
        IndexEnd,
        IndexKomentar,
        IndexMempelai,
    },
};
</script>
