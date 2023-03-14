<script setup>
defineProps({
    event: Object,
});
</script>
<template>
    <div
        class="bg-gray-100 hover:bg-gray-200 rounded-lg hover:scale-[1.03] transition"
    >
        <div class="flex justify-center">
            <img
                :src="'/storage/' + event.main_image"
                alt=""
                class="object-cover h-80"
            />
        </div>
        <div class="flex justify-center">
            <button
                class="bg-blue-500 hover:bg-blue-600 transition text-white px-3 py-1 w-full"
            >
                Comprar entradas
            </button>
        </div>
        <div class="py-4 px-2 h-max">
            <p class="font-bold text-lg">{{ event.title }}</p>
            <p class="text-center font-bold">{{ event.date }}</p>
            <p class="text-sm">{{ event.description }}</p>
        </div>
    </div>
</template>
