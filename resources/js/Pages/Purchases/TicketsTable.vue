<script setup>
defineProps({
    table: Array,
    total: Number,
});
</script>
<template>
    <div class="border-t-2 border-gray-200 py-4 mt-6">
        <p class="text-2xl font-bold mb-2">Desglose de la compra</p>
        <table class="w-full text-sm">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="p-1">Tipo de boleto</th>
                    <th class="p-1">Beneficios</th>
                    <th class="p-1">Precio de venta</th>
                    <th class="p-1">Cargo por servicio</th>
                    <th class="p-1">Cantidad</th>
                    <th class="p-1">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="(ticket, index) in table"
                    :class="index % 2 !== 0 ? 'bg-gray-100' : ''"
                >
                    <td class="p-3">{{ ticket.title }}</td>
                    <td class="p-3">{{ ticket.description }}</td>
                    <td class="p-3 text-center">
                        ${{ Number.parseFloat(ticket.price).toFixed(2) }}
                    </td>
                    <td class="p-3 text-center">
                        ${{ Number.parseFloat(ticket.charge).toFixed(2) }}
                    </td>
                    <td class="p-3 text-center">{{ ticket.quantity }}</td>
                    <td class="p-3 text-center">
                        ${{ Number.parseFloat(ticket.total).toFixed(2) }}
                    </td>
                </tr>
                <tr>
                    <td
                        colspan="5"
                        class="bg-blue-500 text-right font-bold p-1 py-2 pr-6 text-white"
                    >
                        Total a cobrar
                    </td>
                    <td class="text-center bg-blue-100 p-1 py-2 font-bold">
                        ${{ Number.parseFloat(total).toFixed(2) }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
