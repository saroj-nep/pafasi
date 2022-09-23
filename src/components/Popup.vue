<template>

  <div class="popup  ">
    <div class="popup-inner     ">
     <button class="popup-close" @click="TogglePopup()"><img class="h-10 w-10" src="../../src/assets/return.png" alt="Workflow" /> </button>
     <!-- <br><br><br> -->
     <slot />
    </div>
  </div>
</template>

<script>
export default {
    props: ['TogglePopup'],
}
</script>

<style scoped>
.popup {
  position: fixed;
  top: 0;
  left:0;
  right:0;
  bottom: 0;
 
  margin-top:3.5%;
  
  background: rgba(14, 13, 13, 0.479);
  border:2px solid rgb(5,150,105);
  height:inherit;
  align-self: center;
  justify-self: center;
  align-content: center;
  justify-content: center;
  overflow-y: auto;
}

.popup-inner {
background: #fff;
padding: 50px ;
left:10;
height: 100%;
overflow-y: auto;

/* margin-right: 400px; */
}
</style>

