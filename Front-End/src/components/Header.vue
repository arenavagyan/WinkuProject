<template>
    <nav class=" navbar fixed">
        <a href="/">
            <img src="../assets/public/logo.png" alt="Winku" class="black_logo">
            <img src="https://wpkixx.com/html/winku/images/logo2.png" class="hidden white_logo" alt="Winku">
        </a>

        <input type="search" name="search" class="menu_search" id="" placeholder="search">
        <div class="sections">
            <ul class="links">
                <li class="li_home"><a href="" class="main_link">Home <i class="fa-solid fa-caret-down"></i></a>
                    <ul class="ul_home">
                        <li><a href="http://">Home Social</a></li>
                        <li><a href="http://">Home Social 2</a></li>
                        <li><a href="http://">Home Company</a></li>
                        <li><a href="http://">Login Page</a></li>
                        <li><a href="http://">Logout Page</a></li>
                    </ul>
                </li>


                <li class="li_home"><a href="">Timeline <i class="fa-solid fa-caret-down"></i></a>
                    <div class="extra_space">
                        <ul class="ul_home">
                            <li><a href="http://">Timeline</a></li>
                            <li><a href="http://">Timeline Friends</a></li>
                            <li><a href="http://">Timeline Groups</a></li>
                            <li><a href="http://">Timeline Pages</a></li>
                            <li><a href="http://">Timeline Photos</a></li>
                            <li><a href="http://">Timeline Videos</a></li>
                            <li><a href="http://">Post Single</a></li>
                        </ul>
                    </div>
                </li>

                <li class="li_home"><a href="">Account Settings <i class="fa-solid fa-caret-down"></i></a>

                    <ul class="ul_home">
                        <li><a href="http://">Create Fav Page</a></li>
                        <li><a href="http://">Edit Account Settings</a></li>
                        <li><a href="http://">Edit-Interest</a></li>
                        <li><a href="http://">Edit-Password</a></li>
                        <li><a href="http://">Edit Profile Basics</a></li>
                        <li><a href="http://">Edit Work Education</a></li>
                        <li><a href="http://">Message Box</a></li>
                    </ul>
                </li>

                <li class="li_home"><a href="">More Pages <i class="fa-solid fa-caret-down"></i></a>
                    <ul class="ul_home">
                        <li><a href="http://">404 Error Page</a></li>
                        <li><a href="http://">About</a></li>
                        <li><a href="http://">Contact</a></li>
                        <li><a href="http://">Faq's Page</a></li>
                        <li><a href="http://">Insights</a></li>
                        <li><a href="http://">Knowledge Base</a></li>
                        <li><a href="http://">Widgts</a></li>
                    </ul>

                </li>

            </ul>

        </div>

        <div class="icons">
            <ul class="ul_icon">
                <li class="li_icon" id="search_icon">
                    <a @click="searchShow=!searchShow"><i class="fa-solid fa-search"></i></a>
                    <div class="extra_space"></div>
                    <form action="" v-show="searchShow">
                        <input type="search" name="" id="search" placeholder="Search Friend"><i
                            class="fa-solid fa-search"></i>
                    </form>
                </li>
                <li class="li_icon"><a href="http://"><i class="fa-solid fa-home"></i></a></li>
                <li class="li_icon"><a href="http://"><i class="fa-solid fa-bell"></i>
                        <p class="notification_quantity">20</p>
                    </a></li>
                <li class="li_icon"><a href="http://"><i class="fa-solid fa-message"></i>
                        <p class="message_quantity">12</p>
                    </a></li>
                <li class="li_icon"><a @click="langShow=!langShow"><i class="fa-solid fa-earth"></i></a>
                    <ul class="ul_lang" v-show="langShow">
                        <li class="li_lang"><i class="fa-solid fa-check"></i>English</li>
                        <li class="li_lang">Arabic</li>
                        <li class="li_lang">Dutch</li>
                        <li class="li_lang">French</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="dropdown_menu">
            <div class="image_menu_icon">
                <div class="user_image">
                    <a  @click="isIconMenuOpened=!isIconMenuOpened"><img src="../assets/public/Images/user-avatar.jpg" class="user_avatar_header" alt=""></a>
                    <div v-show="isIconMenuOpened" class="absolute top-[4rem] right-[.5rem] w-[12rem] p-1 bg-white ">
                        <ul class="text-ss">
                            <li class="p-[.5rem] hover:bg-gray-100 hover:text-sky-500"><a href="">Online</a></li>
                            <li class="p-[.5rem] hover:bg-gray-100 hover:text-sky-500"><a href="">Away</a></li>
                            <li class="p-[.5rem] hover:bg-gray-100 hover:text-sky-500"><a href="">Offline</a></li>
                            <li class="p-[.5rem] hover:bg-gray-100 hover:text-sky-500"><a href="">View Profile</a></li>
                            <li class="p-[.5rem] hover:bg-gray-100 hover:text-sky-500"><a href="">Edit Profile</a></li>
                            <li class="p-[.5rem] hover:bg-gray-100 hover:text-sky-500"><a href="">Activity Log</a></li>
                            <li class="p-[.5rem] hover:bg-gray-100 hover:text-sky-500"><a href="">Account Settings</a></li>
                            <li class="p-[.5rem] hover:bg-gray-100 hover:text-sky-500"><a href="">Log Out</a></li>
                        </ul>
                    </div>
                </div>
                <i class="fa-solid fa-bars" @click="openRightMenu=!openRightMenu"></i>
            </div>

            <div class="right_menu absolute top-[4rem] right-0 w-[18rem] flex-col justify-center items-center bg-white p-[.6rem]
            " v-show="openRightMenu">
                <h5 class="font-sans w-full pt-[1rem] text-center">GENERAL SETTING</h5>
                <form action="" class="right_menu_form w-full p-[.8rem] absolute p-t-[1.9rem] right-0 bg-white flex-col">
                    <ul class="relative w-full " >
                        <li  class="flex w-full justify-between pb-[1rem] z-1">
                            <p>Use Night Mode</p><input type="checkbox" name="" id="checkbox1" v-model="isActive[0]">

                        </li>

                        <li  class="flex w-full justify-between pb-[1rem] z-1">
                            <p>Notifications</p><input type="checkbox" name="" id="checkbox1" v-model="isActive[1]">
                        </li>
                        <li  class="flex w-full justify-between pb-[1rem] z-1">
                            <p>Notification Sound</p><input type="checkbox" name="" id="checkbox1"
                                v-model="isActive[2]">
                        </li>
                        <li  class="flex w-full justify-between pb-[1rem] z-1">
                            <p>My Profile</p><input type="checkbox" name="" id="checkbox1" v-model="isActive[3]">
                        </li>
                        <li class="flex w-full justify-between pb-[1rem] z-1">
                            <p>Show Profile</p><input type="checkbox" name="" id="checkbox1" v-model="isActive[4]">
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
</template>




