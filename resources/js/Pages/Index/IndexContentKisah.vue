<template>
    <div>
        <div
            class="flex flex-col md:flex-row items-center space-x-4"
            :class="type === 'kanan' ? 'ml-8' : 'mr-8'"
        >
            <img src="/img/bunga-2.png" class="h-20" />
            <div class="text-left">
                <h2 class="text-xl font-bold">{{ judul }}</h2>
                <p>
                    {{ kisah }}
                </p>
            </div>
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
    props: ["kisah", "judul", "type"],
};
</script>

<style></style>
