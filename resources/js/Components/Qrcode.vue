<template>
    <div ref="target"></div>
</template>

<script>
import QRCodeStyling from "qr-code-styling";
export default {
    props: {
        height: {
            type: Number,
            default: 300,
        },
        width: {
            type: Number,
            default: 300,
        },
        image: {
            type: String,
        },
        data: {
            type: String,
        },
    },
    mounted() {
        console.log("init");
        const qrCode = new QRCodeStyling({
            width: this.width,
            height: this.height,
            data: this.data,
            margin: 0,
            qrOptions: {
                typeNumber: "0",
                mode: "Byte",
                errorCorrectionLevel: "H",
            },
            image: this.image,
            imageOptions: {
                hideBackgroundDots: true,
                imageSize: 0.5,
                margin: 10,
            },
            dotsOptions: {
                type: "rounded",
                color: "#063200",
            },
            backgroundOptions: {
                color: "rgba(0,0,0,0)",
            },
            cornersSquareOptions: {
                type: "extra-rounded",
                color: "#063200",
            },
            cornersDotOptions: {
                type: "square",
                color: "#063200",
            },
        });

        // console.log(this.$refs.target);
        qrCode.append(this.$refs.target);
        // qrCode.download({ name: "qrpeta", extension: "png" });
    },
};
</script>

<style></style>
