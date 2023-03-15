<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    event: Object,
});
</script>
<template>
    <div
        class="bg-gray-200 hover:bg-gray-300 rounded-lg hover:scale-[1.03] transition"
    >
        <Link :href="/events/ + event.id" class="w-full">
            <div class="flex justify-center">
                <img
                    :src="'/storage/' + event.main_image"
                    alt=""
                    class="object-cover h-80 object-cover w-full"
                />
            </div>
            <div class="flex justify-center">
                <button
                    class="bg-blue-500 transition text-white px-3 py-1 w-full"
                >
                    Comprar entradas
                </button>
            </div>
            <div class="py-3 px-2 h-max">
                <p class="font-bold text-lg mb-2">{{ event.title }}</p>
                <div class="flex flex-col">
                    <p class="text-xs text-center">Fecha del evento:</p>
                    <p class="text-center font-bold mb-2 text-center">
                        {{ event.date }}
                    </p>
                </div>
                <p class="text-sm text-justify">
                    {{ event.description }}
                </p>
            </div>
        </Link>
    </div>
</template>
