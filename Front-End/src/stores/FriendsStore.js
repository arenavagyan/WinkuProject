import {defineStore} from 'pinia'
import {ref} from 'vue'
import axios from 'axios'
import {userId,localhost} from '@/main'

export const useFriendsStore = defineStore('friendsStore',() => {
    const friends = ref([])
    const filteredFriends = ref([])

     axios.get(`http://${localhost.value}/api/users/${userId.value}/friends`)
                 .then(response => {friends.value = response.data;
                                    filteredFriends.value = response.data
                 })
                 .catch(error => console.log(error))
    


     function returnAvatarUrl(id,imgTagRefName) {
      axios.get(`http://${localhost.value}/api/users/${id}`)
        .then(res => { res = `http://${localhost.value}/image/${res.data.avatar}`;
                      imgTagRefName.value.src = res })
            
        }

   return {friends,filteredFriends,returnAvatarUrl}
})