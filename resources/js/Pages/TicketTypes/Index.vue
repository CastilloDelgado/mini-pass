<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Panel from "@/Components/Events/Panel.vue";
import PrimaryButton from "../../Components/PrimaryButton.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
    event: Object,
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
                                <p class="text-3xl font-bold">
                                    Tickets para el evento: {{ event.title }}
                                </p>
                                <p class="mt-2 text-gray-500 leading-relaxed">
                                    Listado del todos los tipos de entradas
                                    creadas para este evento.
                                </p>
                            </div>

                            <div class="mt-6">
                                <PrimaryButton>
                                    <Link
                                        :href="
                                            '/events/' +
                                            event.id +
                                            '/ticket-types/create'
                                        "
                                    >
                                        Crear un tipo de entrada
                                    </Link>
                                </PrimaryButton>
                                <table class="w-full text-left">
                                    <tr>
                                        <th>Tipo</th>
                                        <th>Descripción</th>
                                        <th>Precio</th>
                                        <th>Cantidad disponible inicial</th>
                                    </tr>
                                    <tr
                                        class="border-gray border-b-2 p-6"
                                        v-for="type in event.ticket_types"
                                    >
                                        <td>{{ type.title }}</td>
                                        <td>{{ type.description }}</td>
                                        <td>
                                            {{ `$ ${type.price} MXN` }}
                                        </td>
                                        <td>{{ type.quantity }}</td>
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
