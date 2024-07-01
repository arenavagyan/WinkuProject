import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/Friends',
      name: 'Friends',
      component:() =>import('../views/FriendsPage.vue')
    },
    {
      path: '/photos',
      name: 'photos',
      component: () => import('../views/UserPhotos.vue')
    },
    {
      path: '/',
      name: 'newsFeed',
      component: () => import('../views/NewsFeed.vue')
    },
    {
      path:'/chatPage',
      name: 'chatPage',
      component:() => import('../views/ChatPage.vue')
    },
    {
      path:'/landingPage',
      name: 'landingPage',
      component:() => import('../views/Landing.vue')
    },
    {
      path:'/backendTest',
      name: 'backendTest',
      component:() => import('../views/BackEndTest.vue')
    }

  ]
})

export default router
