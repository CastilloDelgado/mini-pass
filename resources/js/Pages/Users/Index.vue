<template>
    <Head title="My App - Users"></Head>
    <!-- Filter -->
    <div class="flex justify-between">
        <h1 class="text-4xl font-bold">Users</h1>
        <input
            type="text"
            placeholder="Search..."
            class="px-2 rounded border"
            v-model="search"
        />
    </div>

    <!-- component -->
    <div
        class="overflow-hidden rounded-lg border border-gray-200 shadow-md my-5"
    >
        <table
            class="w-full border-collapse bg-white text-left text-sm text-black"
        >
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                <tr
                    v-for="user in users.data"
                    :key="user.id"
                    class="hover:bg-gray-50"
                >
                    <td class="px-6 py-4">{{ user.id }}</td>
                    <td class="px-6 py-4">{{ user.name }}</td>
                    <td class="px-6 py-4">
                        <div class="flex justify-end gap-4">
                            <a x-data="{ tooltip: 'Edite' }" href="#">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-6 w-6"
                                    x-tooltip="tooltip"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                    />
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <ul class="flex flex-row space-x-3">
            <li
                v-for="link in users.links"
                :key="link.id"
                class="hover:bg-gray-50"
            >
                <Link
                    :href="link.url"
                    v-html="link.label"
                    class="p-1"
                    :class="{ underline: link.active }"
                ></Link>
            </li>
        </ul>
    </div>
</template>

<script>
import Layout from "../../Shared/Layout.vue";
import { Head } from "@inertiajs/vue3";
import { Link } from "@inertiajs/vue3";

export default {
    layout: Layout,
    components: { Head, Link },
    props: {
        users: Object,
        filters: Object,
    },

    data() {
        return {
            search: this.filters.search,
        };
    },

    watch: {
        search(value) {
            this.$inertia.get(
                "/users",
                { search: value },
                {
                    preserveState: true,
                    replace: true,
                }
            );
        },
    },
};
</script>
