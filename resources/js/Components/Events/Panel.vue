<script setup>
import { Link } from "@inertiajs/vue3";
import PanelOption from "./PanelOption.vue";
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <h1 class="text-2xl font-medium text-gray-900">Eventos</h1>
            <p class="mt-4 text-gray-500 leading-relaxed">
                Este es tu panel de eventos, aquí puedes ver un listado de los
                eventos que has creado, agregar diferentes productos de venta a
                tus eventos y también puedes crear más evento que vayas a llevar
                a cabo.
            </p>
        </div>

        <div class="bg-opacity-25 p-6 lg:p-8 flex flex-col md:flex-row">
            <div class="bg-gray-100 w-full md:w-64 px-4 py-6 rounded-lg">
                <p class="text-xl font-bold">Opciones</p>
                <ul class="mt-8">
                    <li class="mb-2 text-md">
                        <PanelOption
                            :href="route('admin.events.index')"
                            :active="route().current('admin.events.index')"
                        >
                            Mis eventos
                        </PanelOption>
                    </li>
                    <li class="mb-2 text-md">
                        <PanelOption
                            :href="route('admin.events.create')"
                            :active="route().current('admin.events.create')"
                        >
                            Crear evento
                        </PanelOption>
                    </li>
                </ul>
            </div>

            <div class="w-full">
                <slot />
            </div>
        </div>
    </div>
</template>
