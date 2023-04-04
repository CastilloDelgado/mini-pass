<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <Link :href="'/'">
        <img
            :src="'https://minipass-assets.s3.amazonaws.com/logo-text.png'"
            class="w-60"
        />
    </Link>
</template>
