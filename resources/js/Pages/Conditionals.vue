<template>
    <MainLayout :current-page="currentPage">
        <h1 class="text-2xl font-bold mb-2">Conditionals</h1>
        <p>Conditionals exercise below</p>

        <section v-show="assignments">
            <h1 class="text-2xl font-bold">Vue Lists, Conditionals and Computed Properties</h1>
            <h2 class="text-xl font-bold mt-8 mb-2">In Progress</h2>

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

<!--        <section v-show="completedAssignments.length" class="mt-8">-->
<!--            <h2 class="text-xl font-bold">Completed</h2>-->

<!--            <ul>-->
<!--                <li v-for="assignment in completedAssignments"-->
<!--                    :key="assignment.id">-->
<!--                    <label>-->
<!--                        @{{ assignment.name }}-->

<!--                        <input type="checkbox" v-model="assignment.complete">-->
<!--                    </label>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </section>-->
    </MainLayout>
</template>

<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';

defineProps({
    currentPage: String,
    assignments: Object,
})

</script>

