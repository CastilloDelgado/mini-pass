<script setup>
import {
    MapPinIcon,
    MapIcon,
    ClockIcon,
    TicketIcon,
} from "@heroicons/vue/24/solid";
defineProps({
    event: Object,
});
</script>
<template>
    <div>
        <p class="text-4xl font-bold">{{ event.title }}</p>
        <div class="flex flex-row">
            <p class="text-lg">Fecha del evento:</p>
            <p class="text-lg ml-2 font-bold">
                {{ event.date }}
            </p>
        </div>
        <p class="mt-3">{{ event.description }}</p>
        <div class="flex flex-row mt-4">
            <MapPinIcon class="h-6 w-6 text-gray-400" />
            <p class="ml-2 font-bold">Lugar:</p>
            <p class="ml-2">{{ event.location }}</p>
        </div>
        <div class="flex flex-row mt-2">
            <MapIcon class="h-6 w-6 text-gray-400" />
            <p class="ml-2 font-bold">Dirección:</p>
            <p class="ml-2">{{ event.address }}</p>
        </div>
        <div class="flex flex-row mt-2">
            <ClockIcon class="h-6 w-6 text-gray-400" />
            <p class="ml-2 font-bold">Apertura de puertas:</p>
            <p class="ml-2">{{ event.date }}</p>
        </div>
        <div class="flex flex-row mt-2">
            <TicketIcon class="h-6 w-6 text-gray-400" />
            <p class="ml-2 font-bold">Rango de precios:</p>
            <p class="ml-2">$200.00 - $600.00 MX</p>
        </div>
    </div>
</template>
