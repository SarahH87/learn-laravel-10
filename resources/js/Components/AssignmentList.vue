<template>
    <section v-show="assignments.length">
        <h2
            class="text-xl font-bold mt-8 mb-2">{{ title }}
            <span>({{ assignments.length}})</span>
        </h2>

        <div class="flex gap-2">
            <button
                @click="currentTag = tag"
                v-for="tag in tags"
                class="bg-teal-400 border rounded p-1 text-xs"
                :class="{
                  'border-blue-500 text-blue-500' : tag === currentTag
                }"
            >{{ tag }}
            </button>
        </div>

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
import { computed } from 'vue';

const props = defineProps({
    assignments: Object,
    title: String,
    currentTag: String,
});

const filteredAssignments = computed(() => {
    console.log(props);
    if(props.currentTag === 'all') {
        return props.assignments;
    }

    return props.assignments.filter(a => a.tag === props.currentTag);
});

const tags = computed(() => {
    return ['all', ...new Set(props.assignments.map(a => a.tag))];
});


</script>

