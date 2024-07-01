<template>
    <div class="font-roboto  w-full flex-col bg-gray-100  ">
        <Header class="Header" />


        <div class="header_menu relative top-[3.6rem]">
            <Cover class="Cover w-full" />
            <Menu class="Menu" />

            <div class="header_bottom flex w-full justify-center">


                <div class="shortcuts_chatPage flex-col w-3/12">
                    <Shortcuts class="Shortcuts" />
                </div>

                <div class="chat_section flex-col w-7/12 bg-white border rounded-md m-[1.3rem] mb-0 p-3">

                    <div class="flex-col my-3 mx-1">
                        <a href="" class="w-[7.5rem] flex justify-between items-center  h-6 p-1 mb-1 a_all_messages">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-bell flex"
                                fill="#088DCD" viewBox="0 0 16 16">
                                <path
                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                            </svg>
                            <p class="p_all_messages"> All Messages</p>
                        </a>
                        <div class="div_hr2 bg-[var(--blue2)] h-[2px] w-12"></div>
                    </div>
                    <div class="flex w-full">

                        <div class="friends_list flex-col p-1 w-[12rem] border-r h-[22rem] overflow-hidden hover:overflow-y-visible">
                            <div class="friends_list flex w-full relative " v-for="(friend,index) in userChats"
                                :key="index">

                                <button class="chatMember_button border-b px-1 py-2 w-full text-ss flex items-center"
                                    @click="chatWith=friend.friendId">
                                    <img :src="friend.friendAvatarUrl" class="rounded-full w-[1.8rem] mr-2">
                                    <p>{{friend.friendName}}</p></button>
                                <div class="status_round" v-if="friend.friendStatus == 'online'">
                                    <div
                                        class="w-[.5rem] h-[.5rem] border-[.15rem] border-green-500  bg-white rounded-full absolute left-1 bottom-1.5">
                                    </div>
                                </div>
                                <div class="status_round" v-else-if="friend.friendStatus == 'away'">
                                    <div
                                        class="w-[.5rem] h-[.5rem] border-[.15rem] border-yellow-400  bg-white rounded-full absolute left-1 bottom-1.5">
                                    </div>
                                </div>
                                <div class="status_round" v-else>
                                    <div
                                        class="w-[.5rem] h-[.5rem] border-[.15rem] border-gray-400  bg-white rounded-full absolute left-1 bottom-1.5">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--Main Chat -->

                        <div class="flex-col w-[34rem]">

                            <!-- Header (Image,Status)-->

                            <div class="flex border-b">
                                <div v-for="(chat,index) in userChats" :key="index">
                                    <div v-if="chat.friendId === chatWith" class="flex p-2">
                                        <img :src="chat.friendAvatarUrl" alt="" class="mx-2 rounded-full">
                                        <div class="flex-col">
                                            <h4 class="text-[.9rem]"> {{chat.friendName}}</h4>
                                            <p class="text-s italic text-gray-400">{{chat.friendStatus}}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Messages -->

                            <div class="chat flex max-h-[15.5rem] overflow-hidden hover:overflow-y-visible px-1">
                                <div v-for="(chat,index) in userChats" :key="index">
                                    <div v-if="chat.friendId === chatWith">
                                        <Chat :friendId="chat.friendId" :friendName="chat.friendName"
                                            :friendAvatarUrl="chat.friendAvatarUrl" :friendStatus="chat.friendStatus"
                                            :messages="chat.messages" class="w-[30.5rem]"
                                            :userAvatarUrl="user.userAvatarUrl" />
                                    </div>
                                </div>
                            </div>


                            <div class="form border w-full">


                                <v-form id="messageForm" action="" method="get" class="flex items-center p-[.1rem]">

                                    <textarea id="messageForm"  @keydown.enter="addMessage($event.target.value)"
                                        class="w-full resize-none focus:outline-none text-ss p-2"></textarea>
                                    <button  @click="addMessage($event.target.value)" form="messageForm"
                                        class="bg-sky-500 rounded-full p-2 w-8 h-8 flex items-center justify-center cursor-pointer" type="submit">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                            class="bi bi-send-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                                        </svg>

                                    </button>
                                </v-form>


                            </div>

                        </div>


                    </div>
                </div>
            </div>

            <Footer />

        </div>
    </div>
</template>

