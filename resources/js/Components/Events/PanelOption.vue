<script setup>
import { computed } from "vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? "border-b-2 border-sky-600 text-sky-600 font-bold"
        : "";
});
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
