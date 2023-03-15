<script setup>
import EventInfoLayout from "./EventInfoLayout.vue";
import EventInfo from "./EventInfo.vue";
import EventTicketsForm from "./EventTicketsForm.vue";

defineProps({
    event: Object,
});
</script>
<template>
    <EventInfoLayout :event="event">
        <EventInfo :event="event" />
        <EventTicketsForm :event="event" />
    </EventInfoLayout>
</template>

1026
