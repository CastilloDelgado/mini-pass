<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

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
                        class="w-96 max-h-96 ml-5 object-cover relative bottom-20 left-12 border-2 border-white rounded-lg"
                    />
                    <div class="ml-12 px-8 py-6 w-full">
                        <slot />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
