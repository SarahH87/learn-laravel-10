<template>
    <form action="#" class="flex justify-between" @submit.prevent="add">
        <input id="item" v-model="form.item" type="text" class="m-2 px-2 py-1 border border-gray-400" placeholder="Add item">
        <button type="submit" class="ml-2 px-6 rounded-lg bg-gray-400">Add</button>
    </form>
</template>

<script setup>
import { defineEmits, computed, reactive } from 'vue';

const form = reactive({
    item: null,
})

const emit = defineEmits(['add']);

function add() {
    emit('add', form.item);

    form.item = '';
}

</script>
