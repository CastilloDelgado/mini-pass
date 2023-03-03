<script setup>
import AppLayout from "../../Layouts/AppLayout.vue";

defineProps({
    events: Array,
});
</script>
<template>
    <AppLayout>
        <div class="bg-white p-6">
            <h1>Listado de eventos</h1>
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
                    <button class="bg-blue-500 p-2">Ir al evento</button>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
