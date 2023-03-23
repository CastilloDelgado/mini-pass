<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Panel from "@/Components/Events/Panel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import CreateTicketTypeForm from "@/Components/TicketTypes/CreateTicketTypeForm.vue";
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
                                    Formulario para crear un tipo de entrada
                                    para el evento
                                </p>
                            </div>

                            <div class="mt-6">
                                <PrimaryButton>
                                    <Link
                                        :href="
                                            route('ticket-types.index', event)
                                        "
                                    >
                                        Regresar
                                    </Link>
                                </PrimaryButton>

                                <CreateTicketTypeForm :event="event" />
                            </div>
                        </div>
                    </Panel>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
