<template>
    <div class="flex w-full">
        <div class="chat flex-col w-full testClass" id="fullChat"  ref="refName">
            <div class="messages flex-col w-full p-2">
                <div v-for="(message, index) in messages" :key="index" class="w-[29.5rem] flex items-center">
                    <div v-if="!message.isUser" class="flex">
                        <img :src="friendAvatarUrl" alt="" class="w-[1.5rem] h-[1.5rem] rounded-full m-1">
                        <h6 class="bg-sky-100 text-ss p-1 m-1 mb-3 pl-2 w-48">{{ message.messageText }}</h6>
                    </div>
                    <div v-else class="w-full flex">
                        <h6 class="bg-[#d9f99d] text-ss p-1 m-1 mb-3 pl-2 ml-[10rem] w-full">{{ message.messageText }}</h6>
                        <img :src="userAvatarUrl" class="w-[1.5rem] h-[1.5rem] rounded-full m-1" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, watch, nextTick } from 'vue';

const props = defineProps({
    friendId: Number,
    friendName: String,
    friendAvatarUrl: String,
    friendStatus: String,
    messages: Array,
    userAvatarUrl: String,
});

const refName = ref(null);




nextTick(() => {
   
    
    refName.value.scrollTop = 1000;
     })



const messages = props.messages;
</script>

<style scoped>

</style>
