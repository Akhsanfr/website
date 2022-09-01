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
        <div style="background-image: url('/img/bg.png')">
            <IndexMempelai />
            <IndexKisah />
        </div>
        <IndexAcara />
        <div class="relative" style="background-image: url('/img/bg.png')">
            <IndexGalery />
            <IndexAlbum />
            <IndexHadiah />
            <IndexReservasi />
            <IndexKomentar />
            <IndexEnd />
        </div>
        <div
            class="p-2 text-light-yellow bg-dark-green flex flex-col justify-center items-center"
        >
            <p>Dibuat dengan penuh 🤍 oleh kedua mempelai</p>
            <div class="flex items-center space-x-1">
                <svg
                    version="1.1"
                    id="Capa_1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px"
                    y="0px"
                    class="h-3 w-3 text-yellow"
                    viewBox="0 0 367.467 367.467"
                    xml:space="preserve"
                    fill="currentColor"
                >
                    <g>
                        <path
                            d="M183.73,0.018C82.427,0.018,0,82.404,0,183.733c0,101.289,82.427,183.716,183.73,183.716
		c101.315,0,183.737-82.427,183.737-183.716C367.467,82.404,285.045,0.018,183.73,0.018z M183.73,326.518
		c-78.743,0-142.798-64.052-142.798-142.784c0-78.766,64.055-142.817,142.798-142.817c78.752,0,142.807,64.052,142.807,142.817
		C326.536,262.466,262.481,326.518,183.73,326.518z"
                        />
                        <path
                            d="M244.036,217.014c-11.737,20.141-33.562,32.635-56.956,32.635c-36.329,0-65.921-29.585-65.921-65.915
		c0-36.36,29.592-65.955,65.921-65.955c23.395,0,45.219,12.54,56.956,32.641l1.517,2.627h44.28l-2.658-7.129
		c-7.705-20.413-21.225-37.769-39.122-50.157c-17.942-12.42-39.017-19.009-60.973-19.009c-58.981,0-106.946,48.006-106.946,106.982
		c0,58.98,47.965,106.941,106.946,106.941c21.956,0,43.03-6.567,60.973-19.006c17.897-12.391,31.417-29.741,39.122-50.154
		l2.658-7.133h-44.28L244.036,217.014z"
                        />
                    </g>
                </svg>
                <span>2022</span>
            </div>
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
import IndexKisah from "./IndexKisah.vue";
import IndexAcara from "./IndexAcara.vue";
import IndexAlbum from "./IndexAlbum.vue";
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
        IndexKisah,
        IndexAcara,
        IndexAlbum,
    },
};
</script>
