<template>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Jumlah Akses</td>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(undangan, i) in undangans" :key="i">
                <td>{{ i + 1 }}</td>
                <td>{{ undangan.nama }}</td>
                <td>{{ undangan.akses_undangan }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    props: ["undangans"],
};
</script>

<style></style>
