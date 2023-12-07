<template>
    <section v-show="show && assignments.length" class="w-60">
        <div class="flex justify-between">
            <h2 class="text-xl font-bold mt-8 mb-2">
                {{ title }}
                <span>({{ assignments.length}})</span>
            </h2>
            <button v-show="canToggle" @click="show = false">&times;</button>
        </div>

        <assignment-tags
            :initial-tags="initialTags"
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

        <slot></slot>
    </section>
</template>

<script setup>

import Assignment from '@/Components/Assignment.vue';
import AssignmentTags from '@/Components/AssignmentTags.vue';
import {computed, reactive, ref} from 'vue';

const props = defineProps({
    assignments: Array,
    title: String,
    currentTag: String,
    canToggle: { type: Boolean, default: false }
});

const show = ref(true);


const filteredAssignments = computed(() => {
    if(props.currentTag === 'all') {
        return props.assignments;
    }

    return props.assignments.filter(a => a.tag === props.currentTag);
});

const initialTags = computed(() => {
    return props.assignments.map(a => a.tag);
});

</script>

