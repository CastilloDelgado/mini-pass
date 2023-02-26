<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Panel from "@/Components/Events/Panel.vue";
import CreateEventForm from "../../Components/Events/CreateEventForm.vue";
</script>

<template>
    <AppLayout title="Crear evento">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Panel>
                        <div class="w-full px-6 py-6">
                            <div>
                                <p class="text-3xl font-bold">Crear evento</p>
                                <p class="mt-2 text-gray-500 leading-relaxed">
                                    Completa el formulario para crear un nuevo
                                    evento.
                                </p>
                            </div>
                            <div>
                                <CreateEventForm />
                            </div>
                        </div>
                    </Panel>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
