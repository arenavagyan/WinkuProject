<template>
  <div class="friend_item">
    <div class="left_part_friends">
      <img :src="imageUrl" alt="" class="img_friend">

      <div class="friend_name_position">
        <h4 class="friend_name">{{friendName}} {{friendSurname}}</h4>
        <p class="friend_position">{{friendPosition}}</p>
      </div>
    </div>

    <div class="right_part_friends">
      <button class="friend_button">Unfriend</button>
      <button class="friend_button">Add Friend</button>
    </div>
  </div>
</template>

<script setup>
  const props = defineProps({
    url: String,
    name: String,
    surname: String,
    position: String

  })

  let imageUrl = props.url
  let friendName = props.name
  let friendSurname = props.surname
  let friendPosition = props.position
</script>

<style>
  .friend_item {
    padding: .2rem;
    display: flex;
    justify-content: space-between;
    border:1px solid rgba(95, 95, 95, 0.147);
    width: 100%;
    margin-top: 1rem !important;
    cursor: pointer;
  }

  .left_part_friends {
    width: 62%;
    display: flex;
    padding: 1rem;
  }

  .right_part_friends{
    width: 38%;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
  }

  .img_friend {
    width: 3rem;
    height: 3rem;
    border-radius: 50%;
  }

  .friend_name {
    font-size: .8rem;
    color: var(--dark);
    padding: .3rem;
  }

  .friend_name_position{
    display: flex;
    flex-direction: column;
    padding-left: 1.4rem;

  }

  .friend_position{
    color: var(--blue2);
    font-size: .6rem;
    padding: .2rem;
  }

  .friend_button{
    width: 4.4rem;
    border: none;
    border-radius: .3rem;
    font-size: .66rem;
    padding: .3rem;
    color: var(--white);

  }

  .friend_button:nth-child(1){
    background-color:gray;
  }
  .friend_button:nth-child(2){
    background-color:var(--blue2);
  }

  .friend_item:hover{
    box-shadow: rgba(50, 50, 93, 0.174) 0px 13px 27px -5px, rgba(0, 0, 0, 0.19) 0px 8px 16px -8px;
  }
  @media (max-width:480px) {
    .friend_item{
     padding: 1rem;
    }
    .img_friend{
      width:8rem;
      height:8rem;
    }
    .friend_name_position h4{
      font-size: 2rem;
    }
    .friend_name_position p{
      font-size: 1.5rem;
    }
    .right_part_friends button{
      width: 12rem;
      font-size: 1.5rem;
    }
  }
  @media (min-width:481px) and (max-width:1024px) {
    .friend_item{
     padding: 1rem;
    }
    .img_friend{
      width:8rem;
      height:8rem;
    }
    .friend_name_position h4{
      font-size: 2rem;
    }
    .friend_name_position p{
      font-size: 1.5rem;
    }
    .right_part_friends button{
      width: 12rem;
      font-size: 1.5rem;
    }
  }
  </style>