<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Panel from "@/Components/Events/Panel.vue";
import { Link } from "@inertiajs/vue3";
import { format } from "date-fns";

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
                                <table
                                    class="w-full text-left overflow-y-auto text-sm border-b-2 border-gray"
                                >
                                    <thead class="bg-blue-500 text-white">
                                        <tr>
                                            <th class="p-2">ID</th>
                                            <th class="p-2">Evento</th>
                                            <th class="p-2">Locación</th>
                                            <th class="p-2">
                                                Fecha del evento
                                            </th>
                                            <th class="p-2">Estado</th>
                                            <th class="p-2">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="(event, index) in events"
                                            :class="`${
                                                index % 2 ? 'bg-gray-100' : ''
                                            } p-2`"
                                        >
                                            <td
                                                class="text-center font-bold p-1"
                                            >
                                                {{ event.id }}
                                            </td>
                                            <td class="w-80 p-1">
                                                {{ event.title }}
                                            </td>
                                            <td class="p-1">
                                                {{ event.location }}
                                            </td>
                                            <td class="p-1">
                                                {{
                                                    format(
                                                        new Date(event.date),
                                                        "dd/M/yyyy"
                                                    )
                                                }}
                                            </td>
                                            <td class="p-1">
                                                {{ event.status }}
                                            </td>
                                            <td class="p-1">
                                                <Link
                                                    :href="
                                                        '/admin/events/' +
                                                        event.id
                                                    "
                                                    class="text-sky-700 underline"
                                                >
                                                    Editar
                                                </Link>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </Panel>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
