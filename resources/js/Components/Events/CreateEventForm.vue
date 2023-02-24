<script setup>
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import TextArea from "@/Components/TextArea.vue";
import DateInput from "@/Components/DateInput.vue";
import InputSmallDescription from "../InputSmallDescription.vue";
</script>

<template>
    <form>
        <!-- Información general del evento -->
        <p class="mt-4 mb-4 font-bold text-lg">- Información del evento</p>
        <div class="mb-4">
            <InputLabel for="title" value="Titulo del evento" />
            <TextInput
                id="title"
                type="text"
                class="mt-1 block w-full"
                required
            />
        </div>
        <div class="mb-4">
            <InputLabel for="description" value="Descripción del evento" />
            <TextArea id="description" type="text" class="mt-1 block w-full" />
        </div>
        <div class="mb-4">
            <InputLabel for="description" value="Fecha y hora del evento" />
            <DateInput />
        </div>
        <div class="mb-4">
            <InputLabel
                for="description"
                value="Fecha y hora del publicación del evento"
            />
            <InputSmallDescription
                >Esta es la fecha y hora en la que el evento será visible al
                publico en general en nuestra página.
            </InputSmallDescription>
            <DateInput />
        </div>
        <!-- Lugar del evento -->
        <p class="mt-4 mb-4 font-bold text-lg">- Lugar del evento</p>
        <div class="mb-4">
            <InputLabel for="title" value="Inmueble" />
            <!-- <InputSmallDescription>
                Busca el evento en que se llevará a cabo tu evento en esta lista
                para completar automaticamente los datos de los demás campos de
                ubicación.
            </InputSmallDescription> -->
            <TextInput
                id="title"
                type="text"
                class="mt-1 block w-full"
                required
            />
        </div>
        <div class="mb-4 flex flex-row justify-between w-full">
            <div class="w-full pr-4">
                <InputLabel for="title" value="País" />
                <TextInput
                    id="title"
                    type="text"
                    class="mt-1 block w-full"
                    required
                />
            </div>
            <div class="w-full">
                <InputLabel for="title" value="Estado" />
                <TextInput
                    id="title"
                    type="text"
                    class="mt-1 block w-full"
                    required
                />
            </div>
        </div>
        <div class="mb-4 flex flex-row justify-between w-full">
            <div class="w-full pr-4">
                <InputLabel for="title" value="Ciudad" />
                <TextInput
                    id="title"
                    type="text"
                    class="mt-1 block w-full"
                    required
                />
            </div>
            <div class="w-full">
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
