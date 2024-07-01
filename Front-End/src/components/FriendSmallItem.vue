<template>
    <div class="follower_item">
        <img :src="returnAvatar(props.id)" alt="" class="img_follower">
  
        <div class="follower_name_section">
          <h4 class="follower_name">{{props.name}}</h4>
          <a href="" class="add_friend">{{props.email}}</a>
        </div>
     
    </div>
  </template>
  
  <script setup>
    const props = defineProps({
        id:Number,
        name: String,
        email: String,
        url: String,
  
    })

    import {useFriendsStore} from '../stores/FriendsStore'

    const store = useFriendsStore()

    const {returnAvatar} = store
      </script>
  
  <style scoped>
    
    .follower_item {
      padding: .1rem 0rem;     
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 90%;
      cursor: pointer;
      margin-left: 1rem;
    }
  
  
    .follower_name_section{
      width: 70%;
      display: flex;
      flex-direction: column;
      align-items: start;
      justify-content: start;
    }
  
    .img_follower {
      width: 2.5rem;
      height: 2.5rem;
      border-radius: 50%;
    }
  
    .follower_name {
      font-size: .7rem;
      color: var(--dark);
    }
  
   
    .add_friend{
        font-size: .55rem;
        color: rgb(135, 132, 132);
        padding-top: .3rem;

    }
    @media (max-width:480px){
      .img_follower{
        width: 8rem;
        height: 8rem;
        margin:1.5rem 1.5rem 1.5rem 1.5rem;
      }
      .follower_item{
        justify-content: start;

      }
      .follower_item img{
        margin-right: 1rem;
      }
      .follower_item h4{
        font-size: 2.1rem;
      }
      .follower_item a{
        font-size: 1.7rem;
        padding: 0;
      }
    }
    
    </style>