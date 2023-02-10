<template>
    <h1>Hello world, {{ name }}</h1>
    <p>I use the following frameworks</p>
    <ul>
        <li v-for="framework of frameworks" v-text="framework"></li>
    </ul>
</template>

<script>
export default {
    props: {
        name: String,
        frameworks: Array,
    },
};
</script>
