<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import EventsGrid from "./EventsGrid.vue";

defineProps({
    events: Array,
});
</script>
<template>
    <AppLayout title="Inicio">
        <div class="bg-white p-6 md:container mx-auto">
            <EventsGrid :events="events" title="Proximos eventos" />
        </div>
    </AppLayout>
</template>
