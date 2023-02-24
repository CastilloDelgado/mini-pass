<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
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

        <div class="bg-opacity-25 p-6 lg:p-8 flex flex-row">
            <div class="bg-gray-100 w-64 px-4 py-6 rounded-lg">
                <p class="text-xl font-bold">Opciones</p>
                <ul class="mt-8">
                    <li class="mb-2 text-lg"><a href="#">Mis eventos</a></li>
                    <li class="mb-2 text-lg">
                        <a href="#">Crear nuevo evento</a>
                    </li>
                </ul>
            </div>
            <div class="w-full px-6 py-6">
                <p class="text-3xl font-bold">Mis eventos</p>
                <p class="mt-2 text-gray-500 leading-relaxed">
                    Listado de los eventos que has creado dentro de la
                    aplicación.
                </p>
            </div>
        </div>
    </div>
</template>
