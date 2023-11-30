<template>
    <main>
        <header>
            <Link href="/" class="px-3 py-2 bg-gray-300 rounded mr-2">Home</Link>
        </header>
        <article class="mt-10">
            <slot/>
        </article>
    </main>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'

defineProps({
    currentPage: String,
})
</script>
