<template>
   
    
    
    <div class="user_photos font-roboto  w-full flex-col bg-gray-100">
      <Header class=" Header" />
      <div class="cover_menu relative top-[3.6rem]">
      <Cover class="Cover w-full" />
      <Menu class="Menu" />
      
      <div class="header_bottom flex w-full justify-center">
        
        
        <div class="left_side flex-col w-4/12">
          <Shortcuts class="Shortcuts" />
          <ProfileIntro class="ProfileIntro" />
        </div>
        <Gallery class="Gallery" />
                 
         <div class="flex-col w-4/12">
             <Following class="Following" />
         <FriendsPart class="FriendsPart" />
         </div>
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
    import Gallery from '../components/Gallery.vue'
    import Following from '../components/Following.vue'
    import FriendsPart from '../components/FriendsPart.vue'
    import ProfileIntro from '../components/ProfileIntro.vue'
    import Footer from '../components/Footer.vue'
  </script>
  
  <style>
    
    @media (min-width:481px) and (max-width:1024px) {
      .left_side{
    width: 100%;
    display: flex;
    flex-direction:row;
    align-items: start;
    margin-top: 1.7rem;
  }
  .header_bottom{
    flex-direction: column;
  }
  .ProfileIntro{
    position: sticky;
    top:5.5rem
  }
  .Gallery{
    width: 100%;
  }
  .Following{
    display: none;
  }
  .FriendsPart{
    display: none !important;
  }
  .cover_menu{
    top: 0;
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
  .header_bottom{
    flex-direction: column;
  }
  
  .Gallery{
    width: 100%;
    
  }
  .ProfileIntro{
    margin-top: 2rem;
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
        
    }

  </style>