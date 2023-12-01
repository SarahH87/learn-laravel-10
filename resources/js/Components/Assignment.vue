<template>
    <li>
        <label class="p-2 flex justify-between">
            {{ assignment.name }}

            <input type="checkbox" v-model="assignment.complete">
        </label>
    </li>
</template>

<script setup>

defineProps({
    assignment: Object,
    name: String,
})

</script>

