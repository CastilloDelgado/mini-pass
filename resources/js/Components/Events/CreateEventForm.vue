<script setup>
import { useForm } from "@inertiajs/vue3";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import TextArea from "@/Components/TextArea.vue";
import DateInput from "@/Components/DateInput.vue";
import InputSmallDescription from "@/Components/InputSmallDescription.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const form = useForm({
    title: "",
    description: "",
    date: "",
    public_at: "",
    main_image: null,
    // portrait_image: "",
    location: "",
    address: "",
    country: "",
    state: "",
    city: "",
    post_code: "",
    status: "",
});

const submit = () => {
    form.post(route("admin.events.store"));
};
</script>

<template>
    <form @submit.prevent="submit">
        <div>
            <p class="text-3xl font-bold">Crear evento</p>
            <p class="mt-2 text-gray-500 leading-relaxed">
                Completa el formulario para crear un nuevo evento.
            </p>
        </div>
        <!-- Información general del evento -->
        <p class="mt-4 mb-4 font-bold text-lg">- Información del evento</p>
        <div class="mb-4">
            <InputLabel for="title" value="Titulo del evento" />
            <TextInput
                id="title"
                type="text"
                class="mt-1 block w-full"
                required
                v-model="form.title"
            />
        </div>
        <div class="mb-4">
            <InputLabel for="description" value="Descripción del evento" />
            <TextArea
                id="description"
                type="text"
                class="mt-1 block w-full"
                v-model="form.description"
            />
        </div>
        <div class="mb-4">
            <InputLabel for="date" value="Fecha y hora del evento" />
            <DateInput id="date" v-model="form.date" />
        </div>
        <div class="mb-4">
            <InputLabel
                for="public_at"
                value="Fecha y hora del publicación del evento"
            />
            <InputSmallDescription
                >Esta es la fecha y hora en la que el evento será visible al
                publico en general en nuestra página.
            </InputSmallDescription>
            <DateInput id="public_at" v-model="form.public_at" />
        </div>
        <div class="mb-4">
            <InputLabel for="status" value="Estatus del evento" />
            <TextInput
                id="status"
                type="text"
                class="mt-1 block w-full"
                required
                v-model="form.status"
            />
        </div>

        <!-- Imagenes del evento -->
        <p class="mt-4 mb-4 font-bold text-lg">- Imagen del evento</p>
        <div class="w-full flex flex-row justify-between">
            <div>
                <div class="mb-4">
                    <InputLabel
                        for="main_image"
                        value="Imagen principal del evento"
                    />
                    <InputSmallDescription>
                        Está es la imagen que se mostrará en el listado de
                        eventos de nuestra página principal.
                    </InputSmallDescription>
                    <input
                        type="file"
                        class="mt-2"
                        @input="form.main_image = $event.target.files[0]"
                    />
                    <!-- <ImageInput id="main_image" v-model="form.main_image" /> -->
                </div>
            </div>
            <!-- <div>
                <div class="mb-4">
                    <InputLabel
                        for="portrait_image"
                        value="Imagen de portada del evento"
                    />
                    <InputSmallDescription>
                        Está es la imagen que se mostrará en la vista de
                        información del evento en la parte superior.
                    </InputSmallDescription>
                    <ImageInput id="portrait_image" />
                </div>
            </div> -->
        </div>

        <!-- Lugar del evento -->
        <p class="mt-4 mb-4 font-bold text-lg">- Lugar del evento</p>
        <div class="mb-4">
            <InputLabel for="location" value="Inmueble" />
            <!-- <InputSmallDescription>
                Busca el evento en que se llevará a cabo tu evento en esta lista
                para completar automaticamente los datos de los demás campos de
                ubicación.
            </InputSmallDescription> -->
            <TextInput
                id="location"
                type="text"
                class="mt-1 block w-full"
                required
                v-model="form.location"
            />
        </div>
        <div class="mb-4">
            <InputLabel for="address" value="Dirección completa" />
            <!-- <InputSmallDescription>
                Busca el evento en que se llevará a cabo tu evento en esta lista
                para completar automaticamente los datos de los demás campos de
                ubicación.
            </InputSmallDescription> -->
            <TextInput
                id="address"
                type="text"
                class="mt-1 block w-full"
                required
                v-model="form.address"
            />
        </div>
        <div class="mb-4 flex flex-row justify-between w-full">
            <div class="w-full pr-4">
                <InputLabel for="country" value="País" />
                <TextInput
                    id="country"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    v-model="form.country"
                />
            </div>
            <div class="w-full">
                <InputLabel for="state" value="Estado" />
                <TextInput
                    id="state"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    v-model="form.state"
                />
            </div>
        </div>
        <div class="mb-4 flex flex-row justify-between w-full">
            <div class="w-full pr-4">
                <InputLabel for="city" value="Ciudad" />
                <TextInput
                    id="city"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    v-model="form.city"
                />
            </div>
            <div class="w-full">
                <InputLabel for="post_code" value="Código postal" />
                <TextInput
                    id="post_code"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    v-model="form.post_code"
                />
            </div>
        </div>

        <!-- Submit button -->
        <div class="mt-4">
            <PrimaryButton> Crear evento </PrimaryButton>
        </div>
    </form>
</template>
