<script setup lang="ts">
import {Head, usePage} from '@inertiajs/vue3';

const page = usePage();
const locale = page.props.locale
const user = page.props.auth.user
const language = page.props.language
</script>

<template>
    <Head title="Dashboard" />
    <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
        <h1>Hello {{ user.name }} from Dashboard</h1>
        <p>Language: {{ language.title }}</p>
    </div>
</template>
