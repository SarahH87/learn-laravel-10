<template>
    <section v-show="assignments.length">
        <h2 class="text-xl font-bold mt-8 mb-2">{{ title }}</h2>

        <ul>
            <li v-for="assignment in assignments"
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

defineProps({
    assignments: Object,
    title: String,
})

</script>

