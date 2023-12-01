<template>
    <section v-show="inProgressAssignments.length">
        <h2 class="text-xl font-bold mt-8 mb-2">In Progress</h2>

        <ul>
            <li v-for="assignment in inProgressAssignments"
                :key="assignment.id">
                <label>
                    {{ assignment.name }}

                    <input type="checkbox" v-model="assignment.complete">
                </label>
            </li>
        </ul>
    </section>

    <section v-show="completedAssignments.length" class="mt-8">
        <h2 class="text-xl font-bold">Completed</h2>

        <ul>
            <li v-for="assignment in completedAssignments"
                :key="assignment.id">
                <label>
                    {{ assignment.name }}

                    <input type="checkbox" v-model="assignment.complete">
                </label>
            </li>
        </ul>
    </section>
</template>

<script setup>
import { computed } from 'vue'

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

