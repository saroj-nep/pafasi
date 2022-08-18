<template>
  <div>
    <div class="grid grid-cols-4 gap-2">
      
            <h2 id="anamnese_option9_question"> Psyche</h2>
          <img class="w-20 h-20 self-center justify-self-center" src="@/assets/arrow.png" alt=""/>
          <h3 id="anamnese_option9_answer">Patient ist orientiert und angepasst, psychische Belastung durch körperl. Einschränkung angemessen, ansonsten ausgeglichen. Konzentration, Aufmerksamkeit, Gedächtnis, Sprache o.p.B.</h3>
           <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click="">
             Copy to Notepad
         </button>
          
       
      </div>
    
    </div>
 
</template>

<script>

export default{
mounted() {
 fetch('http://localhost:3000/satisfaction_counters', {
    
    method: "POST",
    headers: {
         "content-type":"application/json"
    },
    body: JSON.stringify(
            {"values":[0] }
    )
    })
fetch('http://localhost:3000/time_counters', {
    
    method: "POST",
    headers: {
         "content-type":"application/json"
    },
    body: JSON.stringify(
            {"values":[1] }
    )
    })

    fetch('http://localhost:3000/economy_counters', {
    
    method: "POST",
    headers: {
         "content-type":"application/json"
    },
    body: JSON.stringify(
            {"values":[0] }
    )
    })
  }
}

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
  height:70%;
  width: 30%; min-width: 100px;
  cursor: pointer;
  /* color: #444   */
}
</style>
