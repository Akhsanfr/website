<template>
    <div ref="printArea" class="w-[8.5in] h-screen flex flex-wrap">
        <template v-if="skip">
            <div class="w-[4.25in] h-[6.5in]" v-for="n in skip" :key="n"></div>
        </template>
        <PrintPetaBelakangImg
            v-for="undangan in undangans"
            :key="undangan.id"
            :url="undangan.url"
        />
        <!-- <PrintPetaBelakangImg url="fernanda-silvara.id/pupus-101" /> -->
    </div>
</template>

<script>
import PrintPetaBelakangImg from "./PetaBelakangImg.vue";
export default {
    props: ["undangans", "skip"],
    mounted() {
        // const printContent = this.$refs.printArea;
        // const WinPrint = window.open("", "", "width=216mm,height=330mm");
        // WinPrint.document.write(printContent.innerHTML);
        // WinPrint.document.close();
        // WinPrint.focus();
        // WinPrint.print();
        // WinPrint.close();
    },
    components: { PrintPetaBelakangImg },
};
</script>

<style></style>
