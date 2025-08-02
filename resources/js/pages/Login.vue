<script setup lang="ts">
import { reactive } from 'vue'
import {router, useForm, usePage} from '@inertiajs/vue3'

const page = usePage();
const locale = page.props.locale

const form = reactive({
    email: null,
    password: null
})

function submit() {
    router.post(`/${locale}/login`, form)
}
</script>

<template>
    <form @submit.prevent="submit">
        <label for="email">email:</label>
        <input id="email" v-model="form.email" />
        <label for="password">password:</label>
        <input id="password" v-model="form.password" />
        <button type="submit">Submit</button>
    </form>
</template>
