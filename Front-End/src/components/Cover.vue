<template>
    <div id="cover_section" ref="coverSection">
        <div class="bottom_side">
            <div class="left_side">
                <a href="">
                    <img :src="userAvatar" alt="User Avatar" id="user_avatar" class="user_avatar"></a>
                <div class="change_image">
                    <form class="edit"><i class="fa fa-camera-retro"></i>
                        <p>Edit Cover Photo</p>
                    </form>
                </div>
            </div>
            <div class="right_side">
                <p class="p_followers">1205 followers</p>
                <button class="add_button">Add Friend</button>
            </div>
        </div>
    </div>
</template>




<script setup>
    import {
        ref,
        nextTick
    } from 'vue'
    import axios from 'axios'

    const userAvatar = ref('')

    const userCover = ref('')

    const coverSection = ref(null)

    const user_id = ref(1)
    /*
    
    function arrayBufferToBase64(buffer) {
        let binary = '';
        const bytes = new Uint8Array(buffer);
        const len = bytes.byteLength;
        for (let i = 0; i < len; i++) {
            binary += String.fromCharCode(bytes[i]);
        }
        return window.btoa(binary);
    }


    function fetchAndConvertUserAvatar(imageName) {
        axios.get(`http://127.0.0.1:8000/api/static/${user_id.value}/avatar/${imageName}`, {
                responseType: 'arraybuffer'
            })
            .then(response => {
                const base64String = arrayBufferToBase64(response.data);
                userAvatar.value = `data:image/jpeg;base64,${base64String}`;

            })
            .catch(error => {
                console.error('Error fetching the image:', error);
            });

    }

    function fetchAndConvertUserCover(imageName) {
        axios.get(`http://127.0.0.1:8000/api/static/${user_id.value}/cover/${imageName}`, {
                responseType: 'arraybuffer'
            })
            .then(response => {
                const base64String = arrayBufferToBase64(response.data);
                userCover.value = `data:image/jpeg;base64,${base64String}`;
                coverSection.value.style.backgroundImage = `url(${userCover.value})`;

            })
            .catch(error => {
                console.error('Error fetching the image:', error);
            });

    }

    



    fetchAndConvertUserAvatar('user-avatar.jpg')
    fetchAndConvertUserCover('cover.jpg')
    */
    
</script>



<style>
    #cover_section {
        height: 20rem;
        width: 100%;
        background-color: #898787;
        background-size: 100%;
        background-position: top;
        display: flex;
        justify-content: space-around;
        align-items: flex-end;


    }

    .user_avatar {
        border-radius: 50%;
        border: 5px solid white;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    }

    .edit {
        width: 8.5rem;
        padding: .5rem 1.2rem;
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        background-color: rgba(0, 0, 0, 0.632);
        color: white;
        border-radius: .3rem;
        border: 1px solid transparent;
        cursor: pointer;

    }

    .edit:hover {
        background-color: transparent;
        border: 1px solid var(--blue);
    }

    .fa-caret-camera {
        color: black;
        font-size: 1rem;
    }

    .edit p {
        font-size: .6rem;
    }

    .left_side {
        display: flex;
        justify-content: space-between;
        width: 19rem;
        align-items: center;

    }

    .add_button {
        width: 6rem;
        padding: .3rem;
        color: var(--white);
        background-color: #088dcd;
        border: 1px solid transparent;
        border-radius: .2rem;
        font-size: .7rem;
    }

    .add_button:hover {
        border: 1px solid #088dcd;
        color: #088dcd;
        background-color: transparent;
    }

    .right_side {

        display: flex;
        justify-content: space-between;
        width: 14rem;
        align-items: center;

    }

    .bottom_side {
        width: 87%;
        display: flex;
        justify-content: space-between;
        position: absolute;
        top: 11.5rem;
    }

    .p_followers {
        color: white;
    }

    @media (max-width:480px) {
        .user_avatar {
            width: 14rem;
        }

        .bottom_side {
            width: 100%;
            top: 5rem;
            padding: 0rem 2rem;
            justify-content: space-between;

        }

        .left_side {
            flex-direction: row !important;
            justify-content: flex-start;
        }

        .change_image {
            height: 100%;
            display: flex;
            align-items: center;
            margin-left: 1rem;
        }

        .change_image form {
            width: 10rem;
            display: flex;
            align-items: center;
            padding: .5rem;
        }

        .change_image form i {
            font-size: 1.8rem;
            margin-right: .8rem;
        }

        .change_image form p {
            font-size: 1.2rem;

        }

        .right_side {
            flex-direction: column;
            justify-content: center;
            width: 30%;

        }

        .right_side p {
            font-size: 2rem;
        }

        .right_side button {
            width: 15rem;
            font-size: 2rem;
        }
    }

    @media (min-width:481px) and (max-width:1024px) {
        .user_avatar {
            width: 14rem;
        }

        .bottom_side {
            width: 100%;
            top: 5rem;
            padding: 0rem 2rem;
            justify-content: space-between;

        }

        .left_side {
            width: 50%;
            display: flex;
            justify-content: start;
            align-items: center;
        }

        .change_image {
            height: 100%;
            display: flex;
            align-items: center;
            margin-left: 1rem;
        }

        .change_image form {
            width: 10rem;
            display: flex;
            align-items: center;
            padding: .5rem;
        }

        .change_image form i {
            font-size: 1.8rem;
            margin-right: .8rem;
        }

        .change_image form p {
            font-size: 1.2rem;

        }

        .right_side {
            flex-direction: column;
            justify-content: center;
            width: 50%;

        }

        .right_side p {
            font-size: 1.8rem;
        }

        .right_side button {
            width: 10rem;
            font-size: 1.5rem;
        }
    }
</style>