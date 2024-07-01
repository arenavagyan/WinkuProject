<template>


  <div class="comment flex">
    <img :src="returnAvatar(props.userId)" alt="" class="w-7 h-7 mx-2 rounded-full">
    <div class="comment_text w-full flex-col border border-grey-300">
      <div class="flex flex-row w-full p-2 items-center">
        <h6 class="text-xs font-bold mr-2">{{props.userName}} </h6>
        <p class="text-s text-gray-500 mr-2"> {{props.date}}</p>
        <div class="text-blue-500">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-fill"
            viewBox="0 0 16 16">
            <path
              d="M5.921 11.9 1.353 8.62a.72.72 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z" />
          </svg>
        </div>
      </div>
      <p class="text-ss p-2 text-gray-500">{{props.text}}</p>
    </div>
  </div>


</template>

<script setup>
  import axios from 'axios'
  import {
    localhost
  } from '../main.js'
  import {
    ref
  } from 'vue'

  const props = defineProps({
    date: Date,
    userId: Number,
    text: String,
  })

  const userName = ref('')

  axios.get(`http://${localhost.value}/api/users/${props.userId}`)
    .then(response => {
      userName.value = response.data.name
    })
    .catch(error => console.log(error))

  function returnAvatar(userId) {
    return (`http://${localhost.value}/api/static/${props.userId}/avatar`)
  }
</script>

<style scoped>
  @media (max-width:480px) {
    .comment_text {
      padding: 1rem;
      border: .5px solid rgb(226, 220, 220);

    }

    .comment h6 {
      font-size: 1.7rem;
    }

    .comment p {
      font-size: 1.6rem;
    }

    .comment img {
      width: 5rem;
      height: 5rem;
      margin-right: 2rem;
    }

    .comment_text {
      padding: 1.3rem;
    }

    .bi {
      width: 1.5rem;
      height: 1.5rem;
    }

  }

  @media (min-width:480px) and (max-width:1024px) {
    .comment_text {
      padding: 1rem;
      border: .5px solid rgb(226, 220, 220);

    }

    .comment h6 {
      font-size: 1.7rem;
    }

    .comment p {
      font-size: 1.6rem;
    }

    .comment img {
      width: 5rem;
      height: 5rem;
      margin-right: 2rem;
    }

    .comment_text {
      padding: 1.3rem;
    }

    .bi {
      width: 2rem;
      height: 2rem;
    }
  }
</style>