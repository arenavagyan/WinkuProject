<template>
    <div class="gallery border rounded-md   ">
        <div class="photos">
            <div class="user_photos">
                <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg" class="gallery_image">
                <img v-for="(photo, index) in userPhotosUrl" key="index" :src="photo" alt="" class="gallery_image">
            </div>
        </div>

        <button class="refresh_button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z" />
                <path
                    d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466" />
            </svg></button>
    </div>


</template>
<script setup>
    import {
        ref
    } from 'vue'

    const userPhotosUrl = ref([
]
    );
</script>

<style scoped>
    .gallery {
        width: 39%;
        background-color: var(--white);
        margin: 1.3rem;
        padding-top: 1rem;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: center;
        overflow: auto;

    }

    .photos {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .user_photos {
        width: 9.4rem;  
        padding: .5rem 0rem;
    }

    .gallery .user_photos img {
        width: 100%;
        padding:0rem .2rem;
    }

    .refresh_button {
        padding: .5rem;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        background-color: rgb(241, 241, 241);
        box-shadow: 0rem .2rem .5rem rgb(184, 183, 183);
        align-items: center;
        border: none;
        margin-top: 2rem;
    }

    .refresh_button svg {
        width: 1.4rem;
        height: auto;
    }

    .refresh_button:hover {
        background-color: var(--blue);
    }
    
    .refresh_button:hover svg {
        transform: rotate(360deg);
        color: white;
        transition: .25s !important;
    }
    .gallery_image{
     height: 9rem;
    }   
     .gallery_image:hover{
        transform: scale(1.05);
    }

    @media (min-width:481px) and (max-width:1024px) {
        .gallery {
        width: 97%;
        background-color: var(--white);
        margin: 1.3rem;
        padding-top: 1rem;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: center;
        padding-bottom: 2rem;
    }
    .user_photos {
        width: 22rem;  
        padding: .5rem 0rem;
    }
    .refresh_button svg{
        width: 3rem;
        height: 3rem;
    }
    .gallery_image:hover{
        transform: scale(1.02);
    }
    }

    @media(max-width:480px) {
        .gallery {
        width: 97%;
        background-color: var(--white);
        margin: 1.3rem;
        padding-top: 1rem;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: center;
        padding-bottom: 2rem;
    }
    .user_photos {
        width: 22rem;  
        padding: .5rem 0rem;
    }
    .refresh_button svg{
        width: 3rem;
        height: 3rem;
    }
    .gallery_image:hover{
        transform: scale(1.02);
    }
    
    }
    </style>