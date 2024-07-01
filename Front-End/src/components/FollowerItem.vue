<template>
    <div class="follower_item">
        <img :src="imageUrl" alt="" class="img_follower">
       <img src="" alt="">
        <div class="follower_name_section">
          <h4 class="follower_name">{{followerName}}</h4>
          <a href="" class="add_friend">Add Friend</a>
        </div>
     
    </div>
  </template>
  
  <script setup>
    import {ref} from 'vue'
    import {nextTick} from 'vue'
    const props = defineProps({
      url: String,
      name: String,
  
    })
  
    const imageUrl = ref('')
          
    imageUrl.value =  props.url
                                                          

    const followerName = props.name
  </script>
  
  <style scoped>
    .follower_item {
      padding: .2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      margin-top: 1rem !important;
      cursor: pointer;
    }
  
  
    .follower_name_section{
      width: 70%;
      display: flex;
      flex-direction: column;
      align-items: start;
      justify-content: start;
    }
  
    .img_follower {
      width: 22%;
      height: 22%;
      border-radius: 50%;
    }
  
    .follower_name {
      font-size: .7rem;
      color: var(--dark);
    }
  
   
    .add_friend{
        font-size: .6rem;
        color: var(--blue2);
        padding-top: .4rem;

    }
    
    </style>