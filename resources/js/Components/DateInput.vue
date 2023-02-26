<script setup>
defineProps({
    modelValue: String,
});

defineEmits(["update:modelValue"]);
</script>

<template>
    <input
        type="datetime-local"
        class="mt-1 rounded-md border-gray-300 focus:border-sky-500 focus:ring-sky-500 shadow-sm text-sm"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
    />
</template>