<script setup>
    import {
        ref
    } from 'vue';

    let searchShow = ref(false);
    let langShow = ref(false);
    let openRightMenu = ref(false);
    let isIconMenuOpened = ref(false)
    let isActive = ref([true, false, true, false, false])
</script>




<style>
    :root {
        --blue: #007bff;
        --blue2: #088dcd;
        --indigo: #6610f2;
        --purple: #6f42c1;
        --pink: #e83e8c;
        --red: #dc3545;
        --orange: #fd7e14;
        --yellow: #ffc107;
        --green: #28a745;
        --teal: #20c997;
        --cyan: #17a2b8;
        --white: #fff;
        --gray: #6c757d;
        --gray-light: #f4f2f2;
        --gray-dark: #343a40;
        --primary: #007bff;
        --secondary: #6c757d;
        --success: #28a745;
        --info: #17a2b8;
        --warning: #ffc107;
        --danger: #dc3545;
        --light: #f8f9fa;
        --dark: #343a40;
        --breakpoint-xs: 0;
        --breakpoint-sm: 576px;
        --breakpoint-md: 768px;
        --breakpoint-lg: 992px;
        --breakpoint-xl: 1200px;
        --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    }

    * {
        box-sizing: border-box;
        transition: .2s all;
    }

    .navbar {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
        width: 100%;
        padding: .25rem 0rem;
        background-color: var(--white);
        box-shadow: rgba(148, 147, 147, 0.15) 1.95px 1.95px 2.6px;
        z-index: 1;
    }



    .sections {
        width: 30rem;
        display: flex;
    }

    .links {
        display: flex;
        justify-content: center;
        list-style: none;
        font-family: var(--font-family-sans-serif);
        font-size: .7rem;
    }


    .links li a {
        color: black;
    }

    .li_home {
        position: relative;
        margin-right: .3rem;
        padding: 1rem 0rem;
    }

    .li_home li {
        padding-bottom: .5rem;
    }

    .links li a {
        padding: .7rem;
    }

    .icons {
        width: 15%;
    }

    .ul_home li {
        padding: .3rem .3rem .3rem 0rem;
    }

    .ul_home {
        border-top: 2px solid var(--blue);
        width: 10rem;
        display: none;
        position: absolute;
        top: 3.15rem;
        background-color: var(--white);

    }

    .li_home:hover .ul_home {
        display: block;

    }

    .ul_home li {
        padding: .4rem 0rem;
    }

    .ul_home li a {
        padding: .5rem;
        color: var(--dark);

    }

    .ul_home li:hover {
        padding-left: .4rem;
        background-color: rgb(242, 242, 242);
    }

    .ul_home li:hover a {
        color: var(--blue2);

    }

    .ul_icon {
        display: flex;
        justify-content: space-between;
    }

    .ul_icon li {
        position: relative;
    }

    .ul_icon li a {
        color: black;

    }

    .ul_icon li a i {
        font-size: .9rem;
    }

    .notification_quantity {
        position: absolute;
        color: var(--cyan);
        font-style: var(--font-family-monospace);
        font-size: .7rem;
        top: .7rem;
        left: .5rem;

    }

    .message_quantity {
        position: absolute;
        color: var(--cyan);
        font-style: var(--font-family-monospace);
        font-size: .7rem;
        top: .7rem;
        left: .5rem;

    }

    .user_image {
        width: 1.5rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .user_image img {
        width: 100%;
        border-radius: 50%;
    }

    #search_icon {
        display: flex;
        flex-direction: column;
        position: relative;
    }

    #search_icon form {
        position: absolute;
        top: 3rem;
        right: 0rem;
        height: 2.2rem;
        width: 15rem;
        border: none;
        box-shadow: .5rem .5rem 1rem gray;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: var(--white);
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

    }

    #search_icon form input {
        width: 90%;
        height: 100%;
        border: none;
    }

    #search_icon form i {
        width: 10%;
    }


    #search_icon form input::placeholder {
        padding-left: .5rem;
        font-family: var(--font-family-sans-serif);
        font-size: .7rem;
    }

    .li_icon {
        position: relative;
    }

    .ul_lang {
        font-family: var(--font-family-sans-serif);
        font-size: .8rem;
        position: absolute;
        display: flex;
        flex-direction: column;
        top: 3rem;
        background-color: var(--white);
        z-index: 1;
        width: 8rem;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

    }

    .ul_lang li {
        padding: .5rem .5rem .5rem 0rem;
        display: flex;
        justify-content: center;


    }

    .ul_lang li i {
        padding-right: 1rem;
    }

    .ul_lang li:hover {
        background-color: silver;
        cursor: pointer;
    }

    .image_menu_icon{
        display: flex;
        width: 3rem;
        justify-content: space-between;
        align-items: center;
    }

    a {
        text-decoration: none;
        cursor: pointer;

    }

    li {
        list-style: none;
    } 

    .menu_search{
        width: 90%;
        display: none;
    }

    @media (max-width:480px) {
        .sections .links .li_home a{
            color: white !important;
        }
        .navbar{
            position:relative !important;

        }
        .black_logo{
            display: none;
        }
        .white_logo{
            display: block;
            margin: 1.7rem;
            width: 16rem;
        }
        .menu_search{
            display: block;
            font-size: 2.3rem;
            border-radius:.7rem;
            padding:.5rem .5rem .5rem 2rem;

            
        }
        .menu_search::placeholder{
            color: gray;
        }
        .sections{
            display: none;
        }
        .icons{
            display: none;
        }
        .navbar{
            flex-direction: column;
            padding-bottom: 1rem;
        
        }
        .dropdown_menu{
            display: none;
        }


    }

    @media (min-width:481px) and (max-width:1024px) {
        .navbar{
            position: relative;
        }
        .sections{
            display: none;
        }
        .icons{
            display: none;
        }
        .navbar{
            padding: 1rem;
            font-size: 3rem;
            justify-content: space-between;
        }
        .user_image a{
            width: 30rem;
        }
        .dropdown_menu{
            margin-right: 1.5rem;
        }
        .user_avatar_header{
 display: none;
        }
        .feed_section{
            width: 100%;
        }
    }

</style>