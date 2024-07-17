import axios from 'axios'
import {defineStore} from 'pinia'
import {  ref} from 'vue'
import {localhost} from '@/main'

export const useRegistrationStore = defineStore('registrationStore',() => {
    
    const name = ref('')
    const email = ref('')
    const password = ref(null)
    const male_female = ref(true)
    const accept_button = ref(false)
     

   function register() {
    
    axios.post(`http://${localhost.value}/api/register`,{
        name:name.value,
        email:email.value,
        password:password.value,
        accept_button:accept_button.value
    })
    .then(console.log(`${name.value} Registered succesfully`))
    .catch(e=>console.log(e))
   }
     


            

   return {name,email,password,male_female,accept_button,register}
})