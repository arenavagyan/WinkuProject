<template>
    <div class="news_feed rounded-md px-3 w-2/5 mt-5 mb-8">

        <div class="new_post_window bg-white px-3 py-5 rounded border">
            <div class="new_post bg-white">
                <img :src=returnImageUrl(1,user-avatar) alt="" class="user_avatar">
                <form v-if="!newImageUrl" action="" method="post" class="new_post_form border " @keydown.enter="addPost"
                    @change="addImage">




                    <textarea v-model="newPostText" name="" id="" placeholder="write something"
                        class="textarea placeholder:text-gray-500">
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
                            <input type="submit" value="Post" class="add_post_button" @click="addPost">
                        </li>
                    </ul>
                    
                </form>

                <!-- Uploaded image form -->

                <form v-else action="" method="post" class="new_post_form border " @keydown.enter="addPost"
                    @change="addImage">


                    <textarea v-model="newPostText" name="" id="" placeholder="write something"
                        class="textarea placeholder:text-gray-500">
                                </textarea>

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
                            <input type="submit" value="Post" class="add_post_button" @click="addPost">
                        </li>
                    </ul>
                </form>


            </div>
        </div>

<!-- <img :src="imageSrc" alt=""> -->


        <div v-for="(post,index) in posts" :key="index" class="w-full mb-4">

            <div v-if="post.viewCount == 0">
                <Post :userId="post.userId" :postId="post.postId" :userName="post.userName" :publishDate="post.publishDate" :photoUrl="post.photoUrl"
                    :videoUrl="post.videoUrl" :viewCount="post.viewCount" :commentCount="post.commentCount"
                    :likeCount="post.likeCount" :dislikesCount="post.dislikesCount" :description="post.description"
                    :comments="post.comments" />
            </div>
            <div v-else>
                <NewPostItem :userId="post.userId" :postId="post.postId" :userName="post.userName" :publishDate="post.publishDate" :photoUrl="post.photoUrl"
                    :videoUrl="post.videoUrl" :viewCount="post.viewCount" :commentCount="post.commentCount"
                    :likeCount="post.likeCount" :dislikesCount="post.dislikesCount" :description="post.description"
                    :comments="post.comments" />
            </div>

        </div>


    </div>
</template>

<script setup>
    import {localhost} from '../main.js'
    import Post from './Post.vue'
    import NewPostItem from './NewPostItem.vue'
    import {ref} from 'vue'
    import axios from 'axios'
     
  
    /*Last Change
    
    const nowDate = ref('')

    const newImageUrl = ref('')
    

    const newPostText = ref('')

    const posts = ref([])

 /* const posts = ref([
        {
            userName: "Janice Griffith",
            postId: 2,
            publishDate: "2/6/2018, 19:27:07 PM",
            photoUrl: "https://wpkixx.com/html/winku/images/resources/user-post.jpg",
            viewCount: 1200,
            commentCount: 52,
            likeCount: 2200,
            dislikeCount: 200,
            description: "World's most beautiful car in Curabitur #test drive booking ! the most beatuiful car available in america and the saudia arabia, you can book your test drive by our official website",
            comments: [{
                    date: '1 year ago',
                    commentId: 1,
                    userId: 1,
                    userName: 'Jason Borne',
                    imageUrl: 'https://wpkixx.com/html/winku/images/resources/comet-1.jpg',
                    text: 'we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post',
                    mainComment: true,
                    repliedCommentIds: [2, 3]
                },
                {
                    date: '1 month ago',
                    commentId: 2,
                    userId: 2,
                    userName: 'Alexendra Dadrio',
                    imageUrl: 'https://wpkixx.com/html/winku/images/resources/comet-2.jpg',
                    text: 'yes, really very awesome car i see the features of this car in the official website of #Mercedes-Benz and really impressed :-)',
                    mainComment: false,
                    childComment: true

                },
                {
                    date: '16 days ago ',
                    commentId: 3,
                    userId: 3,
                    userName: 'Olivia',
                    imageUrl: 'https://wpkixx.com/html/winku/images/resources/comet-3.jpg',
                    text: 'i like lexus cars, lexus cars are most beautiful with the awesome features, but this car is really outstanding than lexus',
                    mainComment: false,
                    childComment: true


                },
                {
                    date: '1 week ago',
                    commentId: 4,
                    userId: 1,
                    userName: 'Donald Trump',
                    imageUrl: 'https://wpkixx.com/html/winku/images/resources/comet-3.jpg',
                    text: 'we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel ',
                    mainComment: true,
                    repliedCommentIds: []


                }
            ]
        },



        {
            userName: "Sara Gray",
            postId: 1,
            publishDate: "2/6/2018, 19:27:07 PM",
            videoUrl: "https://www.youtube.com/embed/_-StQsHSTz0?si=sF1pYCqHyBKNleeh",
            viewCount: 1200,
            commentCount: 52,
            likeCount: 2200,
            dislikeCount: 200,
            description: "Lonely Cat Enjoying in Summer Curabitur #mypage ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc,",
            comments: [{
                    date: '1 year ago',
                    commentId: 5,
                    userId: 1,
                    userName: 'Jason Borne',
                    imageUrl: 'https://wpkixx.com/html/winku/images/resources/comet-1.jpg',
                    text: 'we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post',
                    mainComment: true,
                },
                {
                    date: '1 week ago',
                    commentId: 4,
                    userId: 1,
                    userName: 'Sophia',
                    imageUrl: 'https://wpkixx.com/html/winku/images/resources/comet-2.jpg',
                    text: 'we are working for the dance and sing songs. this video is very awesome for the youngster. ',
                    mainComment: true,


                }
            ]
        }


    ])*/

  
