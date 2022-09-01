<template>
    <div class="group-index-content">
        <div class="isi">
            <h1
                class="judul text-center flex flex-col"
                style="text-shadow: -1px 1px 2px #041f00"
            >
                <span> Pasangan </span>
                <span class="ml-8"> Mempelai </span>
            </h1>
            <div
                class="flex flex-col md:flex-row space-x-0 md:space-x-16 space-y-8 md:space-y-0"
            >
                <div class="flex flex-col items-center">
                    <div class="h-[300px] w-[300px] relative">
                        <img
                            src="/img/frame-bunga.png"
                            class="absolute top-0 left-0 fade-in-rotate"
                        />
                        <img
                            src="/img/frame-lingkaran.png"
                            class="absolute top-0 left-0"
                        />
                        <img
                            src="/img/frame-mempelai-pria.png"
                            class="absolute top-0 left-0 scale-x-[-1]"
                        />
                    </div>
                    <div>
                        <p class="underline font-kaushan text-2xl">
                            Fernanda Akhsanuddin Almas
                        </p>
                        <p class="text-xs">
                            Putra Bapak Parnoto dan Ibu Mus Mariati
                        </p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="h-[300px] w-[300px] relative">
                        <img
                            src="/img/frame-bunga.png"
                            class="absolute top-0 left-0 fade-in-rotate"
                        />
                        <img
                            src="/img/frame-lingkaran.png"
                            class="absolute top-0 left-0"
                        />
                        <img
                            src="/img/frame-mempelai-wanita.png"
                            class="absolute top-0 left-0"
                        />
                    </div>
                    <p class="underline font-kaushan text-2xl">
                        Silvara Putri Rahma Agustyn
                    </p>
                    <p class="text-xs">
                        Putri Bapak Djatmiko Iwan Susanto dan Ibu Sulis Fitri
                        Asang
                    </p>
                </div>
            </div>
        </div>
        <!-- bunga 1 kiri atas -->
        <img
            class="absolute top-[-50px] left-[-100px] h-[300px] opacity-75"
            src="/img/bunga-1.png"
        />
        <!-- bunga 2 bayangan bawah kanan -->
        <img
            class="absolute bottom-[-100px] right-[-100px] h-[500px] rotate-90 opacity-25"
            src="/img/bunga-2.png"
        />
        <!-- bunga 3 bawah kanan-->
        <img
            class="absolute bottom-[-250px] right-[-200px] h-[500px]"
            src="/img/bunga-3.png"
        />
        <!--  -->
        <img
            class="absolute top-[-250px] right-[-200px] h-[500px] hidden sm:block"
            src="/img/bunga-2.png"
        />
    </div>
</template>

<script>
export default {};
</script>
