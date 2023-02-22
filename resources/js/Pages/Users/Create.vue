<template>
    <Head title="My App - Create user"></Head>

    <h1 class="text-3xl">Create new user</h1>

    <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">
        <div class="mb-4">
            <label
                for="name"
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
                >Name</label
            >
            <input
                v-model="form.name"
                type="text"
                class="border border-gray-400 p-2 w-full"
                name="name"
                id="name"
                required
            />
            <div
                v-if="form.errors.name"
                v-text="form.errors.name"
                class="text-red-500 text-xs"
            ></div>
        </div>
        <div class="mb-4">
            <label
                for="email"
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
                >E-mail</label
            >
            <input
                v-model="form.email"
                type="text"
                class="border border-gray-400 p-2 w-full"
                name="email"
                id="email"
                required
            />
            <div
                v-if="form.errors.email"
                v-text="form.errors.email"
                class="text-red-500 text-xs"
            ></div>
        </div>
        <div class="mb-4">
            <label
                for="password"
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
                >Password</label
            >
            <input
                v-model="form.password"
                type="password"
                class="border border-gray-400 p-2 w-full"
                name="password"
                id="password"
                required
            />
            <div
                v-if="form.errors.password"
                v-text="form.errors.password"
                class="text-red-500 text-xs"
            ></div>
        </div>
        <div class="mb-6">
            <button
                type="submit"
                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                :disabled="form.processing"
            >
                Submit
            </button>
        </div>
    </form>
</template>

<script>
import Layout from "../../Shared/Layout.vue";
import { Head } from "@inertiajs/vue3";

export default {
    layout: Layout,
    components: { Head },
};
</script>

<script setup>
import { useForm } from "@inertiajs/vue3";

let form = useForm({
    name: "",
    email: "",
    password: "",
});

let submit = () => {
    form.post("/users");
};
</script>
