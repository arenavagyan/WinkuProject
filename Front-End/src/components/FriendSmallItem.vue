<template>
  <div class="friend_item">
    <img class="img_friend" ref="friendImage">
    <div class="follower_name_section">
      <h4 class="follower_name">{{props.name}}</h4>
      <a class="add_friend">{{props.email}}</a>
    </div>

  </div>
</template>

<script setup>
  import axios from 'axios'
  import {localhost} from '../main.js'
  import {ref} from 'vue'
  const props = defineProps({
    id: Number,
    name: String,
    email: String,
    url: String,
    indexImage:Number
  })

  const friendImage = ref(null)



 
    
        
  
  import {
    useFriendsStore
  } from '../stores/FriendsStore'
  import {
    storeToRefs
  } from 'pinia'
  
  
  
  const store = useFriendsStore()
  
  const {friends} = storeToRefs(store)

  const {returnAvatarUrl} = store
  
  returnAvatarUrl(props.id,friendImage);
  
</script>

<style scoped>
  .friend_item {
    padding: .1rem 0rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 90%;
    cursor: pointer;
    margin-left: 1rem;
  }


  .follower_name_section {
    width: 70%;
    display: flex;
    flex-direction: column;
    align-items: start;
    justify-content: start;
  }

  .img_friend {
    width: 2.5rem;
    height: 2.5rem;
    border-radius: 50%;
  }

  .follower_name {
    font-size: .7rem;
    color: var(--dark);
  }


  .add_friend {
    font-size: .55rem;
    color: rgb(135, 132, 132);
    padding-top: .3rem;

  }

  @media (max-width:480px) {
    .img_friend {
      width: 8rem;
      height: 8rem;
      margin: 1.5rem 1.5rem 1.5rem 1.5rem;
    }

    .friend_item {
      justify-content: start;

    }

    .friend_item img {
      margin-right: 1rem;
    }

    .friend_item h4 {
      font-size: 2.1rem;
    }

    .friend_item a {
      font-size: 1.7rem;
      padding: 0;
    }
  }
</style>