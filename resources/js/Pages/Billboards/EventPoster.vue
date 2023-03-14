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
        <div class="py-4 px-2">
            <p class="font-bold text-lg">{{ event.title }}</p>
            <p class="text-sm">{{ event.description }}</p>
            <p class="text-center mt-2 font-bold">{{ event.date }}</p>
            <div class="flex justify-center">
                <button
                    class="bg-blue-500 text-white font-bold px-3 py-1 rounded"
                >
                    Ir al evento
                </button>
            </div>
        </div>
    </div>
</template>
