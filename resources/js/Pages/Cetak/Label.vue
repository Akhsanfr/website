<template>
    <!-- <div
        v-for="page in jumlahHalaman"
        :key="page"
        class="w-[165mm] h-[210mm] text-dark-green font-comforta-bold font-bold px-[8mm] py-[3mm] grid grid-cols-2 gap-x-[9mm] gap-y-[7mm]"
    > -->
    <div
        v-for="(page, index) in undangansEdited"
        :key="index"
        class="w-[165mm] h-[210mm] text-dark-green font-comforta-bold font-bold px-[8mm] py-[3mm] grid grid-cols-2 gap-x-[9mm] gap-y-[7mm] content-start"
    >
        <div
            v-for="n in skip"
            :key="n"
            class="w-[70mm] h-[35mm] p-[10mm] rounded-xl flex flex-col items-center"
        ></div>
        <div
            v-for="(p, index) in page"
            :key="index"
            class="w-[70mm] h-[35mm] p-[10mm] rounded-xl flex flex-col items-center"
        >
            <p class="text-center uppercase">
                {{ p.nama }}
                <!-- {{ undangans[(page - 1) * 10 + u - 1].nama }} -->
            </p>
            <div class="h-[0.5mm] w-[50mm] bg-dark-green"></div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["undangans", "skip"],
    computed: {
        jumlahHalaman() {
            return Math.floor(this.undangans.length / 10);
        },
        undangansEdited() {
            let undangans = [];
            while (this.undangans.length > 0) {
                undangans.push(this.undangans.splice(0, 10));
            }
            return undangans;
        },
    },
};
</script>

<style></style>
