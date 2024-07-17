<template>
    <div class="landing w-full flex justify-between items-center h-[40rem]">
        <div class="blue_part bg-[#1fb6ff] w-1/2 h-full flex-col justify-center pb-32">
            <div class="w-full flex-col pt-[7.5rem]">
                <h1 class="text-white text-[2.5rem] font-[hobo] text-center">Winku</h1>
                <p class="winku_text text-xs text-white text-center">Winku is free to use for as long as you want with two active
                    projects.</p>
                <div
                    class="icon w-[9rem] h-[9rem] bg-[#0a98dc] rounded-full flex items-center justify-center m-auto mt-[4rem]">
                    <div class="icon w-[7.3rem] h-[7.3rem] bg-sky-600 rounded-full flex items-center justify-center">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyQUI0MzQ2Q0I1OTBFODExODM1Nzk4NEM1RUJCNkQwMCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpFRDlFQkM5QzkxNDUxMUU4QjlCM0ZCQTg2NEY1REZGOCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpFRDlFQkM5QjkxNDUxMUU4QjlCM0ZCQTg2NEY1REZGOCIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjJFQjQzNDZDQjU5MEU4MTE4MzU3OTg0QzVFQkI2RDAwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJBQjQzNDZDQjU5MEU4MTE4MzU3OTg0QzVFQkI2RDAwIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+lQ06lgAAAotJREFUeNqkU79rVEEQ/mZ337vLJeTHiZeghSEmGtQUErWQqI0ExFIhjTb+A5G0KsHGSlBJq5UiJxaCP9KKSEoVhNgYwUIxMYlncne53L23M85eLghps7DsvN2Z75v5Zh6JCHazDHa5XOf9T00j5JGBR6JGHVaRRTeBdWeN3jNNVNJc79fBxzODPZ8FPotL367AkfhtsOEG6BZBph1kQU8NZFgCUsHZGtuiWnhaHlo6JdlnG2kO8408XK7pJKiyfVD2djwmvwLwZKSBHSbRXMRuiB3PGHNbqP5j+vfJYSyetpqYt7YO12YZyoiGmHllHY9Ivgf2wJyxRk+SJMVNywwhQq+ropRa6nCsBdusqabAhheI+KmYeCxvG/cKitxOCdZTpQGxtDQKugSQrsiLkoyxyLwTMkh0i7rp5Rzr0ypnkOiXVQmDqCJbkmYp3Jog7IV1b2djIxUTnupsEBlCmxUs+gz+ctTkjFUbVitsCidR/yabJ2XvZkMmTviuS4UuKutixvIHFqeMCkbSHJCghQYe0QrPayeuVrw7wU0oNH1ylmccxZm+zZp/vZpGy3q/oDqsBAcF6kthBjzTnu0M0NIh1a8cfDEC/3G9qD2y+cLI0nJpMra0N6gfBPOBX6g1UP9XyMmoQ0zpVF1TM8mdCRR+fryeP3j4pVchBVv/BrXYdi4tBV0uedgd41d7pG325TWTfHkvPYeOF/2Bkf21tdKoUYFoR2CACh2KDb/NR3zZhs6FTm3qW7VaQee7Isy+gVfSf4ykXjujYhluNk3L0UDFDHM/1+HonJCDjrYOn90iMsaimz3M0CjsjedI1kqFxMs1VeGoTqiLiKs5I2+U80VD5zajQnGrun8CDACV7TI3vbfwBwAAAABJRU5ErkJggg==" alt="">
                    </div>
                </div>
                <a class="w-full flex justify-center mt-[3.4rem] text-white">Follow Us On</a>
            </div>
        </div>

        <div class="white_part
                    max-[480px]:w-[20rem]
                    max-[720px]:w-[40rem] max-[720px]:p-[2rem] max-[720px]:w-full 
                    bg-white w-1/2 h-full flex justify-center items-center">

            <form class="login_form login p-16 w-[25rem]">


                <h1 class="text-[2rem] text-gray-600 font-bold">Login</h1>
                <p class="text-ss text-gray-400 mt-[1rem] mb-[3rem]">Don’t use Winku Yet? <a
                        class="text-sky-500 cursor-pointer">Take the tour</a> or <a
                        class="text-sky-500 cursor-pointer">Join now</a></p>

                <input type="text" placeholder="Username" class="m-[.5rem] border-b w-full p-1 focus:outline-none" required>
                <input type="password" placeholder="Password" class="m-[.5rem] border-b w-full p-1 focus:outline-none" required>



                <div class=" w-full flex justify-between items-center">

                    <div class="checkbox-wrapper-27 mt-6">
                        <label class="checkbox flex items-center">
                            <input type="checkbox">
                            <span class="checkbox__icon">
                            </span>
                            <span class="text-s text-gray-500"> Always Remember Me
                            </span>
                        </label>
                    </div>
                    <a class="text-sky-500 text-ss">Forget Password?</a>

                </div>


                <div class="flex">
                    <button class="log_reg_btn py-2 bg-[#4f93ce] text-white rounded-md text-[.8rem] font-bold px-[1.5rem] my-[1rem] mx-[.2rem]" @click="login">Login</button>
                    <button class="log_reg_btn py-2 bg-[#4f93ce] text-white rounded-md text-[.8rem] font-bold px-[1.5rem] my-[1rem] mx-[.2rem]"><a href="/registration">Register</a></button>
                </div>
            </form>

          </div>
    </div>
