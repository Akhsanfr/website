<template>
    <!-- component -->
    <div class="overflow-x-auto">
        <div
            class="min-w-screen min-h-screen bg-slate-100 flex items-center justify-center bg-slate-100 font-sans overflow-hidden"
        >
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr
                                class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal"
                            >
                                <th class="py-3 px-6 text-left">Nama</th>
                                <th class="py-3 px-6 text-left">Diundang Ke</th>
                                <th class="py-3 px-6 text-center">Hadir Ke</th>
                                <th class="py-3 px-6 text-center">
                                    Konfirmasi Kehadiran
                                </th>
                                <th class="py-3 px-6 text-center">Tipe</th>
                                <th class="py-3 px-6 text-center">Jadwal</th>
                                <th class="py-3 px-6 text-center">
                                    Jumlah Akses Undangan
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <tr
                                v-for="user in users"
                                :key="user.id"
                                class="border-b border-gray-200 hover:bg-slate-100"
                            >
                                <td
                                    class="py-3 px-6 text-left whitespace-nowrap"
                                >
                                    {{ user.nama }}
                                </td>
                                <td
                                    class="py-3 px-6 text-left whitespace-nowrap"
                                >
                                    {{ user.diundang_ke }}
                                </td>
                                <td
                                    class="py-3 px-6 text-left whitespace-nowrap"
                                >
                                    {{ user.hadir_ke }}
                                </td>
                                <td
                                    class="py-3 px-6 text-left whitespace-nowrap"
                                >
                                    {{ user.konfirmasi_kehadiran }}
                                </td>
                                <td
                                    class="py-3 px-6 text-left whitespace-nowrap"
                                    @click="
                                        copy(
                                            'https://fernanda-silvara.id/' +
                                                user.url
                                        )
                                    "
                                >
                                    {{ user.url }}
                                    <button class="btn">Copy</button>
                                </td>
                                <td
                                    class="py-3 px-6 text-left whitespace-nowrap"
                                >
                                    {{ user.tipe }}
                                </td>
                                <td
                                    class="py-3 px-6 text-left whitespace-nowrap"
                                >
                                    {{ user.jadwal }}
                                </td>
                                <td
                                    class="py-3 px-6 text-left whitespace-nowrap"
                                >
                                    {{ user.akses_undangan }}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div
                                        class="flex item-center justify-center"
                                    >
                                        <div
                                            class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                                />
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                                />
                                            </svg>
                                        </div>
                                        <div
                                            class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                                                />
                                            </svg>
                                        </div>
                                        <div
                                            class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["users"],
    methods: {
        copy(value) {
            navigator.clipboard.writeText(value);
        },
    },
};
</script>

<style></style>
