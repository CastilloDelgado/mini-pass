<script setup>
import { useForm } from "@inertiajs/vue3";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

defineProps({
    event: Object,
});

const form = useForm({
    title: "",
    description: "",
    price: 0,
    quantity: 0,
});
</script>

<template>
    <form @submit.prevent="form.post('/events/' + event.id + '/ticket-types')">
        <!-- Información general del evento -->

        <div class="mb-4">
            <InputLabel for="title" value="Titulo" />
            <TextInput
                id="title"
                type="text"
                class="mt-1 block w-full"
                required
                v-model="form.title"
            />
        </div>
        <div class="mb-4">
            <InputLabel for="title" value="Descripción" />
            <TextInput
                id="description"
                type="text"
                class="mt-1 block w-full"
                required
                v-model="form.description"
            />
        </div>
        <div class="mb-4">
            <InputLabel for="title" value="Precio de venta" />
            <TextInput
                id="price"
                type="number"
                class="mt-1 block w-full"
                required
                v-model="form.price"
            />
        </div>
        <div class="mb-4">
            <InputLabel for="title" value="Cantidad" />
            <TextInput
                id="quantity"
                type="number"
                class="mt-1 block w-full"
                required
                v-model="form.quantity"
            />
        </div>

        <!-- Submit button -->
        <div class="mt-4">
            <PrimaryButton class=""> Crear entrada </PrimaryButton>
        </div>
    </form>
</template>
