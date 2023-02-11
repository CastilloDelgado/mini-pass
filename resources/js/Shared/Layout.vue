<template>
    <header class="flex bg-gray-200 justify-between">
        <p class="mr-2 p-3">My app</p>
        <Nav />
    </header>
    <main>
        <div class="max-w-2xl mx-auto">
            <slot />
        </div>
    </main>
</template>

<script>
import Nav from "./Nav.vue";
export default {
    components: { Nav },
};
</script>

<style lang="scss" scoped></style>
