<template>
    <div
        class="relative w-[4.25in] h-[6.5in] shrink-0"
        style="background-color: rgba(0, 0, 0, 0)"
    >
        <div
            class="absolute w-[108mm] h-[80mm] top-[18mm] flex flex-col items-center justify-center"
        >
            <Qrcode
                class="scale-[0.16]"
                :height="1000"
                :width="1000"
                :data="'https://fernanda-silvara.id/' + url"
                image="/img/logo.png"
            />
        </div>
        <div class="absolute w-[108mm] top-[80mm]">
            <p class="text-center text-xs text-dark-green font-comforta">
                fernanda-silvara.id/{{ url }}
            </p>
        </div>
        <!-- <Qrcode
            :height="1000"
            :width="1000"
            image="/img/logo.png"
            data="https://fernanda-silvara.id/pupus-101"
        /> -->
        <img class="absolute w-[108mm]" src="/img/qr.png" />
    </div>
</template>

<script>
import Qrcode from "../../Components/Qrcode.vue";
export default {
    props: ["url"],
    components: { Qrcode },
};
</script>
