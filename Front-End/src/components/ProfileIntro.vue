<template>
    <div class="profile_intro">
        <ul class="ul_intro">
            <li>

                <div class="intro">
                    <h5 class="h5_friends"> Profile Intro</h5>

                    <div class="div_hr"></div>
                </div>
            </li>
            <li>
                <h6>Heading</h6>
                <p class="p_intro">
                    Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company.
                </p>
                <hr class="hr_intro">
            </li>
            <li>
                <h6>Fav Tv Show</h6>
                <p class="p_intro">
                    Sacred Games, Spartcus Blood, Games of theron
                </p>
                <hr class="hr_intro">
            </li>
            <li>
                <h6>Favourit Music</h6>
                <p class="p_intro">
                    Justin Biber, Nati Natsha, Shakira
                </p>
            </li>
        </ul>
    </div>

</template>

<script setup>

</script>

<style scoped>
    .profile_intro {
        width: 100%;
        display: flex;
        justify-content: flex-end;
        margin-bottom: 2rem;
    
    }

    .intro {
        background-color: var(--white);
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        }
        
        .ul_intro {
            width: 65%;
        display: flex;
        flex-direction: column;
        padding: 1rem;
        box-shadow: rgba(0, 0, 0, 0.03) 0px 0px 0px 1px;
        background-color: var(--white);
        border-radius: .3rem;
        margin: 1.3rem 0rem 0rem 1.3rem;
    }

    h5 {
        width: 100%;
        font-family: var(--serif);
        color: rgb(0, 0, 0);
        display: inline;
        padding:.1rem 0rem .4rem .5rem;
        font-weight: normal;
    }

    h6 {
        font-family: var(--serif);
        font-size: .75rem;
        color: rgb(75, 75, 75);
        padding: .5rem;
        margin-top: .8rem;
    }

    p {
        margin: .3rem 0rem;
        font-family: var(--serif);
        font-size: .75rem;
        color: rgb(122, 120, 120);
        padding: 0rem .2rem .6rem .6rem;
    }

    hr {
        display: block;
        height: 1px;
        border: 0;
        border-top: 1px solid #ccc;
        padding: 0;
    }

    @media (max-width:480px) {
        .ul_intro {
            width: 90%;
            padding-left: 1.5rem;
            padding-top: 2.5rem;
            margin-left : 0;
        }
        .h5_friends{
            font-size: 2.3rem;
        }
        .ul_intro h6{
            font-size: 1.8rem;
        }
        .ul_intro p{
            font-size: 1.5rem;
            color: rgb(103, 102, 102);
        }
        .ul_intro{
            width: 100%;
            margin: .5rem 2rem;
        }
    }

     @media (min-width:481px) and (max-width:1024px){
        .profile_intro{
            height:50rem;
            overflow: auto;
            margin-bottom: 0;
            
        }
       
        .ul_intro{
        
         width: 97%;
         margin: 0rem 1.5rem;  
         padding: 1.5rem; 
         padding-top: 4rem;  
                
        }
        .h5_friends{
            font-size: 2.3rem;
        }
        .ul_intro h6{
            font-size: 1.8rem;
        }
        .ul_intro p{
            font-size: 1.5rem;
            color: rgb(103, 102, 102);
        }
        .div_hr{
            background-color: var(--blue2);
    height: .1rem;
    width: 4rem;
    margin-left: .7rem;
        }
        
     }
</style>