<template>
    <div class="news_feed rounded-md px-3 w-2/5 mt-5 mb-8">

        <div class="new_post_window bg-white px-3 py-5 rounded border">
            <div class="new_post bg-white">
                <img class="user_avatar rounded-full w-10 h-10" ref="userAvatarRef">
                <form v-if="!newImageUrl" action="" method="post" class="new_post_form border " @keydown.enter="addPost(Textarea.value)"
                    @change="addImage">




                    <textarea 
                              v-model="newPostText"
                              placeholder="write something"
                              class="textarea placeholder:text-gray-500" 
                              ref="Textarea">
                   </textarea>
                    <ul class="form_ul flex items-center">

                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-music-note-beamed" viewBox="0 0 16 16">
                                <path
                                    d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13s1.12-2 2.5-2 2.5.896 2.5 2m9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2" />
                                <path fill-rule="evenodd" d="M14 11V2h1v9zM6 3v10H5V3z" />
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4z" />
                            </svg>
                        </li>

                        <li>
                            <form action="" method="get" class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" for="ff" width="22" height="22"
                                    fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                    <path
                                        d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z" />
                                </svg>
                                <input type="file" name="ff" @change="imageLoad" class="w-[1rem] opacity-0 absolute">
                            </form>
                        </li>

                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z" />
                            </svg>
                        </li>

                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-camera-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                <path
                                    d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0" />
                            </svg>
                        </li>

                        <li>
                            <button type="button" class="add_post_button" @click="addPost(Textarea.value)">Post</button>
                        </li>
                    </ul>
                    
                </form>

                <!-- Uploaded image form -->

                <form v-else action="" method="post" class="new_post_form border " @keydown.enter="addPost(Textarea.value)"
                    @change="addImage">


                    <textarea v-model="newPostText" name="" id="" placeholder="write something"
                        class="textarea placeholder:text-gray-500">

                    <div class="w-full flex">
                        <img :src="newImageUrl" alt="" class="w-[2rem] h-[2rem] border border-gray-400 m-2">
                    </div>

                    <ul class="form_ul flex items-center">

                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-music-note-beamed" viewBox="0 0 16 16">
                                <path
                                    d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13s1.12-2 2.5-2 2.5.896 2.5 2m9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2" />
                                <path fill-rule="evenodd" d="M14 11V2h1v9zM6 3v10H5V3z" />
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4z" />
                            </svg>
                        </li>

                        <li>
                            <form action="" method="get" class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" for="ff" width="22" height="22"
                                    fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                    <path
                                        d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z" />
                                </svg>
                                <input type="file" name="ff" @change="imageLoad" class="w-[1rem] opacity-0 absolute">
                            </form>
                        </li>

                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z" />
                            </svg>
                        </li>

                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-camera-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                <path
                                    d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0" />
                            </svg>
                        </li>

                        <li>
                            <button type="button" class="add_post_button" @click="addPost(Textarea.value)">Post</button>
                        </li>
                    </ul>
                </textarea>
                </form>


            </div>
        </div>



        <div  class="w-full mb-4">

                <NewPostItem v-for="(post,index) in posts" :key="index" :userId="post.userId" :userName="post.userName" :postId="post.postId" :createdAt="post.createdAt" :photoUrl="post.imageUrl"
                    :videoUrl="post.videoUrl" :viewCount="post.viewCount" :commentCount="post.commentCount"
                    :likeCount="post.likeCount" :dislikeCount="post.dislikeCount" :description="post.description"
                    :comments="post.comments" class="mb-4"/>

        </div>


    </div>
</template>

<script setup>
    import {localhost} from '../main.js'
    import NewPostItem from './NewPostItem.vue'
    import {ref,watch} from 'vue'
    import axios from 'axios'  
    import {usePostStore} from '../stores/PostStore.js'
    import {storeToRefs} from 'pinia'

  const store = usePostStore();
  const userAvatarRef = ref(null)
  const Textarea = ref(null)
  const {posts,userAvatar,newPostText} = storeToRefs(store)
  const {returnAvatarUrl,addPost,addImage} = store

  returnAvatarUrl(userAvatarRef)
  
  const handleImageChange = (event) => {
  const file = event.target.files[0]
  if (file) {
    const reader = new FileReader()
    reader.onload = (e) => {
      newImageUrl.value = e.target.result
    }
    reader.readAsDataURL(file)
  }
}


</script>

<style scoped>

    .news_feed {
        background-color: transparent;
        display: flex;
        flex-direction: column;
        align-items: center;
    }


    .new_post_window {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: start;
        margin-bottom: .7rem;
    }

    .user_avatar {
    
        margin-right: .7rem;
    }

    .new_post {
        width: 100%;
        display: flex;
        align-items: start;
    }



    textarea {
        width: 100%;
        height: 4.1rem;
        padding: .5rem;
        border: none;
        resize: none;
    }

    form {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: end;
        padding-bottom: .3rem;
    }

    ul {
        display: flex;
        width: 50%;
        justify-content: space-around;
    }

    ul li button {
        background-color: var(--blue2);
        color: var(--white);
        padding: .3rem .9rem;
        border-radius: .1rem;
        font-size: .7rem;
        border: none !important;
        width: 3.5rem;
        cursor: pointer;
    }

    textarea::placeholder {
        font-size: 1rem;
    }

    textarea:focus {
        outline: none;
    }

    textarea:focus body {
        filter: brightness(-50%);
    }

    body:has(.clicked-input) {
        transition: all .3s ease;
        background-color: black;
    }

    svg {
        color: rgb(79, 79, 79);
    }


    @media (max-width:480px) {
        .news_feed {
            width: 100%;
        }

        .textarea {
            height: 12rem;
            font-size: 2.9rem;
            
        }

        .new_post_window {
            padding: 3rem;
            margin-bottom: 2rem;

        }

        .user_avatar {
            width: 8rem
        }

        .textarea::placeholder {
            font-size: 2.9rem;
            padding-left: 1rem;
        }

        .new_post_window svg {
            height: 3rem;
            width: 3rem;
            margin-right: 2rem;

        }

        .add_post_button {
            font-size: 2rem;
            padding: 1rem 2rem;
        }


        .form_ul {
            width: 10rem;
        }

        .new_post_form {
            padding: 1rem;
            border: 1px solid rgb(238, 224, 224);
        }
    }

    @media (min-width:481px) and (max-width:1024px) {
        .news_feed {
            width: 100%;
        }

        .textarea {
            height: 12rem;
            font-size: 2.9rem;
        }

        .new_post_window {
            width: 95%;
            padding: 3rem;
            margin-bottom: 2rem;

        }

        .user_avatar {
            width: 8rem
        }

        .textarea::placeholder {
            font-size: 2rem;
            padding-left: 1rem;
        }

        .new_post_window svg {
            height: 2rem;
            width: 2rem;
            
        }

        .add_post_button {
            font-size: 1rem;
            padding: .5rem 1rem;
        }

        .form_ul {
            width:90%
        }

        .new_post_form {
            width: 90%;
            padding: 1rem;
            border: 1px solid rgb(238, 224, 224);
        }
    }
</style>