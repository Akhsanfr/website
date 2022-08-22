<template>
    <div
        v-for="page in jumlahHalaman"
        :key="page"
        class="w-[165mm] h-[210mm] text-dark-green font-comforta-bold font-bold px-[8mm] py-[3mm] grid grid-cols-2 gap-x-[9mm] gap-y-[7mm]"
    >
        <div
            v-for="u in 10"
            :key="u"
            class="w-[70mm] h-[35mm] p-[10mm] rounded-xl flex flex-col items-center justify-center"
        >
            <p class="text-center uppercase">
                {{ undangans[(page - 1) * 10 + u - 1].nama }}
            </p>
            <div class="h-[0.5mm] w-[50mm] bg-dark-green"></div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["undangans"],
    computed: {
        jumlahHalaman() {
            return Math.floor(this.undangans.length / 10);
        },
    },
};
</script>

<style></style>
