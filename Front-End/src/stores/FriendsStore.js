import {defineStore} from 'pinia'
import {ref} from 'vue'
import axios from 'axios'
import {userId,localhost} from '@/main'

export const useFriendsStore = defineStore('friendsStore',() => {
    const friends = ref([])

     axios.get(`http://${localhost.value}/api/users/${userId.value}/friends`)
     .then(response => {friends.value = response.data})
     .catch(error => console.log(error))
    


     function returnAvatarUrl(id,imgTagRefName) {

    

      axios.get(`http://${localhost.value}/api/users/${id}`)
        .then(res => { res = `http://${localhost.value}/api/images/${res.data.avatar}`;
                      imgTagRefName.value.src = res })
            
        }

   return {friends,returnAvatarUrl}
})