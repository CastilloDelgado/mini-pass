<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import EventInfo from "../Pages/Billboards/EventInfo.vue";

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
                        :src="event.public_url"
                        class="object-cover w-full h-full blur-sm brightness-50"
                    />
                </div>
                <div class="flex-row lg:flex">
                    <div class="w-full lg:w-auto flex justify-center">
                        <img
                            :src="event.public_url"
                            alt=""
                            class="lg:w-96 max-h-56 lg:max-h-96 lg:ml-5 object-cover relative bottom-40 lg:bottom-20 lg:left-12 border-2 border-white rounded-lg justify-self-center"
                        />
                    </div>
                    <div
                        class="relative bottom-36 p-3 lg:bottom-0 lg:ml-12 lg:px-8 lg:py-6 w-full"
                    >
                        <EventInfo :event="event" />
                        <slot />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
t
