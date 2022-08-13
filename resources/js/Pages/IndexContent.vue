<template>
    <div style="background-image: url('/bg.png')">
        <div class="relative">
            <img
                class="absolute top-[-150px]"
                src="/img/amplop-bunga-bawah-kiri.png"
            />
        </div>
        <div class="relative">
            <h1 class="absolute text-3xl font-kaushan text-center mt-8">
                Pasangan Mempelai
            </h1>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            bg: "",
        };
    },
    async mounted() {
        let res = await fetch("/api/bg");
        res = await res.json();
        console.log(res.bg);
    },
};
</script>
