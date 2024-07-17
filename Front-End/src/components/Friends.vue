<template>
    <div class="friends_section">
        <div class="friends border rounded-md">
            <div class="links_friends">
                <div class="a_friends">
                    <div>
                        <a  class="linkClick" :class="activeTab === 'friends' ? 'activeTab' : ''" @click="() => activeTab = 'friends'">My Friends</a>
                    </div>

                    <div class="friend_quantity"><p>55</p></div>
                </div>
                <div class="a_friends">
                    <div>
                        <a  class="linkClick" :class="activeTab === 'request' ? 'activeTab' : ''" @click="() => activeTab = 'request'">Friend Requests</a>
                    </div>

                    <div class="friend_quantity"><p>60</p></div>
                </div>
            </div>
    


<div v-if="activeTab === 'friends'">
    <div v-for="(friend, index) in friends" :key="index">
      <FriendItem :id="friend.id" :url="friend.avatar" :name="friend.name" :surname="friend.surname" :position="friend.position" />
    </div>
</div>

<div v-else>
    <div v-for="(friend, index) in friendRequests" :key="index">
        <FriendRequestItem :url="" :name="" :surname="" :position=""/>
      </div>
</div>

<button class="refresh_button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
    fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z" />
    <path
        d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466" />
</svg>
</button>
</div>
</div>
</template>
<script setup>
    
    // import test from '../assets/public/Images/friend-3.jpg'  2nd way to use photos

    import {ref} from 'vue'
    import FriendItem from './FriendItem.vue'
    import FriendRequestItem from './FriendRequestItem.vue'
    import {useFriendsStore} from '../stores/FriendsStore.js'
    import {storeToRefs} from 'pinia'

    const store = useFriendsStore()

    const {friends} = storeToRefs(store)

    const{returnAvatarUrl} = store


   
   /* const myFriends = ref([
        {
            name:"John",
            surname:"Kates",
            position:"Ftv Model",
            url: "http://localhost:5173/src/assets/public/Images/friend-1.jpg"
        },
        {
            name:"Sophia",
            surname:"Gate",
            position:"Tv Actresses",
            url:"http://localhost:5173/src/assets/public/Images/friend-2.jpg"

        },
        {
            name:"Sara",
            surname:"Grey",
            position:"Work At IBM",
            url: "http://localhost:5173/src/assets/public/Images/friend-3.jpg"        
        },
        {
            name:"Sey",
            surname:"Cat",
            position:"Student",
            url: "http://localhost:5173/src/assets/public/Images/friend-4.jpg"
        },
        
        {
            name:"Amy",
            surname:"Watson",
            position:"Study In University",
            url: "http://localhost:5173/src/assets/public/Images/friend-6.jpg"
        },
        {
            name:"Caty",
            surname:"Lasbo",
            position:"Work As Dancers",
            url: "http://localhost:5173/src/assets/public/Images/friend-3.jpg"
        },
        {
            name:"Ema",
            surname:"Watson",
            position:"Personal Business",
            url: "http://localhost:5173/src/assets/public/Images/friend-7.jpg"
        }]);
        */
    
    let friendRequests = ref([
        {
            name:"Amy",
            surname:"Watson",
            position:"Study In University",
            url: "http://localhost:5173/src/assets/public/Images/friend-6.jpg"
        },
        {
            name:"Sophia",
            surname:"Gate",
            position:"Tv Actresses",
            url:"http://localhost:5173/src/assets/public/Images/friend-5.jpg"

        },
        {
            name:"Caty",
            surname:"Lasbo",
            position:"Work As Dancers",
            url: "http://localhost:5173/src/assets/public/Images/friend-7.jpg"
        },
        {
            name:"Jhon",
            surname:"Kates",
            position:"Ftv Model",
            url: "http://localhost:5173/src/assets/public/Images/friend-1.jpg"
        },
        {
            name:"Sara",
            surname:"Grey",
            position:"Work At IBM",
            url: "http://localhost:5173/src/assets/public/Images/friend-3.jpg"        
        },
        {
            name:"Sara",
            surname:"Grey",
            position:"Work At IBM",
            url: "http://localhost:5173/src/assets/public/Images/friend-4.jpg"        
        },
        {
            name:"Sey",
            surname:"Cat",
            position:"Student",
            url: "http://localhost:5173/src/assets/public/Images/friend-7.jpg"
        }

    ]);
    
    let activeTab = ref('friends')
    


</script>

<style scoped>
   .friends_section{
            width: 44%;
            display: flex;
            justify-content: center;
            
        }
   .show{
    display: flex;
   }

    .friends {
        width: 100%;
        background-color: var(--white);
        padding: 1rem;
        margin: 1.2rem;

    }

    

    .friends .links_friends {
        width: 100%;
        display: flex;
        padding: 1rem;
        align-items: center;
    }

    .activeTab {
        color: var(--blue2);
        border-bottom: 1px solid var(--blue2);
    }
    #friends_requests_list{
        display: none;
    }
    .linkClick{
        font-size: 1rem;
        padding: .2rem;
    }

    .friend_quantity{
        border: 1px solid var(--gray);
        border-radius: 30%;
        width: 1rem;
        display: flex;
        justify-content: center;
        margin-right: 1rem !important;
    }
    .friend_quantity p{
        font-size: .5rem;
        color: var(--gray);
    }
    .a_friends{
     display: flex;
     justify-content: center;
     align-items: center;
    }
    a:active {
        color: var(--blue2)
    }

    .refresh_button {
        padding: .5rem;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        background-color: rgb(241, 241, 241);
        box-shadow: 0rem .2rem .5rem rgb(184, 183, 183);
        align-items: center;
        border: none;
        margin: 2rem auto;
    }

    .refresh_button svg {
        width: 1.4rem;
        height: auto;
    }

    .refresh_button:hover {
        background-color: var(--blue);
    }
    
    .refresh_button:hover svg {
        transform: rotate(360deg);
        color: white;
        transition: .25s !important;
    }


    @media (max-width:480px){
        .friends_section{
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 1rem;
        }
        .friends{
            width:100%
        }
        .linkClick{
        font-size: 2rem;
    }
    .a_friends p{
        font-size: 1rem;
        
    }
    .friend_quantity{
        padding: .3rem;
        width: 1.7rem;
        margin-left: .5rem;
    }
    .refresh_button svg{
        width: 3rem;
        height:3rem;
    }
    
    }

    @media (min-width:481px) and (max-width:1024px) {
        .friends_section{
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 1rem;
        }
        .friends{
            width:100%
        }
        .linkClick{
        font-size: 2rem;
    }
    .a_friends p{
        font-size: 1rem;
        
    }
    .friend_quantity{
        padding: .3rem;
        width: 1.7rem;
        margin-left: .5rem;
    }
    .refresh_button svg{
        width: 3rem;
        height:3rem;
    }
    
    }
</style>