<template>
    <div class="text-center">
        <h1 class="text-[2rem]">Test</h1>
        <button @click="testConnection" class="border-[1px] border-none rounded p-2 mb-4 bg-sky-200 text-cyan-700 hover:text-white hover:bg-black duration-[.3s]">Test Connection</button>
        <p v-if="message">{{message}}</p>
    </div>
</template>
<script setup>
import axios from 'axios'
import {ref} from 'vue'
import {usePostStore} from '../stores/PostStore.js'
import {storeToRefs} from 'pinia'

const store = usePostStore()

const {posts} = storeToRefs(store)

const message = ref('')
 
function testConnection(){
 
   message.value = posts
}  
</script>
<style scoped>

</style>