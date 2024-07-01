<template>
<div class="shortcuts">
    <ul class="ul_shortcuts">
        <li class="li_shortcut">
            <h5 class="h5_shortcuts">Shortcuts</h5>
            <div class="div_hr"></div>
        </li>
        <li class="li_shortcut">
            <a href="/">
                <i class="fa-regular fa-clipboard"></i>
               <p class="shortcut">News Feed</p>
            </a>
        </li>
        <li class="li_shortcut">
            <a href="">
                <i class="fa-solid fa-computer-mouse"></i>
                <p class="shortcut">Inbox</p>
            </a>
        </li>
        <li class="li_shortcut">
            <a href="">
                <i class="fa-regular fa-copy"></i>
                <p class="shortcut">My Pages</p>
            </a>
        </li>
        <li class="li_shortcut">
            <a href="Friends">
                <i class="fa-regular fa-user"></i>
                <p class="shortcut">Friends</p>
            </a>
        </li>
        <li class="li_shortcut">
            <a href="photos">
                <i class="fa-regular fa-image"></i>
                <p class="shortcut">Images</p>
            </a>
        </li>
        <li class="li_shortcut">
            <a href="">
                <i class="fa-solid fa-video"></i>
                <p class="shortcut">Videos</p>
            </a>
        </li>
        <li class="li_shortcut">
            <a href="/chatPage">
                <i class="fa-regular fa-face-smile"></i>
                <p class="shortcut">Messages</p>
            </a>
        </li>
        <li class="li_shortcut">
            <a href="">
                <i class="fa-regular fa-bell "></i>
                <p class="shortcut">Notifications</p>
            </a>
        </li>
        <li class="li_shortcut">
            <a href="/backendTest">
                <i class="fa-solid fa-share "></i>
                <p class="shortcut">Back End</p>
            </a>
        </li>
        <li class="li_shortcut">
            <a href="">
                <i class="fa-regular fa-chart-bar "></i>
                <p class="shortcut">Insights</p>
            </a>
        </li>
        <li class="li_shortcut">
            <a href="/landingPage">
                <i class="fa-solid fa-power-off "></i>
                <p class="shortcut">Logout</p>
            </a>
        </li>
    </ul>
</div>
</template>

<script setup>
</script>

<style>
.shortcuts{
    width: 100%;
    font-family: var(--serif);
    display: flex;
    justify-content: flex-end;
    padding-top: 0 !important;
    margin-top: 1.3rem;
}
.ul_shortcuts{
    width: 65%;
    display: flex;
    flex-direction: column;
    padding: 1rem;
    box-shadow: rgba(0, 0, 0, 0.03) 0px 0px 0px 1px;
    background-color: var(--white);
    border-radius: .3rem;
}
.h5_shortcuts{
    padding: .5rem;
    font-weight: normal;
}
.div_hr{
    background-color: var(--blue2);
    height: .1rem;
    width: 4rem;
    margin-left: .7rem;
    
}
.fa-clipboard{
    color: black;
}
.li_shortcut{
    padding: .3rem;
}
.li_shortcut a p{
    font-size: .7rem;
}
.li_shortcut a i{
    padding: .5rem;
    color: var(--gray);
}

.li_shortcut a{

    display: flex;
    align-items: center;
    color: var(--gray);
}
.li_shortcut a:hover .shortcut{
    transition: .05s;
    color: var(--blue2);
}

@media (max-width:480px) {

    .shortcuts{
    justify-content: center;
    }

    .ul_shortcuts{
     width: 100%;
     font-size: 2.9rem;
     padding: 1rem;
     margin: 1rem 2rem;
    }
    .h5_shortcuts{
        font-size: 2.5rem;
    }

    .li_shortcut a p{
        
        font-size: 2rem;
    }
    .li_shortcut{
        margin: 1.8rem .7rem;
    }
    .li_shortcut a i{
        margin-right: .5rem;
    }
    .div_hr{
        width: 7rem;
            height: .25rem;
            margin-left: .7rem;
            border: none;
    }
}

@media (min-width:481px) and (max-width:1024px){
    .shortcuts{
    justify-content: center;
    margin-top: 0;
    padding-top: 1rem;
    
    }

    .ul_shortcuts{
     width: 100%;
     font-size: 2.9rem;
     padding: 1rem;
     margin: 0rem 2rem;
    }
    .h5_shortcuts{
        font-size: 2.5rem;
    }

    .li_shortcut a p{
        
        font-size: 2rem;
    }
    .li_shortcut{
        margin: 1.8rem .7rem;
    }
    .li_shortcut a i{
        margin-right: .5rem;
    }
    .div_hr{
        width: 7rem;
            height: .25rem;
            margin-left: .7rem;
            border: none;
    }
    
}
 


</style>