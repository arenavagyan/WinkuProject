import './assets/main.css'
import {ref} from 'vue'
import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

const app = createApp(App)



export const localhost = ref('http://172.18.0.4')
export const userId = ref(1)


app.use(createPinia())
app.use(router)

app.mount('#app')
