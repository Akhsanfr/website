<template>
    <div class="bg-cyan-300">
        <Qrcode
            :height="1000"
            :width="1000"
            image="/img/g.png"
            data="https://goo.gl/maps/T4Z6YbxakwB6Ncfm7"
        />
    </div>
</template>

<script>
import Qrcode from "./../Components/Qrcode.vue";
export default {
    components: { Qrcode },
};
</script>

<style></style>
