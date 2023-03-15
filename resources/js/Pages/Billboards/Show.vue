<script setup>
import EventInfoLayout from "../../Layouts/EventInfoLayout.vue";
import EventTicketsForm from "./EventTicketsForm.vue";

defineProps({
    event: Object,
});
</script>
<template>
    <EventInfoLayout :event="event">
        <EventTicketsForm :event="event" />
    </EventInfoLayout>
</template>
