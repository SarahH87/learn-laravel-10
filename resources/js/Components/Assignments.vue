<template>
    <AssignmentList :assignments="inProgressAssignments" title="In Progress"></AssignmentList>
    <AssignmentList :assignments="completedAssignments" title="Completed"></AssignmentList>
</template>

<script setup>
import { computed } from 'vue'
import AssignmentList from '@/Components/AssignmentList.vue';

const props = defineProps({
    assignments: Object,
})

const inProgressAssignments = computed(() => {
    return props.assignments.filter(assignment => !assignment.complete);
})

const completedAssignments = computed(() => {
    return props.assignments.filter(assignment => assignment.complete);
})

</script>

