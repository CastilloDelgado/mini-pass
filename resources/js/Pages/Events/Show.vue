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
            <div class="max-w-7xl mx-auto md:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Panel>
                        <div class="w-full pt-6 md:p-6">
                            <div>
                                <p class="text-3xl font-bold">
                                    Evento: {{ event.title }}
                                </p>
                                <p class="mt-2 text-gray-500 leading-relaxed">
                                    Aquí puedes ver la información del evento,
                                    puedes editar su información y puedes crear
                                    los tickets para su venta.
                                </p>
                            </div>
                            <div class="mt-5">
                                <PrimaryButton>
                                    <Link
                                        :href="
                                            '/admin/events/' +
                                            event.id +
                                            '/ticket-types'
                                        "
                                    >
                                        Crear Entradas
                                    </Link>
                                </PrimaryButton>
                            </div>
                        </div>
                    </Panel>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
