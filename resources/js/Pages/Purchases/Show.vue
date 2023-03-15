<script setup>
import EventInfoLayout from "../../Layouts/EventInfoLayout.vue";

defineProps({
    event: Object,
    sale: Object,
});
</script>

<template>
    <EventInfoLayout :event="event"> </EventInfoLayout>
</template>
