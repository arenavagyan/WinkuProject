<template>
    <div class="max-[720px]:flex-col min-[720px]:h-[62rem] min-[1024px]:h-[150vh] min-[1400px]:h-[100vh]
                max-[1025px]:w-full
                landing w-full flex justify-between items-center h-[40rem]">
        <div class="max-[720px]:w-full  blue_part bg-[#1fb6ff] w-1/2 h-full flex-col justify-center">
            <div class="max-[720px]:p-[3rem]   w-full flex-col pt-[7.5rem]">
                <h1 class="text-white text-[2.5rem] font-[hobo] text-center">Winku</h1>
                <p class=" text-xs text-white text-center">Winku is free to use for as long as you want with two active
                    projects.</p>
                <div
                    class="icon w-[9rem] h-[9rem] bg-[#0a98dc] rounded-full flex items-center justify-center m-auto mt-[4rem]">
                    <div class="icon w-[7.3rem] h-[7.3rem] bg-sky-600 rounded-full flex items-center justify-center">
                        <img src="https://wpkixx.com/html/winku/images/wink.png" alt="">
                    </div>
                </div>
                <a class="w-full flex justify-center mt-[3.4rem] text-white">Follow Us On</a>
            </div>
        </div>

        <div class="white_part
                    max-[480px]:w-[20rem]
                    max-[720px]:w-[40rem] max-[720px]:p-[2rem] max-[720px]:w-full 
                    bg-white w-1/2 h-full flex justify-center items-center">

            <form class="login_form max-[480px]:w-full  max-[720px]:w-[35rem] login p-8 w-[25rem]" v-if="pageStatus">


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
                    <button
                        class="py-2 bg-[#4f93ce] text-white rounded-md text-[.8rem] font-bold px-[1.5rem] my-[1rem] mx-[.2rem]">Login</button>
                    <button
                        class="py-2 bg-[#4f93ce] text-white rounded-md text-[.8rem] font-bold px-[1.5rem] my-[1rem] mx-[.2rem]"
                        @click="pageStatus=!pageStatus">Register</button>
                </div>
            </form>

            <!-- Registration -->

            <form class="max-[480px]:w-[7rem] max-[720px]:w-[16rem] login registration_form p-8 w-[25rem]" v-else>
                <h1 class="text-[2rem] text-gray-600 font-bold">Register</h1>
                <p class="text-ss text-gray-400 mt-[1rem] mb-[3rem]">Don’t use Winku Yet? <a
                        class="text-sky-500 cursor-pointer">Take the tour</a> or <a
                        class="text-sky-500 cursor-pointer">Join now</a></p>

                <input v-model="registrationData.name_lastname" type="text" placeholder="First & Last Name"
                    class="m-[.5rem] border-b w-full p-1 focus:outline-none">
                <input v-model="registrationData.username" type="text" placeholder="User Name"
                    class="m-[.5rem] border-b w-full p-1 focus:outline-none">
                <input v-model="registrationData.password" type="password" placeholder="Password"
                    class="m-[.5rem] border-b w-full p-1 focus:outline-none">

                <div class="flex w-[10rem] mt-[1.5rem] ">
                    <div class="flex items-center ml-[1rem] text-gray-500"><input type="radio" name="same"
                            class="scale-150" @click="registrationData.male_female='male'">
                        <p class="text-[.63rem] m-1">Male</p>
                    </div>
                    <div class="flex items-center ml-[1rem] text-gray-500"><input type="radio" name="same"
                            class="scale-150" @click="registrationData.male_female='female'">
                        <p class="text-[.63rem] m-1">Female</p>
                    </div>
                </div>

                <input v-model="registrationData.email" type="password" placeholder="E-mail"
                    class="m-[.5rem] mt-[1rem] border-b w-full p-1 focus:outline-none">


                <div class=" w-full flex-col">

                    <div class="checkbox-wrapper-27 mt-2">
                        <label class="checkbox flex items-center">
                            <input type="checkbox">
                            <span class="checkbox__icon">
                            </span>
                            <span class="text-s text-gray-500">Accept Terms & Conditions ?
                            </span>
                        </label>
                    </div>
                    <a class="text-sky-500 text-ss mt-[2rem] ml-[2rem]">Already have an account</a>

                </div>


                <div class="flex">

                    <button
                        class="py-2 bg-[#4f93ce] text-white rounded-md text-[.8rem] font-bold px-[1.5rem] my-[1rem] mx-[.2rem]"
                        @click="register">Register</button>
                </div>
            </form>
        </div>

    </div>
</template>

<script setup>
    import {
        ref
    } from 'vue'

    const registrationData = ref({
        name_lastname: '',
        username: '',
        password: '',
        email: '',
        male_female: ''

    })

    const pageStatus = ref('login')

    function register(e) {

        e.preventDefault();
        console.log(registrationData.value);

    }
</script>


<style>

</style>













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
    
        .white_part {
            margin-top: 2rem;
            width: 100%;
        }

        .login_form {
            width: 70%;
        }
        .login_form p,a{
            font-size: 1.5rem;
        }
        .login_form span{
            font-size: 1.2rem;
        }
        .login_form h1{
            font-size: 2.9rem;
        }
        .login_form input::placeholder{
            font-size: 1.5rem;
            padding: 1rem;
        }
      

        .registration_form {
            width: 70%;
            margin-top: 4rem;
        }
        .registration_form p,a{
            font-size: 1.5rem;
        }
        .registration_form span{
            font-size: 1.2rem;
        }
        .registration_form h1{
            font-size: 2.9rem;
        }
        .registration_form input::placeholder{
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
    
        .white_part {
            margin-top: 2rem;
            width: 100%;
        }

        .login_form {
            width: 60%;
        }
    }
</style>