<script setup>
    import Header from '../components/Header.vue';
    import Cover from '../components/Cover.vue';
    import Menu from '../components/Menu.vue'
    import Shortcuts from '../components/Shortcuts.vue'
    import Friends from '../components/Friends.vue'
    import Following from '../components/Following.vue'
    import FriendsPart from '../components/FriendsPart.vue'
    import ProfileIntro from '../components/ProfileIntro.vue'
    import Footer from '../components/Footer.vue'
    import Chat from '../components/Chat.vue'
    import {
        ref
    } from 'vue'

    const user = ref({
        userAvatarUrl: "https://wpkixx.com/html/winku/images/resources/user-avatar.jpg"
    })

    let userChats = ref([

        {
            friendId: 1,
            friendName: "Molly Cyrus",
            friendStatus: "online",
            friendAvatarUrl: "https://wpkixx.com/html/winku/images/resources/friend-avatar2.jpg",

            messages: [{
                    messageId: 1,
                    messageText: "what's liz short for? :)",
                    isUser: false,
                },
                {
                    messageId: 2,
                    messageText: "Elizabeth lol",
                    isUser: true,
                },
                {
                    messageId: 3,
                    messageText: "wanna know whats my second guess was?",
                    isUser: true,
                },
                {
                    messageId: 4,
                    messageText: "yes",
                    isUser: false,
                },
                {
                    messageId: 5,
                    messageText: "Disney's the lizard king",
                    isUser: true,
                },
                {
                    messageId: 6,
                    messageText: "i know him 5 years ago",
                    isUser: true,
                },
                {
                    messageId: 7,
                    messageText: "i know him 5 years ago",
                    isUser: true,
                },
                {
                    messageId: 8,
                    messageText: "i know him 5 years ago",
                    isUser: true,
                },
                {
                    messageId: 9,
                    messageText: "i know him 5 years ago",
                    isUser: true,
                }

            ]
        },

        {
            friendId: 2,
            friendName: "Andrew",
            friendAvatarUrl: "https://wpkixx.com/html/winku/images/resources/friend-avatar3.jpg",
            friendStatus: "away",
            messages: [{
                    messageId: 1,
                    messageText: "It",
                    isUser: false,
                },
                {
                    messageId: 2,
                    messageText: "Works",
                    isUser: true,
                },
                {
                    messageId: 3,
                    messageText: "!!!!",
                    isUser: true,
                },
                {
                    messageId: 4,
                    messageText: "yes",
                    isUser: false,
                },
                {
                    messageId: 5,
                    messageText: "Woww",
                    isUser: true,
                },
                {
                    messageId: 6,
                    messageText: "Great",
                    isUser: true,
                }
            ]
        },

        {
            friendId: 3,
            friendName: "Jason Bourne",
            friendAvatarUrl: "https://wpkixx.com/html/winku/images/resources/friend-avatar.jpg",
            friendStatus: "online",
            messages: [{
                    messageId: 1,
                    messageText: "It",
                    isUser: false,
                },
                {
                    messageId: 2,
                    messageText: "Works",
                    isUser: true,
                },
                {
                    messageId: 3,
                    messageText: "!!!!",
                    isUser: true,
                },
                {
                    messageId: 4,
                    messageText: "yes",
                    isUser: false,
                },
                {
                    messageId: 5,
                    messageText: "Woww",
                    isUser: true,
                },
                {
                    messageId: 6,
                    messageText: "Great",
                    isUser: true,
                }
            ]
        },

        {
            friendId: 4,
            friendName: "Sara Grey",
            friendAvatarUrl: "https://wpkixx.com/html/winku/images/resources/friend-avatar4.jpg",
            friendStatus: "offline",
            messages: [{
                    messageId: 1,
                    messageText: "Hi",
                    isUser: true,
                },
                {
                    messageId: 2,
                    messageText: "Hello",
                    isUser: false,
                },
                {
                    messageId: 3,
                    messageText: "How are you?",
                    isUser: true,
                },
                {
                    messageId: 4,
                    messageText: "Fine, thanks",
                    isUser: false,
                },
                {
                    messageId: 5,
                    messageText: "Great",
                    isUser: true,
                },
                {
                    messageId: 6,
                    messageText: "!!",
                    isUser: true,
                }
            ]
        },

        {
            friendId: 5,
            friendName: "Bill Doe",
            friendAvatarUrl: "https://wpkixx.com/html/winku/images/resources/friend-avatar5.jpg",
            friendStatus: "online",
            messages: [{
                    messageId: 1,
                    messageText: "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.",
                    isUser: false,
                },
                {
                    messageId: 2,
                    messageText: "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.",
                    isUser: true,
                },
                {
                    messageId: 3,
                    messageText: "!!!!",
                    isUser: true,
                },
                {
                    messageId: 4,
                    messageText: "yes",
                    isUser: false,
                },
                {
                    messageId: 5,
                    messageText: "Woww",
                    isUser: true,
                },
                {
                    messageId: 6,
                    messageText: "Great",
                    isUser: true,
                }
            ]
        },

        {
            friendId: 6,
            friendName: "Shen Cornery",
            friendAvatarUrl: "https://wpkixx.com/html/winku/images/resources/friend-avatar6.jpg",
            friendStatus: "away",
            messages: [{
                    messageId: 1,
                    messageText: "It",
                    isUser: false,
                },
                {
                    messageId: 2,
                    messageText: "Works",
                    isUser: true,
                },
                {
                    messageId: 3,
                    messageText: "!!!!",
                    isUser: true,
                },
                {
                    messageId: 4,
                    messageText: "yes",
                    isUser: false,
                },
                {
                    messageId: 5,
                    messageText: "Woww",
                    isUser: true,
                },
                {
                    messageId: 6,
                    messageText: "Great",
                    isUser: true,
                }
            ]
        },

        {
            friendId: 7,
            friendName: "Kill Bill",
            friendAvatarUrl: "https://wpkixx.com/html/winku/images/resources/friend-avatar.jpg",
            friendStatus: "offline",
            messages: [{
                    messageId: 1,
                    messageText: "It",
                    isUser: false,
                },
                {
                    messageId: 2,
                    messageText: "Works",
                    isUser: true,
                },
                {
                    messageId: 3,
                    messageText: "!!!!",
                    isUser: true,
                },
                {
                    messageId: 4,
                    messageText: "yes",
                    isUser: false,
                },
                {
                    messageId: 5,
                    messageText: "Woww",
                    isUser: true,
                },
                {
                    messageId: 6,
                    messageText: "Great",
                    isUser: true,
                }
            ]
        },

        {
            friendId: 8,
            friendName: "Jasmin Walia",
            friendAvatarUrl: "https://wpkixx.com/html/winku/images/resources/friend-avatar8.jpg",
            friendStatus: "online",
            messages: [{
                    messageId: 1,
                    messageText: "Okay",
                    isUser: false,
                },
                {
                    messageId: 2,
                    messageText: "Thanks",
                    isUser: true,
                },
                {
                    messageId: 3,
                    messageText: "For answering",
                    isUser: true,
                },
                {
                    messageId: 4,
                    messageText: "You're welcome",
                    isUser: false,
                },
                {
                    messageId: 5,
                    messageText: "/",
                    isUser: true,
                },
                {
                    messageId: 6,
                    messageText: "//",
                    isUser: true,
                }
            ]
        },

        {
            friendId: 9,
            friendName: "Neclos Cage",
            friendAvatarUrl: "https://wpkixx.com/html/winku/images/resources/friend-avatar6.jpg",
            friendStatus: "online",
            messages: [{
                    messageId: 1,
                    messageText: "It",
                    isUser: false,
                },
                {
                    messageId: 2,
                    messageText: "Works",
                    isUser: true,
                },
                {
                    messageId: 3,
                    messageText: "!!!!",
                    isUser: true,
                },
                {
                    messageId: 4,
                    messageText: "yes",
                    isUser: false,
                },
                {
                    messageId: 5,
                    messageText: "Woww",
                    isUser: true,
                },
                {
                    messageId: 6,
                    messageText: "Great",
                    isUser: true,
                }
            ]
        }
    ])

    function addMessage(message) {
        if (message.trim()) {
            
        
        userChats.value.forEach(element => {
            if (element.friendId == chatWith.value) {
                (element.messages.push({
                    messageId: element.messages.length + 1,
                    messageText: messageForm[1].value,
                    isUser: true,
                }));
                messageForm[1].value = ""
                event.preventDefault()

            }
        });
    }
    }

    let chatWith = ref(userChats.value[0].friendId)

