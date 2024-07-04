import {defineStore} from 'pinia'
import {ref} from 'vue'
import axios from 'axios'
import {userId,localhost} from '@/main'

export const useFriendsStore = defineStore('followersStore',() => {
    const friends = ref([])

    axios.get(`http://${localhost.value}/api/users/${userId.value}/followers`)
     .then(response => {friends.value = response.data})
     .catch(error => console.log(error))
    
     function returnAvatar(userId){
         return(`http://${localhost.value}/api/static/${userId}/avatar`)
         
      }

   return {friends,returnAvatar}
})