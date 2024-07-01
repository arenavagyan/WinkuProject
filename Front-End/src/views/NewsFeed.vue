<template>
    <div class="news_feed font-roboto  w-full">
        <Header class="Header" />

        <div class="header_bottom flex w-full justify-center relative top-14">

            <div class="first_flex_item flex-col w-4/12">
                <Shortcuts class="Shortcuts" />
                <ProfileIntro class="ProfileIntro sticky top-[2.3rem]" />
            </div>

            <div class="feed_section flex-col w-6/12 px-2">

                <Feed class="Feed w-full " />

            </div>
            <div class="last_section flex-col w-4/12">
                <Following class="Following" />
                <FriendsPart class="FriendsPart" />
            </div>
        </div>
        <Footer class="Footer" />
    </div>
</template>

<script setup>
    import Header from '../components/Header.vue';
    import Shortcuts from '../components/Shortcuts.vue'
    import Feed from '../components/Feed.vue'
    import Following from '../components/Following.vue'
    import FriendsPart from '../components/FriendsPart.vue'
    import ProfileIntro from '../components/ProfileIntro.vue'
    import Footer from '../components/Footer.vue'
</script>

<style scoped>
    body {
        background-color: var(--gray-light);
    }

    .Header {
        position: fixed;
        background-color: var(--white);
    }

    .header_bottom {
        background-color: var(--gray-light);
    }



    @media (max-width: 480px) {


        .news_feed {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .Header {
            background-color: #4BB5EF;
            color: white;
            width: 100%;


        }

        .first_flex_item {
            width: 100%;
            margin-top: 1rem;
        }

        .Shortcuts {
            width: 100%;
        }

        .header_bottom {
            flex-direction: column;
            padding-top: 3rem;
            top: 0;

        }

        .ProfileIntro {
            width: 100%;
            justify-content: center;
        }

        .feed_section {
            width: 100%;
            justify-content: center;
            align-items: center
        }

        .Following {
            display: none;
        }

        .last_section {
            width: 100%;
        }

        .FriendsPart {
            width: 98%;
            margin-bottom: 2rem;
        }
      
        .Footer{
            margin-top: 0;
        }
    }

    @media (min-width:481px) and (max-width:1024px){
        .header_bottom{
            flex-direction: column;
            align-items: center;
        }

        .first_flex_item{
            width: 100%;
            display: flex;
            flex-direction: row;
            margin-top: 3rem;

        }
        .Shortcuts{
            width: 50%;
        }
        .ProfileIntro{
            width: 50%; 
        }
        .Following{
            display: none;
        }
        .FriendsPart{
            display:none;
        }
    }
</style>