</script>

<style scoped>
    ::-webkit-scrollbar {
        width: 7px;
    }

    ::-webkit-scrollbar:hover {
        width: 15px;
    }

    ::-webkit-scrollbar-track {
        background: transparent;
        border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb {
        background: #cfcfcf;
        border-radius: 5px;
        transition: 1s !important;
    }



    ::-webkit-scrollbar-thumb:hover {
        background: #999999;
        width: 10px;


    }
    @media (min-width:480px) and (max-width:1024px){
    .header_menu{
    top: 0;
   }
   .shortcuts_chatPage{
    width: 100%;
   }
   .header_bottom{
    flex-direction: column;
   }
   .shortcuts_chatPage{
    width: 100%;
   }
   .chat_section{
    width: 96%;
    margin: auto;
    margin-top: 1rem;
   }
   .p_all_messages{
    font-size: 1.8rem;
   }
   .a_all_messages{
    width: 14rem;

   }
   .a_all_messages svg{
    width: 1.5rem;
    height: 1.5rem;
    margin: .2rem;
   }
   .chatMember_button img{
    width: 5rem;
    height: 5rem;
   }
   .chatMember_button p{
    display: none;
   }
   .status_round div{
    left: .7rem;
    bottom: .7rem;
    width: 1rem;
    height: 1rem;
    border-width: .25rem;
   }
   .chatMember_button{
    width: 6rem;
   }
   .friends_list{
    width: 6rem;
   }
   .friends_list{
    width:6rem
   }
   .chat{
    width: 100%;
   }
   .messages{
    width: 100%
   }
    
}  
    @media (max-width:480px) {
      .left_side{
    width: 100%;
    display: flex;
    flex-direction:column;
    align-items: start;
    margin-top: 1.7rem;
  }
  .chat_section{
    width: 100%;
  }
  .header_bottom{
    flex-direction: column;
  }
  
  .Gallery{
    width: 100%;
    
  }
  .ProfileIntro{
    margin-top: 2rem;
  }
  .Shortcuts{
    display: none;
  }
  .Following{
    display: none;
  }
  .FriendsPart{
    display: none !important;
  }
  .Header {
            background-color: #4BB5EF ;
            color: white;
            width: 100%;


        }
  .cover_menu{
    top: 0;
  }
  .header_menu{
    top: 0;
   }
        
    }
</style>