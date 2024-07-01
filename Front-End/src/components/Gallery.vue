<template>
    <div class="gallery border rounded-md   ">
        <div class="photos">
            <div v-for="(photo, index) in userPhotos" key="index" class="user_photos">
                <img :src="photo.url" alt="Error" class="gallery_image">
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

    let userPhotos = ref([{
            index: 1,
            url: "https://wpkixx.com/html/winku/images/resources/photo2.jpg"
        },
        {
            index: 2,
            url: "https://wpkixx.com/html/winku/images/resources/photo3.jpg"

        },
        {
            index: 3,
            url: "https://wpkixx.com/html/winku/images/resources/photo4.jpg"
        },
        {
            index: 4,
            url: "https://wpkixx.com/html/winku/images/resources/photo5.jpg"
        },

        {
            index: 5,
            url: "https://wpkixx.com/html/winku/images/resources/photo6.jpg"
        },
        {
            index: 6,
            url: "https://wpkixx.com/html/winku/images/resources/photo7.jpg"
        },
        {
            index: 7,
            url: "https://wpkixx.com/html/winku/images/resources/photo9.jpg"
        },
        {
            index: 8,
            url: "https://wpkixx.com/html/winku/images/resources/photo10.jpg"
        },
        {
            index: 9,
            url: "https://wpkixx.com/html/winku/images/resources/photo11.jpg"
        },
        {
            index: 10,
            url: "https://wpkixx.com/html/winku/images/resources/photo12.jpg"
        },
        {
            index: 11,
            url: "https://wpkixx.com/html/winku/images/resources/photo13.jpg"
        },
        {
            index: 12,
            url: "https://wpkixx.com/html/winku/images/resources/photo3.jpg"
        },
        {
            index: 13,
            url: "https://wpkixx.com/html/winku/images/resources/photo8.jpg"
        },
        {
            index: 14,
            url: "https://wpkixx.com/html/winku/images/resources/photo2.jpg"
        },
        {
            index: 15,
            url: "https://wpkixx.com/html/winku/images/resources/photo5.jpg"
        },
    ]);
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