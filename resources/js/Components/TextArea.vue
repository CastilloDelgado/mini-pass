<script setup>
defineProps({
    modelValue: String,
});

defineEmits(["update:modelValue"]);
</script>

<template>
    <textarea
        name=""
        class="border-gray-300 focus:border-sky-500 focus:ring-sky-500 rounded-md shadow-sm"
        cols="30"
        rows="5"
        :value="modelValue"
        @input="($event) => $emit('update:modelValue', $event.target.value)"
    >
    </textarea>
</template>
