<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
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
    <AppLayout :title="event.title">
        <div class="bg-white md:container mx-auto">
            <div>
                <div class="h-52">
                    <img
                        :src="'/storage/' + event.main_image"
                        class="object-cover w-full h-full blur-sm brightness-50"
                    />
                </div>
                <div class="flex">
                    <img
                        :src="'/storage/' + event.main_image"
                        alt=""
                        class="w-96 ml-5 relative bottom-20 left-12 border-2 border-white rounded-lg"
                    />
                    <div class="ml-12 px-8 py-6 w-full">
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
                            <p class="ml-2">$200.00 - $500.00 MX</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
