<template>
    <!-- <div class="new_post_window bg-white px-3 py-5 rounded border">
        <img src="../assets/public/Images/user-avatar.jpg" alt="" class="user_avatar">
        <div class="new_post bg-white">
            <form action="" method="post" class="border">
                <textarea name="" id="" placeholder="write something" class="placeholder:text-gray-500"></textarea>
                <ul>

                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-music-note-beamed" viewBox="0 0 16 16">
                        <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13s1.12-2 2.5-2 2.5.896 2.5 2m9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2" />
                        <path fill-rule="evenodd" d="M14 11V2h1v9zM6 3v10H5V3z" />
                        <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4z" />
                    </svg>
                    </li>

                    <li>
                        <form action="" method="get" class="relative" >
                          <svg xmlns="http://www.w3.org/2000/svg" for="ff" width="22" height="22" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                            <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z"/>
                          </svg>
                          <input type="file" name="ff" @change="imageLoad" class="w-[1rem] opacity-0 absolute">
                        </form>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z"/>
                          </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                            <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0"/>
                          </svg>
                    </li>
                    <li>
                        <input type="submit" value="Post" >
                    </li>
                </ul>
            </form>
        </div>

        </input>
    </div> -->
</template>

<script setup>
import {ref} from 'vue'

let selectedImage = ref('');

function imageLoad(e) {
this.selectedImage.value = e.target.files[0]

}


</script>

<style scoped>
    /* .new_post_window {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: start;
    }

    .user_avatar {
        width: 3rem;
        border-radius: 50%;
        margin-right: .7rem ;
    }

    .new_post{
        width: 80%;
        display: flex;
        align-items: center;
        
    }
    textarea{
        width: 100%;
        height: 4.1rem;
        padding: .5rem;
        border: none;
        resize: none;

        
    }
    form{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: end;
        padding-bottom: .3rem;
    }
    ul{
        display: flex;
        width: 50%;
        justify-content: space-around;
    }
    ul li input{
        background-color: var(--blue2);
        color: var(--white);
        padding:.3rem .9rem;
        border-radius: .1rem ;
        font-size: .7rem;
        border: none !important;
    }
    textarea::placeholder{
        font-size: 1rem;
    }
    textarea:focus{
        outline: none;
    }
    textarea:focus body{
       filter: brightness(-50%);
    }
    body:has(.clicked-input) {
        transition: all .3s ease;
        background-color: black;
    }
    svg{
        color: rgb(79, 79, 79);
    } */
</style>