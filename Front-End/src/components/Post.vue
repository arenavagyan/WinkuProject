<template>
  <div class="post flex justify-center flex-col w-full rounded-mg bg-white p-2 pb-8 rounded border">

    <!-- HEADER -->

    <div class="flex post_heading">
      <img :src="returnAvatar(userId)" alt="" class="user_avatar rounded-full w-9 h-auto m-2">

      <div class="w-full">
        <h6 class="user_name w-full text-xs text-cyan-600 ml-2 mt-2">{{props.userName}}</h6>
        <p class="date text-s ml-2 text-gray-500">Published: {{props.publishDate}}</p>
        
      </div>
    </div>

    <!-- POST -->

    <div class="post_image w-full p-2" v-if="videoUrl">
      <iframe :src="props.videoUrl" title="video" class="w-full h-64">
      </iframe>
    </div>
    <div v-else class="flex justify-center">
      <img :src="returnPostImage(userId,postId)" alt="" class="w-11/12">
    </div>

    <!-- LIKES,VIEWS -->

    <div class="stats flex items-center">

      <div class="like flex relative text-gray-600 m-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-eye-fill pt-1"
          viewBox="0 0 16 16">
          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
          <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
        </svg>
        <ins class="text-s no-underline">{{props.viewCount}}</ins>
      </div>

      <div class="like flex relative text-gray-600 m-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-wechat pt-1"
          viewBox="0 0 16 16">
          <path
            d="M11.176 14.429c-2.665 0-4.826-1.8-4.826-4.018 0-2.22 2.159-4.02 4.824-4.02S16 8.191 16 10.411c0 1.21-.65 2.301-1.666 3.036a.32.32 0 0 0-.12.366l.218.81a.6.6 0 0 1 .029.117.166.166 0 0 1-.162.162.2.2 0 0 1-.092-.03l-1.057-.61a.5.5 0 0 0-.256-.074.5.5 0 0 0-.142.021 5.7 5.7 0 0 1-1.576.22M9.064 9.542a.647.647 0 1 0 .557-1 .645.645 0 0 0-.646.647.6.6 0 0 0 .09.353Zm3.232.001a.646.646 0 1 0 .546-1 .645.645 0 0 0-.644.644.63.63 0 0 0 .098.356" />
          <path
            d="M0 6.826c0 1.455.781 2.765 2.001 3.656a.385.385 0 0 1 .143.439l-.161.6-.1.373a.5.5 0 0 0-.032.14.19.19 0 0 0 .193.193q.06 0 .111-.029l1.268-.733a.6.6 0 0 1 .308-.088q.088 0 .171.025a6.8 6.8 0 0 0 1.625.26 4.5 4.5 0 0 1-.177-1.251c0-2.936 2.785-5.02 5.824-5.02l.15.002C10.587 3.429 8.392 2 5.796 2 2.596 2 0 4.16 0 6.826m4.632-1.555a.77.77 0 1 1-1.54 0 .77.77 0 0 1 1.54 0m3.875 0a.77.77 0 1 1-1.54 0 .77.77 0 0 1 1.54 0" />
        </svg>
        <ins class="text-s no-underline">{{props.commentCount}}</ins>
      </div>

      <div class="like flex relative text-green-500 m-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart pt-1"
          viewBox="0 0 16 16">
          <path
            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
        </svg>
        <ins class="text-s no-underline">{{props.likeCount}}</ins>
      </div>

      <div class="like flex relative text-red-500 m-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
          class="bi bi-heart-pulse  pt-1" viewBox="0 0 16 16">
          <path
            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857q.09.083.176.171a3 3 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01zM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5" />
          <path
            d="M10.464 3.314a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.5a.5.5 0 0 0 0 1H4a.5.5 0 0 0 .416-.223l1.473-2.209 1.647 4.118a.5.5 0 0 0 .945-.049l1.598-5.593 1.457 3.642A.5.5 0 0 0 12 9h3.5a.5.5 0 0 0 0-1h-3.162z" />
        </svg>
        <ins class="text-s no-underline">{{props.dislikeCount}} 0</ins>
      </div>


      <a
        class="share_icon w-5 h-5 rounded-full flex items-center justify-center bg-black m-1 ease-linear duration-150 hover:w-6 hover:h-6">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
          class="bi bi-share-fill fill-white duration-150 share_icon-hover:fill-red" viewBox="0 0 16 16">
          <path
            d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5" />
        </svg>
      </a>
    </div>

    <!-- DESCRIPTION -->

    <p class="description text-xs p-2 text-gray-500 mb-4">{{props.description}}</p>

    <!-- COMMENTS -->

    <div v-for="(comment,index) in comments" :key="index" class="w-full com">

      <div v-if="comment.mainComment">
        <Comment :date="comment.date" :commentId="comment.commentId" :userId="comment.userId"
          :userName="comment.userName" :imageUrl="comment.imageUrl" :text="comment.text" class="mb-4" />


        <div v-for="(replyComment,index) in comment.repliedCommentIds" :key="index" class="w-full">
          <div v-for="(comment,index) in comments" :key="index">
            <div v-if="comment.commentId == replyComment">
              <Comment class="ml-12 mb-4" :date="comment.date" :commentId="comment.commentId" :userId="comment.userId"
                :userName="comment.userName" :imageUrl="comment.imageUrl" :text="comment.text" />
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- MORE COMMENTS -->

    <div v-if="comment" class="w-full flex justify-center">
      <a href=""
        class="more_comments w-22 text-sky-600 text-s border p-1 border-b-2 border-transparent font-bold mt-1 mb-4 hover:border-b-sky-600  ">More
        Comments</a>
    </div>
    <div class="w-full flex justify-center items-center p-2">
      <img src="https://wpkixx.com/html/winku/images/resources/friend-avatar10.jpg" alt=""
        class="user_avatar rounded-full w-7 h-auto mr-1 mt-2">
      <form action="" method="post" class="w-full ml-1 mt-2 ">
        <input type="text"
          class="comment_input rounded-sm w-full bg-gray-100 text-ss p-2 placeholder:text-gray-500 focus:outline-none active:outline-none"
          placeholder="Post your comment" @keydown.enter="addComment" :v-model="message">
      </form>
    </div>


  </div>
