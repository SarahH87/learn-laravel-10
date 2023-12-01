<template>
    <MainLayout :current-page="currentPage">
        <h1 class="text-2xl font-bold mb-2">Conditionals</h1>
        <p>Conditionals exercise below</p>

        <Assignments :assignments="assignments"></Assignments>

    </MainLayout>
</template>

<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import Assignments from '@/Components/Assignments.vue';

defineProps({
    currentPage: String,
    assignments: Object,
})

</script>

