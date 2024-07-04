<template>
    <div class="flex w-full">
    <div class="follow">
        <div class="heading_following">
            <h5>Who's Following</h5>
            <div class="div_hr"></div>
        </div>

        <div class="follow_list">
          <div v-for="(follower,index) in followers" :key="index" class="followers">
            <FollowerItem :name="follower.name" :surname="follower.surname" :url="follower.image_url"/>
          </div>
        </div>
    </div>
</div>
</template>

<script setup>
    import {ref} from 'vue';
    import axios from 'axios'
    import FollowerItem from './FollowerItem.vue'
    
    const followers = ref([])
   
   

     
    

       followers.value = [{
            name: "Kelly",
            surname: "Bill",
            image_url: "https://wpkixx.com/html/winku/images/resources/friend-avatar2.jpg"
        },
        {
            name: "Issabel",
            image_url: "https://wpkixx.com/html/winku/images/resources/friend-avatar4.jpg"

        },
        {
            name: "Andrew",
            image_url: "https://wpkixx.com/html/winku/images/resources/friend-avatar6.jpg"
        },
        {
            name: "Sophia",
            image_url: "https://wpkixx.com/html/winku/images/resources/friend-avatar8.jpg"
        },
        {
            name: "Allen",
            image_url: "https://wpkixx.com/html/winku/images/resources/friend-avatar3.jpg"
        }


    ];
</script>

<style scoped>
    .follow {
        background-color: var(--white);
        width: 65%;
        margin-top: 1.3rem;
        padding: 1.3rem 1rem 1rem 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: var(--white);
        border-radius: .3rem;
        box-shadow: rgba(0, 0, 0, 0.03) 0px 0px 0px 1px;


    }

    .follow:hover ::-webkit-scrollbar-thumb{
        background-color: rgba(186, 186, 186, 0.612);
    }

::-webkit-scrollbar {
  width: .35rem;
  padding-left: .2rem;
}

::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px rgb(255, 255, 255); 
  border-radius: 1rem;
}
 

::-webkit-scrollbar-thumb {
  background-color: transparent;
  border-radius: 1rem;
}


::-webkit-scrollbar-thumb:hover {
  background: #929090; 
}

    .follow h5 {
        font-family: var(--serif);
        padding: 0.5rem;
        color: rgb(0, 0, 0);
        font-weight: normal;

    }

    .div_hr {

        background-color: var(--blue2);
    height: .1rem;
    width: 4rem;
    margin-left: .7rem;
        margin-bottom: 1rem;
    }

    .heading_following {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .follow_list {
        padding: 0rem 0rem 1rem 1rem;
        width: 100%;
        height: 14rem;
        overflow-y: scroll;

    }
    .followers{
        width: 100%;
    }
</style>