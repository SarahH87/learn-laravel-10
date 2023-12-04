<template>
    <AssignmentList :assignments="inProgressAssignments" title="In Progress" currentTag="all"></AssignmentList>
    <AssignmentList :assignments="completedAssignments" title="Completed" currentTag="all"></AssignmentList>

    <assignment-create @add="add"></assignment-create>
</template>

<script setup>
import { computed, reactive } from 'vue';
import { router } from '@inertiajs/vue3'
import AssignmentList from '@/Components/AssignmentList.vue';
import AssignmentCreate from '@/Components/AssignmentCreate.vue';

const props = defineProps({
    assignments: Object,
})

const inProgressAssignments = computed(() => {
    return props.assignments.filter(assignment => !assignment.complete);
})

const completedAssignments = computed(() => {
    return props.assignments.filter(assignment => assignment.complete);
})

function add(item) {
    props.assignments.push({
        name: item,
        completed: false,
        id: props.assignments.length + 1
    })
}

</script>

