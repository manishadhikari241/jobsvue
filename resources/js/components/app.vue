<template>
    <v-text-field
            v-model="email"
            :rules="emailRules"
            label="E-mail"
            required
    ></v-text-field>
</template>

<script>
    export default {
        name: "app"
    }
</script>

<style scoped>

</style>