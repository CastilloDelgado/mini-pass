<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";

defineProps({
    events: Array,
});
</script>
<template>
    <AppLayout>
        <Head title="Inicio" />

        <div class="bg-white p-6">
            <!-- Section -->
            <div>
                <h1>Proximos eventos</h1>
                <div class="flex flex-row">
                    <div v-for="event in events" class="border-2 p-6 m-2">
                        <div class="w-24">
                            <img
                                :src="'/storage/' + event.main_image"
                                alt=""
                                style="width: 200px"
                            />
                        </div>
                        <p>{{ event.title }}</p>
                        <p>{{ event.description }}</p>
                        <p>{{ event.date }}</p>
                        <p>{{ event.location }}</p>
                        <input
                            type="button"
                            value="Ir al evento"
                            class="bg-blue-500 text-white px-3 py-2 rounded-md"
                        />
                    </div>
                </div>
            </div>
            <div>
                <h1>Preventas</h1>
                <div class="flex flex-row">
                    <div v-for="event in events" class="border-2 p-6 m-2">
                        <div class="w-24">
                            <img
                                :src="'/storage/' + event.main_image"
                                alt=""
                                style="width: 200px"
                            />
                        </div>
                        <p>{{ event.title }}</p>
                        <p>{{ event.description }}</p>
                        <p>{{ event.date }}</p>
                        <p>{{ event.location }}</p>
                        <input
                            type="button"
                            value="Ir al evento"
                            class="bg-blue-500 text-white px-3 py-2 rounded-md"
                        />
                    </div>
                </div>
            </div>
            <div>
                <h1>Más eventos</h1>
                <div class="flex flex-row">
                    <div v-for="event in events" class="border-2 p-6 m-2">
                        <div class="w-24">
                            <img
                                :src="'/storage/' + event.main_image"
                                alt=""
                                style="width: 200px"
                            />
                        </div>
                        <p>{{ event.title }}</p>
                        <p>{{ event.description }}</p>
                        <p>{{ event.date }}</p>
                        <p>{{ event.location }}</p>
                        <input
                            type="button"
                            value="Ir al evento"
                            class="bg-blue-500 text-white px-3 py-2 rounded-md"
                        />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
