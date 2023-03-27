<script setup>
import EventInfoLayout from "@/Layouts/EventInfoLayout.vue";
import TicketsTable from "./TicketsTable.vue";

defineProps({
    event: Object,
    sale: Object,
});
</script>

<template>
    <EventInfoLayout :event="event">
        <TicketsTable :table="sale.table" :total="sale.total" />
    </EventInfoLayout>
</template>
