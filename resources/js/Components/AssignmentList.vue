<template>
    <section v-show="assignments.length">
        <h2
            class="text-xl font-bold mt-8 mb-2">{{ title }}
            <span>({{ assignments.length}})</span>
        </h2>

        <assignment-tags
            :initial-tags="assignments.map(a => a.tag)"
            :current-tag="currentTag"
            @change="currentTag = $event"
        />

        <ul class="mt-6">
            <assignment
                v-for="assignment in filteredAssignments"
                :key="assignment.id"
                :assignment="assignment"
                >
            </assignment>
        </ul>
    </section>
</template>

<script setup>

import Assignment from '@/Components/Assignment.vue';
import AssignmentTags from '@/Components/AssignmentTags.vue';
import { computed } from 'vue';

const props = defineProps({
    assignments: Object,
    title: String,
    currentTag: String,
});

const filteredAssignments = computed(() => {
    if(props.currentTag === 'all') {
        return props.assignments;
    }

    return props.assignments.filter(a => a.tag === props.currentTag);
});


</script>

