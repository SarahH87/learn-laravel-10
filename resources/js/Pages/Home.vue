<template>
    <MainLayout :current-page="currentPage">
        <h1 class="text-2xl font-bold mb-2">Vue Training</h1>
        <p>Please find links to tutorial examples using the links above</p>
<!--        @todo add link to a page for lists conditionals exercise-->
<!--        @todo create new component for this-->
    </MainLayout>
</template>

<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';

defineProps({
    currentPage: String,
})

</script>