</template>

<script setup>
  import {
    ref
  } from 'vue'
  import axios from 'axios'
  import Comment from './Comment.vue'
  import {localhost} from '../main.js'

  

  const props = defineProps({
    userId:Number,
    postId:Number,
    userName: String,
    publishDate: String,
    photoUrl: String,
    videoUrl: String,
    viewCount: Number,
    commentCount: Number,
    likeCount: Number,
    dislikesCount: Number,
    description: String,
    Avatar:String,
    comments: Array
  })

  const defaultUserAvatar = ref(null)
  const userId = ref(0)
  const user = ref([])
  const postId = ref(0)

  userId.value = props.userId
  postId.value = props.postId
 
  axios.get(`http://${localhost.value}/api/defaultUser/avatar`)
  .then(response=> defaultUserAvatar.value = response.data)
  .catch(error => console.log(error))

  axios.get(`http://${localhost.value}/api/users/${userId.value}`)
         .then(response => {user.value = response.data})
         .catch(error => console.log(error))


  function returnPostImage(userId,postId) {
    return `http://${localhost.value}/api/${userId}/posts/${postId}/image`;

  }
         
  function returnAvatar(userId){


    return(`${localhost.value}/api/static/${userId}/avatar`)
    // else return(`http://${localhost.value}/api/defaultUser/avatar`)
  }


  const commentt = ref([])
  commentt.value = props.comments
  

  function addComment(e) {
    e.preventDefault();
    const nowDate = ref('')
    const message = ref('')
        nowDate.value = new Date()
        message.value = e.target.value.trim()


    if (message.value) {
      commentt.value.push({
        date: nowDate.value.toTimeString().slice(0,5),
        commentId: 1,
        userId: 1,
        userName: 'Jason Borne',
        imageUrl: 'https://wpkixx.com/html/winku/images/resources/comet-1.jpg',
        text: message.value,
        mainComment: true,
        repliedCommentIds: []
      });

    }
    e.target.value=''
  }

 
</script>

<style scoped>
  @media (max-width:480px) {
    .post {
      padding: 2rem;
    }

    .user_avatar {
      width: 7.5rem;
    }

    .user_name {
      font-size: 2.5rem;
    }

    .date {
      font-size: 1.8rem;
    }

    .post_heading {
      margin-left: 2rem;
      margin-bottom: 2rem;
    }

    .like svg {
      height: 3rem;
      width: 3rem;

    }

    .stats {
      margin-top: 1rem;
      margin-left: 2rem;
    }

    .stats div {
      margin-right: 2rem;
    }

    ins {
      font-size: 1.2rem;
    }

    .share_icon {
      width: 3rem;
      height: 3rem;
    }

    .share_icon svg {
      height: 1.5rem;
      width: 1.5rem;
    }

    .description {
      padding: 0 2rem;
      font-size: 1.7rem;
      line-height: 4rem;
    }

    .com {
      width: 100%;
    }

    .more_comments {
      font-size: 1.5rem;
    }

    
    .comment_input {
      height: 7rem;
      font-size: 2rem;
      padding-left: 2rem;
      
    }

    .comment_input::placeholder {
      font-size: 2rem;
    }

    .post_image iframe {
      height: 35rem
    }

  }

  @media (min-width:480px) and (max-width:1024px) {
    .post {
      padding: 2rem;
    }

    .user_avatar {
      width: 7.5rem;
    }

    .user_name {
      font-size: 2.5rem;
    }

    .date {
      font-size: 1.8rem;
    }

    .post_heading {
      margin-left: 2rem;
      margin-bottom: 2rem;
    }

    .like svg {
      height: 3rem;
      width: 3rem;

    }

    .stats {
      margin-top: 1rem;
      margin-left: 2rem;
    }

    .stats div {
      margin-right: 2rem;
    }

    ins {
      font-size: 1.2rem;
    }

    .share_icon {
      width: 3rem;
      height: 3rem;
    }

    .share_icon svg {
      height: 1.5rem;
      width: 1.5rem;
    }

    .description {
      padding: 0 2rem;
      font-size: 1.7rem;
      line-height: 4rem;
    }

    .com {
      width: 100%;
    }

    .more_comments {
      font-size: 1.5rem;
    }


    .post_image iframe {
      height: 35rem
    }

  }
</style>