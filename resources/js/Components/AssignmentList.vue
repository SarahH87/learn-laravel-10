<template>
    <section v-show="assignments.length">
        <h2 class="text-xl font-bold mt-8 mb-2">{{ title }}</h2>

        <ul>
            <assignment
                v-for="assignment in assignments"
                :key="assignment.id"
                :assignment="assignment"
                >
            </assignment>
        </ul>
    </section>
</template>

<script setup>

import Assignment from '@/Components/Assignment.vue';

defineProps({
    assignments: Object,
    title: String,
})

</script>

