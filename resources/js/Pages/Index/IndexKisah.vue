<template>
    <div class="group-index-content">
        <div class="isi py-20">
            <h1 class="judul">Kisah Perjalanan</h1>
            <div class="flex flex-col space-y-4 pb-48">
                <IndexContentKisah
                    judul="Kenangan Pertama"
                    type="kiri"
                    kisah="Tiga tahun berkuliah di kampus yang sama bukan berarti Fernanda dan Silvara pernah saling mengenal. Pun di saat bekerja di kantor yang sama, mereka belum saling mengerti satu sama lain. Hingga suatu sore, untuk pertama kalinya Fernanda melihat Silvara di saat mereka menghadiri acara buka bersama. Pertemuan pertama itu membuat Fernanda jatuh hati di pandangan pertama namun ia belum mempunyai kesempatan untuk mendekati Silvara."
                />
                <IndexContentKisah
                    judul="Kisahpun Dimulai"
                    type="kanan"
                    kisah="Siang itu, tanggal 4 Juni 2022 Tuhan mempertemukan mereka kembali. Kala itu di sebuah kafe kecil, Fernanda bersama temannya berkumpul sembari mengerjakan tugas di laptop masing-masing. Mendengar hal itu, dengan rasa penasaran yang tinggi mengenai Fernanda, Silvara datang menuju kafe itu. Singkat cerita mereka saling bertukar cerita."
                />
                <IndexContentKisah
                    judul="Ketidaksengajaan"
                    type="kiri"
                    kisah="Suatu malam, tanpa sadar Fernanda membagikan sebuah link artikel ke grup whatsapp yang beranggotakan mereka berdua. Melihat ada pesan tak jelas masuk di grup, Silvara merasa ada kejanggalan dengan link tersebut. Ia pun segera menghubungi Fernanda secara pribadi. Tidak disangka, ternyata ketidaksengajaan tersebut membuat mereka sering berkomunikasi satu sama lain."
                />
                <IndexContentKisah
                    judul="Keseriusan"
                    type="kanan"
                    kisah="Merasa pintu perkenalannya sudah terbuka, Fernanda dengan percaya dirinya yang tinggi mengajak Silvara jalan berdua. Bukan ke tempat wisata maupun nongkrong ke ke kafe namun hanya sekedar membeli oleh-oleh untuk dibawa pulang kampung. Setelah pertemuan itu Fernanda menyatakan perasaannya yang sudah ia pendam sejak awal pandangan pertamanya. Di sisi lain, ternyata Silvara juga sedikit menaruh hati kepada Fernanda sejak pertemuan di kafe siang itu."
                />
                <IndexContentKisah
                    judul="Kepastian"
                    type="kiri"
                    kisah="Tepat di pagi hari, Sabtu, 3 September 2022, di hadapan ayah Silvara, saksi, dan para tamu undangan, Fernanda melangsungkan akad nikah di rumah orang tua Silvara di Banyuwangi."
                />
            </div>
        </div>

        <!-- Garis pada next session -->
        <div
            class="bg-green h-8 md:h-16 w-[500px] shadow-lg -rotate-45 absolute bottom-[-200px] left-[-200px] md:left-[-100px]"
        ></div>
        <!-- daun 1 atas kanan pada next session-->
        <img
            class="gambar bottom-[-400px] right-[-100px] h-[500px] scale-x-[-1] scale-y-[-1]"
            src="/img/daun-1.png"
        />
        <img
            class="gambar bottom-[-500px] right-[-100px] h-[500px] scale-x-[-1.5] scale-y-[-1.5] opacity-20 hidden md:block"
            src="/img/daun-1.png"
        />
        <!-- Batas -->
        <div
            style="
                background-image: url('/img/batas-2.png');
                height: 150px;
                width: 100vw;
            "
            class="absolute bottom-[-100px]"
        ></div>
        <!-- bunga bawah -->
        <!-- kiri : hidden jika < md -->
        <img
            class="absolute bottom-[-50px] left-[-75px] h-[500px] z-0 hidden md:block"
            src="/img/daun-1.png"
        />
        <!-- kanan  -->
        <img
            class="absolute bottom-[-50px] scale-x-[-1] right-[-75px] h-[500px] z-0"
            src="/img/daun-1.png"
        />
        <!-- bg bunga -->
        <img
            class="absolute bottom-[-50px] left-[25px] w-[1000px] z-0 opacity-25"
            src="/img/bunga-1.png"
        />
    </div>
</template>

<script>
import IndexContentKisah from "./IndexContentKisah.vue";
export default {
    components: { IndexContentKisah },
};
</script>

<style></style>
