<template>

  <div class="popup  ">
    <div class="popup-inner     ">
     <button class="popup-close" @click="TogglePopup()"><img class="h-8 w-15" src="../../src/assets/return.png" alt="Workflow" />zurück zum vorigen Menü </button>
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
  bottom:0;
  display: flex;
  height: 100% ;
  z-index:99;
  background: rgba(14, 13, 13, 0.479);
  border:2px solid rgb(5,150,105);
  align-self: right;
  justify-self: right;

}

.popup-inner {
background: #fff;
padding: 50px ;
left:10;


/* margin-right: 400px; */
}
</style>

