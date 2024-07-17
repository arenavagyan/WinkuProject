import './assets/main.css'
import {ref} from 'vue'
import { createApp } from 'vue'
import { createPinia } from 'pinia'
import App from './App.vue'
import router from './router'



const app = createApp(App)




export const localhost = ref('localhost:81')
const userId = ref(0)


app.use(createPinia())
app.use(router)

app.mount('#app')


////////////////////New Added

import {useLoginStore} from './stores/LoginStore'  
import {storeToRefs} from 'pinia'
const store = useLoginStore();
const {loginUserId} = storeToRefs(store)

userId.value = loginUserId.value
console.log(userId.value);
export default userId