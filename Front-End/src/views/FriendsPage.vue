<template>
  <div class="font-roboto  w-full flex-col bg-gray-100  ">
    <Header class="Header" />


                <div class="friends_page relative top-[3.6rem]">
                  
                  <Cover class="Cover" />
                  <Menu class="Menu" />
            
                  <div class="header_bottom flex w-full justify-center">
            
            
                    <div class="left_side flex-col w-4/12">
                      <Shortcuts class="Shortcuts" />
                      <ProfileIntro class="ProfileIntro" />
                    </div>

                    <Friends class="Friends w-4/12"/>

                    <!-- <div class="flex-col w-4/12">
                       <Following class="Following" /> 
                       <FriendsPart class="FriendsPart" /> 
                    </div> -->

                  </div>

                  <Footer class="Footer" />
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
</script>

<style>

@media (max-width:480px) {
  .friends_page{
    top: 0;
  }
  .header_bottom{
    flex-direction: column;
  }
  .left_side{
    width: 100%;
    display: flex;
    flex-direction:row;
    align-items: center;
    justify-content: center;
    margin-top: 1.7rem;
  }
  .ProfileIntro{
  position: sticky;
  top: 0;
  bottom: 0;
  margin-top: 2rem;
  }
  .Following,.FriendsPart{
    display: none !important;
  }
  
  .Header {
            background-color: #4BB5EF ;
            color: white;
            width: 100%;


        }

}

@media (min-width:481px) and (max-width:1024px) {
  .friends_page{
    top: 0;
  }
  .header_bottom{
    flex-direction: column;
  }
  .left_side{
    width: 100%;
    display: flex;
    flex-direction:row;
    align-items: start;
    margin-top: 1.7rem;
  }
  .ProfileIntro{
  position: sticky;
  top: 0;
  bottom: 0;
  }
  .Following,.FriendsPart{
    display: none !important;
  }
  
  

}

</style>