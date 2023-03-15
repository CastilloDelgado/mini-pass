<script setup>
import { useForm } from "@inertiajs/vue3";
import PrimaryButton from "../../Components/PrimaryButton.vue";

const props = defineProps({
    event: Object,
});

const emptyForm = {};
props.event.ticket_types.forEach((type) => {
    emptyForm[type.id] = 0;
});

const form = useForm({ ...emptyForm });
</script>

<template>
    <div class="mt-5">
        <p class="text-2xl font-bold">Selecciona tus entradas</p>
        <form
            @submit.prevent="
                ($event) => form.post('/events/' + event.id + '/purchase')
            "
        >
            <table class="w-full mt-4">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="w-44">Tipo de Entrada</th>
                        <th>Beneficios</th>
                        <th class="w-32">Precio</th>
                        <th class="w-32">Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="(type, index) in event.ticket_types"
                        :class="index % 2 !== 0 ? 'bg-gray-100' : ''"
                    >
                        <td class="p-3">{{ type.title }}</td>
                        <td class="p-3">{{ type.description }}</td>
                        <td class="p-3">${{ type.price }} MX</td>
                        <td class="p-3 flex justify-center">
                            <select :id="type.id" v-model="form[type.id]">
                                <option :value="0">0</option>
                                <option :value="1">1</option>
                                <option :value="2">2</option>
                                <option :value="3">3</option>
                                <option :value="4">4</option>
                                <option :value="5">5</option>
                                <option :value="6">6</option>
                                <option :value="7">7</option>
                                <option :value="8">8</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-center mt-4">
                <button
                    class="bg-blue-500 hover:bg-blue-600 hover:scale-[1.03] text-white font-bold px-4 py-2 rounded transition"
                >
                    Continuar con la compra
                </button>
            </div>
        </form>
    </div>
</template>
