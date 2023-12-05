<template>
    <AssignmentList :assignments="newAssignments" title="In Progress" currentTag="all"></AssignmentList>
    <AssignmentList :assignments="completedAssignments" title="Completed" currentTag="all"></AssignmentList>

    <assignment-create @add="add"></assignment-create>
</template>

<script setup>
import { computed, onMounted, reactive, ref } from 'vue';
import { router } from '@inertiajs/vue3'
import AssignmentList from '@/Components/AssignmentList.vue';
import AssignmentCreate from '@/Components/AssignmentCreate.vue';

const props = defineProps({
    assignments: Array,
    currentTag: String,
})

const newAssignments = reactive([])

const inProgressAssignments = computed(() => {
    return props.assignments.filter(assignment => !assignment.complete);
})

const completedAssignments = computed(() => {
    return props.assignments.filter(assignment => assignment.complete);
})

onMounted(async () => {
    fetch('http://localhost/api/v1/assignments')
        .then(response => response.json())
        .then(assignments => {
            newAssignments.value = assignments;
            console.log('new data');
            console.log(newAssignments.value);
            // console.log('old data');
            // console.log(props.assignments);
            // data.newAssignments = assignments;
            // console.log(data.newAssignments);
        });
});

function add(item) {
    props.assignments.push({
        name: item,
        completed: false,
        id: props.assignments.length + 1
    })
}

</script>

