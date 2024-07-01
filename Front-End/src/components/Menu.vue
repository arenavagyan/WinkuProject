<template>
<div class="menu">
    <div class="user_name">
        <h6 class="name">{{ userName.name }} {{userName.surname}}</h6>
        <p class="user_position">{{ userName.position }}</p>
    </div>
    <ul class="ul_menu">
        <li class="li_menu"><a href="">Time Line</a></li>
        <li class="li_menu"><a href="/photos">Photos</a></li>
        <li class="li_menu"><a href="">Videos</a></li>
        <li class="li_menu"><a href="friends">Friends</a></li>
        <li class="li_menu"><a href="">Groups</a></li>
        <li class="li_menu"><a href="">About</a></li>
        <li class="li_menu"><a href="">More</a></li>
    </ul>

</div>
</template>

<script setup>
import {ref} from 'vue'

let userName = ref({
    name:"Janice",
    surname:"Griffith",
    position:"Group Admin"
})

</script>

<style>
.menu{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: var(--white);
    box-shadow: rgba(203, 208, 214, 0.2) 0px 8px 4px;

}
.name{
    color: var(--blue2);
}
h6{
    font-size: 1rem;
}    
.user_name{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-end;
    padding: .5rem 2rem;
}
.user_position{
    font-size: .5rem;
    padding: .2rem;
}
.ul_menu{
    display: flex;
    justify-content: space-around;
    width: 40%;
}
.ul_menu .li_menu a{
    font-size: .7rem;
    color: var(--dark);
    padding: .3rem;
    border-bottom: 2px solid transparent;
}

.ul_menu .li_menu a:hover{
    color: var(--blue2);
    border-bottom: 2px solid var(--blue2);
}


@media (max-width:480px) {
    .menu{
        margin-bottom: 1rem;
    }
    .ul_menu{
        width: 100%;
        padding: 2rem 0rem;
    
    }
    .ul_menu .li_menu a{
        font-size: 1.5rem;
    }
    .user_name{
        width: 18rem;
        align-items: center;
    }
    .user_name p{
        font-size: 1rem;
    }
    .user_name h6{
        font-size: 1.5rem;
    }
}


@media (min-width:481px) and (max-width:1024px) {
    .menu{
        margin-bottom: 1rem;
    }
    .ul_menu{
        width: 100%;
        padding: 2rem 0rem;
    
    }
    .ul_menu .li_menu a{
        font-size: 1.5rem;
    }
    .user_name{
        width: 18rem;
        align-items: center;
    }
    .user_name p{
        font-size: 1rem;
    }
    .user_name h6{
        font-size: 1.5rem;
    }
}


</style>