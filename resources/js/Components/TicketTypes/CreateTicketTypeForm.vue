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
    quantity: 0,
});

function submit() {
    form.post("/events/" + this.props.event.id + "/create");
}
</script>

<template>
    <form @submit.prevent="submit">
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
            <InputLabel for="title" value="Descripción" />
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
            <PrimaryButton class=""> Crear evento </PrimaryButton>
        </div>
    </form>
</template>
