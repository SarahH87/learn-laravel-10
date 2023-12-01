<template>
    <AssignmentList :assignments="inProgressAssignments" title="In Progress"></AssignmentList>
    <AssignmentList :assignments="completedAssignments" title="Completed"></AssignmentList>

    <form action="#" class="flex justify-between" @submit.prevent="add">
        <input id="item" v-model="form.item" type="text" class="m-2 px-2 py-1 border border-gray-400" placeholder="Add item">
        <button type="submit" class="ml-2 px-6 rounded-lg bg-gray-400">Add</button>
    </form>
</template>

<script setup>
import { computed, reactive } from 'vue';
import AssignmentList from '@/Components/AssignmentList.vue';

const props = defineProps({
    assignments: Object,
    newAssignment: String,
})

const form = reactive({
    item: null,
})

const inProgressAssignments = computed(() => {
    return props.assignments.filter(assignment => !assignment.complete);
})

const completedAssignments = computed(() => {
    return props.assignments.filter(assignment => assignment.complete);
})

function add() {
    props.assignments.push({
        name: form.item,
        completed: false,
        id: props.assignments.length + 1
    })

    form.item = '';
}

</script>

