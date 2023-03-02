<script setup>
defineProps({
    event: Object,
    tickets: Array,
});
</script>

<template>
    <div>{{ event.title }}</div>
</template>
