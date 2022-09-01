<template>
    <!-- Amplop -->
    <div class="relative h-[200mm] w-[120mm] bg-cyan-200 text-dark-green">
        <!-- Bunga bg kiri atas -->
        <img
            class="scale-x-[-1] scale-y-[1] absolute top-[-50px] left-[-75px] opacity-25"
            src="/img/bunga-2.png"
        />
        <!-- Bunga bg kanan bawah -->
        <img
            class="transition md:scale-x-[2] md:scale-y-[-2] scale-x-[1] scale-y-[-1] duration-[5s] absolute bottom-[75px] -right-[75px] opacity-50"
            src="/img/bunga-2.png"
            :class="{ '-translate-y-full': !$parent.amplop }"
        />
        <!-- Bunga atas kanan 746 × 682 -->
        <img
            class="transition duration-[5s] h-[300px] absolute -top-[75px] -right-[50px] fade-in-top"
            src="/img/bunga-2.png"
            :class="{
                '-translate-y-full': !$parent.amplop,
            }"
        />
        <!-- Bercak -->
        <img
            class="transition scale-[1] md:scale-[2] duration-[5s] absolute top-[250px] -left-[150px]"
            src="/img/bercak.png"
            :class="{ '-translate-y-full': !$parent.amplop }"
        />

        <!-- Bungan bawah kiri -->
        <img
            class="transition max-h-[400px] duration-[5s] absolute bottom-[100px] -left-[150px] md:left-[20px] fade-in-bottom"
            src="/img/bunga-1.png"
            style="opacity: 0"
            :style="{
                transform: !$parent.amplop ? 'translateY(100px)' : '',
            }"
        />
        <!-- main frame -->
        <div
            class="absolute top-0 left-0 h-[200mm] w-[120mm] flex items-center justify-center"
        >
            <div
                class="rounded shadow-xl p-2"
                style="background-color: rgba(240, 240, 240, 0.6)"
            >
                <div
                    class="bg-gradient-to-r from-dark-yellow to-light-yellow p-1"
                >
                    <div
                        style="background-image: url('/img/bg.png')"
                        class="p-4 flex flex-col items-center"
                    >
                        <h1
                            class="mb-4 tracking-[1em] text-xs whitespace-nowrap"
                        >
                            The Wedding of
                        </h1>
                        <p
                            class="text-3xl font-kaushan flex flex-col items-center focus-in-contract"
                        >
                            <span>Fernanda</span>
                            <span>&</span>
                            <span>Silvara</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>
