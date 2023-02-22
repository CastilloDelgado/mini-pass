<template>
    <Head title="My"></Head>
    <header class="flex bg-gray-200 justify-between">
        <div class="flex flow-row items-center">
            <p class="font-bold mr-2 p-3">Mini Pass</p>
            <p class="text-sm">
                Welcome back, <b> {{ username }}!</b>
            </p>
        </div>
        <Nav />
    </header>
    <main class="pt-6">
        <div class="max-w-2xl mx-auto">
            <slot />
        </div>
    </main>
</template>

<script>
import Nav from "./Nav.vue";
import { Head } from "@inertiajs/vue3";
export default {
    components: { Nav, Head },
    computed: {
        username() {
            return this.$page.props.auth.user.username;
        },
    },
};
</script>

<style lang="scss" scoped></style>
