<script setup>
import EventPoster from "./EventPoster.vue";

defineProps({
    events: Array,
    title: String,
});
</script>
<template>
    <div class="mb-4">
        <p class="text-3xl font-bold">{{ title }}</p>
    </div>
    <div class="grid grid-cols-5 gap-x-4 gap-y-4">
        <EventPoster v-for="event in events" :event="event" />
    </div>
</template>