</template>

<script setup>
    import {
        ref
    } from 'vue'

    import {useLoginStore} from '../stores/LoginStore.js'  
    import {storeToRefs} from 'pinia'
    const store = useLoginStore();
    const {email,password} = storeToRefs(store)
    const {login} = store

</script>
<style scoped>
    .login {
        box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 60px 0px;
    }


    .checkbox-wrapper-27 .checkbox {
        cursor: pointer;
        -webkit-tap-highlight-color: transparent;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    .checkbox-wrapper-27 .checkbox>input[type="checkbox"] {
        position: absolute;
        opacity: 0;
        z-index: -1;
    }

    .checkbox-wrapper-27 .checkbox__icon {
        display: inline-block;
        color: #999;
        vertical-align: middle;
        margin-right: 5px;
    }

    .checkbox-wrapper-27 input[type="checkbox"]:checked~.checkbox__icon {
        color: #2A7DEA;
    }

    .checkbox-wrapper-27 .checkbox__icon:before {
        font-family: "icons-27";
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .checkbox-wrapper-27 .icon--check:before,
    .checkbox-wrapper-27 input[type="checkbox"]:checked~.checkbox__icon:before {
        content: "\e601";
    }

    .checkbox-wrapper-27 .icon--check-empty:before,
    .checkbox-wrapper-27 .checkbox__icon:before {
        content: "\e600";
    }

    @font-face {
        font-family: "icons-27";
        font-weight: normal;
        font-style: normal;
        src: url("data:application/x-font-woff;charset=utf-8;base64,d09GRk9UVE8AAAR4AAoAAAAABDAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABDRkYgAAAA9AAAAPgAAAD4fZUAVE9TLzIAAAHsAAAAYAAAAGAIIvy3Y21hcAAAAkwAAABMAAAATBpVzFhnYXNwAAACmAAAAAgAAAAIAAAAEGhlYWQAAAKgAAAANgAAADYAeswzaGhlYQAAAtgAAAAkAAAAJAPiAedobXR4AAAC/AAAABgAAAAYBQAAAG1heHAAAAMUAAAABgAAAAYABlAAbmFtZQAAAxwAAAE5AAABOUQYtNZwb3N0AAAEWAAAACAAAAAgAAMAAAEABAQAAQEBCGljb21vb24AAQIAAQA6+BwC+BsD+BgEHgoAGVP/i4seCgAZU/+LiwwHi2v4lPh0BR0AAAB8Dx0AAACBER0AAAAJHQAAAO8SAAcBAQgPERMWGyBpY29tb29uaWNvbW9vbnUwdTF1MjB1RTYwMHVFNjAxAAACAYkABAAGAQEEBwoNL2X8lA78lA78lA77lA6L+HQVi/yU+JSLi/iU/JSLBd83Fffsi4v77Pvsi4v37AUOi/h0FYv8lPiUi4v33zc3i/s3++yLi/fs9zeL398F9wCFFftN+05JzUdI9xr7GveR95FHzwUO+JQU+JQViwwKAAMCAAGQAAUAAAFMAWYAAABHAUwBZgAAAPUAGQCEAAAAAAAAAAAAAAAAAAAAARAAAAAAAAAAAAAAAAAAAAAAQAAA5gEB4P/g/+AB4AAgAAAAAQAAAAAAAAAAAAAAIAAAAAAAAgAAAAMAAAAUAAMAAQAAABQABAA4AAAACgAIAAIAAgABACDmAf/9//8AAAAAACDmAP/9//8AAf/jGgQAAwABAAAAAAAAAAAAAAABAAH//wAPAAEAAAAAAACkYCfgXw889QALAgAAAAAAz65FuwAAAADPrkW7AAD/4AIAAeAAAAAIAAIAAAAAAAAAAQAAAeD/4AAAAgAAAAAAAgAAAQAAAAAAAAAAAAAAAAAAAAYAAAAAAAAAAAAAAAABAAAAAgAAAAIAAAAAAFAAAAYAAAAAAA4ArgABAAAAAAABAA4AAAABAAAAAAACAA4ARwABAAAAAAADAA4AJAABAAAAAAAEAA4AVQABAAAAAAAFABYADgABAAAAAAAGAAcAMgABAAAAAAAKACgAYwADAAEECQABAA4AAAADAAEECQACAA4ARwADAAEECQADAA4AJAADAAEECQAEAA4AVQADAAEECQAFABYADgADAAEECQAGAA4AOQADAAEECQAKACgAYwBpAGMAbwBtAG8AbwBuAFYAZQByAHMAaQBvAG4AIAAxAC4AMABpAGMAbwBtAG8AbwBuaWNvbW9vbgBpAGMAbwBtAG8AbwBuAFIAZQBnAHUAbABhAHIAaQBjAG8AbQBvAG8AbgBHAGUAbgBlAHIAYQB0AGUAZAAgAGIAeQAgAEkAYwBvAE0AbwBvAG4AAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA==") format("woff");
    }

    @media (max-width: 480px){
        .landing{
            flex-direction: column;
        }
        .blue_part{
            width: 100%;
        }
        .winku_text{
            font-size: 1.7rem;
            font-style: italic;
        }
    
        .white_part {
            margin-top: 2rem;
            width: 100%;
        }

        .login_form {
            width: 70%;
            
        }
        .login_form p{
            font-size: 2.5rem;
        }
        a{
            font-size: 3.5rem !important;
        }
        .login_form span{
            font-size: 1.9rem;
        }
        .login_form h1{
            font-size: 3.5rem;
        }
        .login_form input::placeholder{
            font-size: 1.5rem;
            padding: 1rem;
        }
    
        
    }

    @media (min-width: 480px) and (max-width:1024px) {
        .landing{
            flex-direction: column;
        }
        .blue_part{
            width: 100%;
        }
        .winku_text{
            font-size: 1.7rem;
            font-style: italic;
        }
        .white_part {
            margin-top: 10rem;
            width: 100%;
        }

        .login_form {
            width: 90%;
        }
        .login_form p,a{
            font-size: 2.2rem;
        }
        .login_form span{
            font-size: 1.9rem;
        }
        .login_form h1{
            font-size: 3.5rem;
        }
        .login_form input{
            margin:2rem 0;
            font-size: 2.5rem;
        }
        .login_form input::placeholder{
            font-size: 2rem;
            padding:1rem .5rem;
            padding-bottom:.5rem ;
        }
        .log_reg_btn{
            
            font-size: 2rem;
            font-weight: normal;
            margin: 2rem .5rem; 

        }

    }
</style>