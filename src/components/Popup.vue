<template>
  <div class="popup">
    <div class="popup-inner">
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
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 99;
  background: rgba(0, 0, 0, 0.2);

  display: flex;
  justify-content: center;
  align-items: center;
}

.popup-inner {
background: #fff;
padding: 50px;
/* margin-right: 400px; */
}
</style>

