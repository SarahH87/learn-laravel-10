<template>
    <section
        class="p-4 border rounded-lg"
        :class="{'p-4 border rounded-lg': true,
    'bg-white border-gray-300 text-black' : theme === 'light',
    'bg-gray-700 border-gray-600 text-white' : theme === 'dark'}">
        <slot/>
        <h2 class="font-bold mb-2" v-if="$slots.heading">
            <slot name="heading" />
        </h2>
    </section>
</template>

<script setup>

const props = defineProps({
    heading: String,
    theme: { type: String, default: 'dark' }
});

</script>
