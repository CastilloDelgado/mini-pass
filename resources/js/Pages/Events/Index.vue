<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Panel from "@/Components/Events/Panel.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
    events: Array,
});
</script>

<template>
    <AppLayout title="Mis eventos">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Panel>
                        <div class="w-full px-6 py-6">
                            <div>
                                <p class="text-3xl font-bold">Mis eventos</p>
                                <p class="mt-2 text-gray-500 leading-relaxed">
                                    Listado de los eventos que has creado dentro
                                    de la aplicación.
                                </p>
                            </div>
                            <div class="mt-6">
                                <table class="w-full text-left overflow-y-auto">
                                    <tr>
                                        <th>ID</th>
                                        <th>Evento</th>
                                        <th>Locación</th>
                                        <th>Fecha del evento</th>
                                        <th>Fecha de publicación</th>
                                        <th>Acciones</th>
                                    </tr>
                                    <tr v-for="event in events" class="p-2">
                                        <td>{{ event.id }}</td>
                                        <td>{{ event.title }}</td>
                                        <td>{{ event.location }}</td>
                                        <td>{{ event.date }}</td>
                                        <td>{{ event.public_at }}</td>
                                        <td>
                                            <Link
                                                :href="
                                                    '/admin/events/' + event.id
                                                "
                                                class="text-sky-700 underline"
                                            >
                                                Editar
                                            </Link>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </Panel>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
