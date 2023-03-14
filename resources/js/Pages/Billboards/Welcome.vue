<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import EventsGrid from "./EventsGrid.vue";

defineProps({
    events: Array,
});
</script>
<template>
    <AppLayout>
        <div class="bg-white p-6">
            <EventsGrid :events="events" title="Proximos eventos" />
        </div>
    </AppLayout>
</template>
