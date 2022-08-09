<template>
  <div>
    <div class="grid grid-cols-4 gap-2">
      
            <h2 id="anamnese_option5_question"> Nikotin, Alkohol, Drogen?</h2>
          <img class="w-20 h-20 self-center justify-self-center" src="@/assets/arrow.png" alt=""/>
          <h3 id="anamnese_option5_answer"> Ex-Raucher seit 20 Jahren, davor 35J geraucht (mal mehr, mal weniger)(0,5-1Pck), 1Bier/Tag, gelegentlich Rotwein mit seiner Frau beim Essen, andere Drogen werden verneint</h3>
           <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click="">
             Copy to Notepad
         </button>
          
       
      </div>
    
    </div>
 
</template>

<script>


</script>

<style scoped>
 h3 {
  background: #7fb78f;
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
  max-width: 20 px;
    /* width: 50%; */
  cursor: pointer;
  color: #444
}

h3:hover {
  background: rgb(39, 190, 107)
}
h2 {
  background: #c67e7e;
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
  max-width: 20 px;
    /* width: 50%; */
  cursor: pointer;
  color: #444
}

h2:hover {
  background: rgb(234, 25, 39)
}
.button {
  background: black;
  color: white;
 
  border-radius: 10px;
 align-self: center;
  height:50%;
  width: 20%; min-width: 100px;
  cursor: pointer;
  /* color: #444   */
}
</style>
