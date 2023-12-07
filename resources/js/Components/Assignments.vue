<template>
    <section class="flex gap-20">
        <AssignmentList :assignments="inProgressAssignments" title="In Progress" currentTag="all">
            <assignment-create @add="add"></assignment-create>
        </AssignmentList>
        <AssignmentList :assignments="completedAssignments" title="Completed" currentTag="all" can-toggle></AssignmentList>
    </section>

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

const newAssignments = reactive([]);

const inProgressAssignments = computed(() => {
    props.assignments = newAssignments;
    return props.assignments.filter(assignment => !assignment.complete);
})

const completedAssignments = computed(() => {
    props.assignments = newAssignments;
    return props.assignments.filter(assignment => assignment.complete);
})

onMounted(async () => {
    fetch('http://localhost/api/v1/assignments')
        .then(response => response.json())
        .then(assignments => {
            newAssignments.value = assignments;
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