/*
axios.get(`http://${localhost.value}/api/posts`)
         .then(response => {posts.value = response.data

              //Adding comments to each post

               posts.value.forEach(element => {
                  axios.get(`http://${localhost.value}/api/posts/${element.postId}/comments`)
                  .then(response => {element.comments = [...response.data];
            
                  })
                  .catch(error => console.log(error))
                  
               });
                                               })
              .catch(error => console.log(error))
  

function returnImageUrl(userId,imageName){
    return (`http://${localhost.value}/api/static/${userId}/avatar`)
}


//  function arrayBufferToBase64(buffer) {
//   let binary = '';
//   const bytes = new Uint8Array(buffer);
//   const len = bytes.byteLength;
//   for (let i = 0; i < len; i++) {
//     binary += String.fromCharCode(bytes[i]);
//   }
//   return window.btoa(binary);
// }

//  function fetchAndConvertUserAvatar(imageName) {
//           axios.get(`http://127.0.0.1:8000/api/static/${user_id.value}/avatar`, {
//         responseType: 'arraybuffer'
//       })
//       .then(response => {
//         const base64String = arrayBufferToBase64(response.data);
//         userAvatar.value = `data:image/jpeg;base64,${base64String}`;
       
//       })
//       .catch(error => {
//         console.error('Error fetching the image:', error);
//       });

//     }

//  fetchAndConvertUserAvatar('user-avatar.jpg')



    function addPost(e) {
        e.preventDefault();
        nowDate.value = new Date()

        if (newPostText.value && !newImageUrl.value) {


            posts.value.unshift(

                {
                    userName: "Kate Gray",
                    postId: posts.value.length + 1,
                    publishDate: nowDate.value.toLocaleString(),
                    photoUrl: "",
                    viewCount: 0,
                    commentCount: 0,
                    likeCount: 0,
                    dislikeCount: 0,
                    description: newPostText.value,
                    comments: [{}]

                }, )
        } 
        else if (newPostText.value && newImageUrl.value) {


            posts.value.unshift(

                {
                    userName: "Kate Gray",
                    postId: posts.value.length + 1,
                    publishDate: nowDate.value.toLocaleString(),
                    photoUrl: newImageUrl.value,
                    viewCount: 0,
                    commentCount: 0,
                    likeCount: 0,
                    dislikeCount: 0,
                    description: newPostText.value,
                    comments: [{}]

                }, )
        }
        else if (!newPostText.value && newImageUrl.value){
                 posts.value.unshift(
        {
        userName: "Kate Gray",
        postId: posts.value.length + 1,
        publishDate: nowDate.value.toLocaleString(),
        photoUrl: newImageUrl.value,
        viewCount: 0,
        commentCount: 0,
        likeCount: 0,
        dislikeCount: 0,
        description:"",
        comments: [{}] 
        }, )

        }

      ;

        newPostText.value = ""
        newImageUrl.value = ""

    }

    function addImage(e) {

    const image = e.target.files[0];
      if(image){
        const reader = new FileReader();
        reader.readAsDataURL(image);        
        reader.onload = e => {
            newImageUrl.value = e.target.result
        } 
    }
      else {

    }
}

*/


  //New with pinia
    
  import {usePostStore} from '../stores/PostStore.js'
  import {storeToRefs} from 'pinia'

  const store = usePostStore();

  
  const {posts,userAvatar} = storeToRefs(store)
  const {returnImageUrl,addPost,addImage} = store
  
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
        width: 3rem;
        border-radius: 50%;
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

    ul li input {
        background-color: var(--blue2);
        color: var(--white);
        padding: .3rem .9rem;
        border-radius: .1rem;
        font-size: .7rem;
        border: none !important;
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
            width: 60%;
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
            width: 60%;
        }

        .new_post_form {
            padding: 1rem;
            border: 1px solid rgb(238, 224, 224);
        }
    }
</style>