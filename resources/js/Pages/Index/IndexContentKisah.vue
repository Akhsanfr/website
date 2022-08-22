<template>
    <div>
        <div
            class="flex items-center space-x-4"
            :class="type === 'kanan' ? 'ml-8' : 'mr-8'"
        >
            <img src="/img/bunga-2.png" class="h-20" />
            <p class="font-comforta">
                {{ kisah }}
            </p>
        </div>
        <div
            class="mt-1 h-1 w-full rounded-full from-dark-green to-transparent"
            :class="[
                type === 'kanan' ? 'bg-gradient-to-r ' : 'bg-gradient-to-l ',
            ]"
        ></div>
    </div>
</template>

<script>
export default {
    props: ["kisah", "type"],
};
</script>

<style></style>
