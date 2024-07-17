import axios from 'axios'
import {defineStore} from 'pinia'
import {  ref} from 'vue'
import {localhost} from '@/main'

export const useLoginStore = defineStore('loginStore',() => {
    
    const name = ref('')
    const email = ref('')
    const loginUserId = ref(0)
     

   function login() {
    
    axios.post(`http://${localhost.value}/api/register`,{
        name:name.value,
        email:email.value,
        
    })
    .then(res => {loginUserId.value = res.data.userId
        // return loginUserId                                                  //         <------ ???

    })
    .catch(e=>console.log(e))
   }
     


   return {name,email,login}
 

})