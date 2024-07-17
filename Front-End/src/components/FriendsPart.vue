<template>
    <div class="friend">
        <div class="heading_following">
            <h5 class="h5_friends"> Friends</h5>
            <div class="div_hr"></div>
        </div>

        <input ref="inputTest" type="search" v-model="inputValue" name="friend" placeholder="Search Contacts..." class="focus:outline-none"
            id="friendSearch" @change="onChange">
        <div class="friend_list">
            <div v-for="(friend,index) in filteredFriends" :key="index" class="friends">
                <FriendSmallItem :id="friend.id" :name="friend.name" :email="friend.email" :indexImage="index"/>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { ref, watch, nextTick } from 'vue';
    import FriendSmallItem from './FriendSmallItem.vue'
    import {useFriendsStore} from '../stores/FriendsStore'
    import {storeToRefs} from 'pinia'


   


    const indexImage = ref(0)

    const store = useFriendsStore()

    const {friends,filteredFriends} = storeToRefs(store)



    const inputValue = ref('')

    const inputTest = ref(null)


     watch(inputValue, () => {
        onSearchFriends()
     })
     
     const onSearchFriends  = () => {
        
        if (!inputValue) {
            filteredFriends.value = [...friends.value]
        } else {
            filteredFriends.value = [...friends.value.filter(elem => elem.name.toLowerCase().includes(inputValue.value.toLowerCase()))]

        }
     }

     

  
        
</script>

<style scoped>
    .friend {

        position: sticky;
        top: 3.6rem;
        margin-bottom: 2rem;
        background-color: var(--white);
        width: 65%;
        margin-top: 1.3rem;
        padding: 1rem 1rem 1rem 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: var(--white);
        border-radius: .3rem;
        box-shadow: rgba(0, 0, 0, 0.03) 0px 0px 0px 1px;

    }

    #friendSearch {
        font-size: .7rem;
        padding: .3rem;
        margin-bottom: .7rem;
        border: 1px solid rgb(202, 202, 202);
        width: 100%;
    }

    #friendSearch::placeholder {
        color: #929090;
    }

    .friend:hover ::-webkit-scrollbar-thumb {
        background-color: rgba(186, 186, 186, 0.612);
    }

    ::-webkit-scrollbar {
        width: .35rem;

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

    .friend h5 {
        font-family: var(--serif);
        padding: 0.5rem;
        color: rgb(0, 0, 0);
        font-weight: normal;
        padding-left: .7rem;

    }

    .div_hr {

        background-color: var(--blue2);
    height: .1rem;
    width: 4rem;
    margin-left: .7rem;
        margin-bottom: .5rem;
    }

    .heading_following {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .friend_list {
        width: 100%;
        height: 20rem;
        overflow-y: scroll;

    }

    .friends {
        width: 100%;
        padding: .3rem;
        margin-top: .3rem;
    }

    @media (max-width:480px) {
        .friend{
            padding: 2rem !important;
            margin: 0 auto;
                    }
        #friendSearch{
            width: 100%;
            
            font-size: 2rem;
            padding: 1rem;
        }
        .heading_following h5{
            font-size: 2.5rem;
        }
        .heading_following div{
            width: 7rem;
            height: .25rem;
            margin-left: .7rem;
            border: none;
        }
        .friend_list{
            height: 70rem;

        }   

        
    }
</style>