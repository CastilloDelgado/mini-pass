<script setup>
import EventInfoLayout from "@/Layouts/EventInfoLayout.vue";
import TicketsTable from "./TicketsTable.vue";
import StripeCheckout from "./StripeCheckout.vue";

defineProps({
    event: Object,
    sale: Object,
});
</script>

<template>
    <EventInfoLayout :event="event">
        <TicketsTable :table="sale.table" :total="sale.total" />
        <StripeCheckout :sale="sale.info" />
    </EventInfoLayout>
</template>
