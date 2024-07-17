import {defineStore} from 'pinia'
import {  ref} from 'vue'
import axios from 'axios'
import {userId,localhost} from '@/main'

export const useUserDataStore = defineStore('userDataStore',() => {
    
  
     const userName = ref('');
     const position = ref('')
     const cover = ref('')
     
     axios.get(`http://${localhost.value}/api/users/${userId.value}`)
     .then(res => { userName.value = res.data.userName;
                    position.value = res.data.position;
                    cover.value = res.data.cover

     })

     function returnAvatarUrl(imgTagRefName) {
      axios.get(`http://${localhost.value}/api/users/${userId.value}`)
        .then(res => { res = `http://${localhost.value}/image/${res.data.avatar}`;
                      imgTagRefName.value.src = res })
            
        }
    
    function returnCoverUrl(imgTagRefName) {
          axios.get(`http://${localhost.value}/api/users/${userId.value}`)
            .then(res => { res = `http://${localhost.value}/image/${res.data.cover}`;
                          imgTagRefName.value.src = res })
                
            }

            

   return {userName,position,returnAvatarUrl,returnCoverUrl}
})