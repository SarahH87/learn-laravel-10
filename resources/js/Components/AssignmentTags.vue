<template>
    <div class="flex gap-2">
        <button
            @click="$emit('change', tag)"
            v-for="tag in tags"
            class="bg-teal-400 border rounded p-1 text-xs"
            :class="{
              'border-blue-500 text-blue-500' : tag === currentTag
            }"
        >{{ tag }}
        </button>
    </div>
</template>

<script setup>
import {computed, defineEmits} from "vue";

const props = defineProps({
    initialTags: Array,
    currentTag: String,
});

const tags = computed(() => {
    return ['all', ...new Set(props.initialTags)];
});

const emit = defineEmits(['change']);

</script>

