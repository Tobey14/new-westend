<script setup>
import { computed } from 'vue';
import { usePage } from '@inertiajs/inertia-vue3';

import { ref, onMounted } from 'vue'



const errors = computed(() => usePage().props.value.errors);
const hasErrors = computed(() => Object.keys(errors.value).length > 0);

  // <div>


</script>

<template>
    <div v-if="hasErrors">
        <div class="font-medium text-red-600">
            Whoops! Something went wrong.
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            <li v-for="(error, key) in errors" :key="key">
                {{ error }}
            </li>
        </ul>

        <i class="fa fa-close" @click="hasErrors = null"></i>

    </div>
</template>

<style>
.fa-close{
    position: absolute;
    right:5px;
    top:5px;
    font-size:10px;
    color:red;
}

</style>
