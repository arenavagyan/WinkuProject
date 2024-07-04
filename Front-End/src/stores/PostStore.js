import {defineStore} from "pinia";
import {ref} from "vue";
import {localhost} from "@/main";
import axios from 'axios'

export const usePostStore = defineStore('postStore', () => {

    //States

    const posts = ref([])
    const nowDate = ref('')
    const newImageUrl = ref('')
    const newPostText = ref('')

    //Getters



   axios.get(`http://${localhost.value}/api/posts`)
        .then(response => {
            posts.value = response.data
            posts.value.forEach(element => {
                axios.get(`http://${localhost.value}/api/posts/${element.postId}/comments`)
                    .then(response => {
                        element.comments.push(response.data);
                        
                    })
                    .catch(error => console.log(error))
            });
        })
        .catch(error => console.log(error))

        

   async function returnImageUrl(userId) {
       await axios.get(`http://${localhost.value}/api/users/${userId}`)
        .then(response => {
            return(`http://${localhost.value}/api/images/${response.data.avatar}`)
        })
        .catch(e=>console.log(e))
    }

    function addPost(e) {
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

    }

    function addImage(e) {

        const image = e.target.files[0];
        if (image) {
            const reader = new FileReader();
            reader.readAsDataURL(image);
            reader.onload = e => {
                newImageUrl.value = e.target.result
            }
        } else {

        }
    }



    return {
        posts,
        returnImageUrl,
        addPost,
        addImage
    }

})