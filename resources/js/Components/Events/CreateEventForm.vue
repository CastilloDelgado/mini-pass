<script setup>
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import TextArea from "@/Components/TextArea.vue";
import DateInput from "@/Components/DateInput.vue";
</script>

<template>
    <form>
        <p class="mt-4 mb-4 font-bold text-lg">- Información del evento</p>
        <div class="mb-4">
            <InputLabel for="title" value="Titulo del evento" />
            <TextInput
                id="title"
                type="text"
                class="mt-1 block w-1/2"
                required
            />
        </div>
        <div class="mb-4">
            <InputLabel for="description" value="Descripción del evento" />
            <TextArea id="description" type="text" class="mt-1 block w-1/2" />
        </div>
        <div class="mb-4">
            <InputLabel for="description" value="Fecha y hora del evento" />
            <DateInput />
        </div>
        <p class="mt-4 mb-4 font-bold text-lg">- Lugar del evento</p>
        <div class="mb-4">
            <InputLabel for="title" value="Inmueble" />
            <p class="text-xs my-2 w-1/2 text-sky-600">
                * Selecciona el lugar del evento en el listado para
                autocompletar los demás campos relacionados a la ubicación.
            </p>
            <TextInput
                id="title"
                type="text"
                class="mt-1 block w-1/2"
                required
            />
        </div>
        <div class="mb-4 flex flex-row justify-between w-1/2">
            <div>
                <InputLabel for="title" value="País" />
                <TextInput
                    id="title"
                    type="text"
                    class="mt-1 block w-full"
                    required
                />
            </div>
            <div>
                <InputLabel for="title" value="Estado" />
                <TextInput
                    id="title"
                    type="text"
                    class="mt-1 block w-full"
                    required
                />
            </div>
        </div>
        <div class="mb-4 flex flex-row justify-between w-1/2">
            <div>
                <InputLabel for="title" value="Ciudad" />
                <TextInput
                    id="title"
                    type="text"
                    class="mt-1 block w-full"
                    required
                />
            </div>
            <div>
                <InputLabel for="title" value="Código postal" />
                <TextInput
                    id="title"
                    type="text"
                    class="mt-1 block w-full"
                    required
                />
            </div>
        </div>
    </form>
</template>
