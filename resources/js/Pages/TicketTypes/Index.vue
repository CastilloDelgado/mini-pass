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
                                            '/admin/events/' +
                                            event.id +
                                            '/ticket-types/create'
                                        "
                                    >
                                        Crear un tipo de entrada
                                    </Link>
                                </PrimaryButton>
                                <table
                                    class="w-full text-left text-sm mt-5 border-b-2 border-gray"
                                >
                                    <thead class="bg-blue-500 text-white">
                                        <tr>
                                            <th class="p-2">Tipo</th>
                                            <th class="p-2">Descripción</th>
                                            <th class="p-2">Precio</th>
                                            <th class="p-2">
                                                Cantidad disponible inicial
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="(
                                                type, index
                                            ) in event.ticket_types"
                                            :class="
                                                index % 2 !== 0
                                                    ? 'bg-gray-100'
                                                    : ''
                                            "
                                        >
                                            <td class="p-1">
                                                {{ type.title }}
                                            </td>
                                            <td class="p-1">
                                                {{ type.description }}
                                            </td>
                                            <td class="p-1">
                                                {{ `$ ${type.price} MXN` }}
                                            </td>
                                            <td class="p-1">
                                                {{ type.quantity }}
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
