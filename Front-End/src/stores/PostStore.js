import {defineStore} from "pinia";
import {ref} from "vue";
import {localhost} from "@/main";
import axios from 'axios'
import {userId} from '../main'

export const usePostStore = defineStore('postStore', () => {

    //States


    const posts = ref([])
    const nowDate = ref('')
    // const newImageUrl = ref('')
    const newPostText = ref('')
    // const postAuthorAvatarRef = ref(null)
    const userName = ref('')
    // const lastPostId = ref(0)


    //Getters


   axios.get(`http://${localhost.value}/api/users/${userId.value}`)
        .then(res => userName.value = res.data.userName)
        .catch(e => console.log(e))

   axios.get(`http://${localhost.value}/api/posts`)
        .then(response => {
            posts.value = response.data
        })
        .catch(error => console.log(error))

        

    async function returnImageUrl(userId) {
       await axios.get(`http://${localhost.value}/api/users/${userId}`)
        .then(response => {
            return(`http://${localhost.value}/api/images/${response.data.avatar}`)
        })
        .catch(e=>console.log(e))
    }


   
    const addPost = async (text) => {
        
    nowDate.value = new Date()
    console.log();
    // lastPostId.value = posts.value[0].postId 
  
    try{
        await axios.post(`http://${localhost.value}/api/posts`,{
            'description':text,
            'user_id':userId.value,
            'status':1,
            'createdAt':new Date()
        })
        axios.get(`http://${localhost.value}/api/posts`)
        .then(response => {
            posts.value = response.data
        })
        .catch(error => console.log(error))
      
        newPostText.value = ''
    
        // posts.value.unshift(
        //     {
        //         userId: userId.value,
        //         postId: lastPostId.value + 1,
        //         createdAt: nowDate.value,
        //         imageUrl: null,
        //         videoUrl: null,
        //         viewCount: 0,
        //         commentCount: 0,
        //         likeCount: 0,
        //         dislikeCount: 0,
        //         description: text,
        //         comments: []
        //       }
        // )

    }
    catch(e){
        console.log(e.message);
    }



    /*    if (newPostText.value && !newImageUrl.value) {
            
           posts.value.unshift(

                {
                    description: text,
                    userId: userId.value,
                    postId: posts.value.length + 1,
                    createdAt: nowDate.value.toLocaleString(),
                    photoUrl: returnAvatarUrl(postAuthorAvatarRef),
                    viewCount: 0,
                    commentCount: 0,
                    likeCount: 0,
                    dislikeCount: 0,
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
        else if (!newPostText.value && newImageUrl.value) {
                posts.value.unshift({
                userName: "Kate Gray",
                postId: posts.value.length + 1,
                publishDate: nowDate.value.toLocaleString(),
                photoUrl: newImageUrl.value,
                viewCount: 0,
                commentCount: 0,
                likeCount: 0,
                dislikeCount: 0,
                description: "",
                comments: [{}]
            }, )

        }

        ;

        newPostText.value = ""
        newImageUrl.value = ""
*/
    }
/*
    function addImage(e) {

        const image = e.target.files[0];
        if (image) {
            const reader = new FileReader();
            reader.readAsDataURL(image);
            reader.onload = e => {
                newImageUrl.value = e.target.result
            }
        } 
    }
    */

    function returnAvatarUrl(imgTagRefName) {
        axios.get(`http://${localhost.value}/api/users/${userId.value}`)
          .then(res => { res = `http://${localhost.value}/image/${res.data.avatar}`;
                        imgTagRefName.value.src = res })
              
          }

    function returnPostAuthorAvatarUrl(id,imgTagRefName) {
            axios.get(`http://${localhost.value}/api/users/${id}`)
              .then(res => { res = `http://${localhost.value}/image/${res.data.avatar}`;
                            imgTagRefName.value.src = res })
                  
              }


    return {
        posts,
        userName,
        newPostText,
        addPost,
        // addImage,
        returnImageUrl,
        returnAvatarUrl,
        returnPostAuthorAvatarUrl,
    }
    
})