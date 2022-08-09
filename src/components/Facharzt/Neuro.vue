<template>
  <div>
    <div class="grid grid-cols-4 gap-2">
      
       
          <h2>Neurologie</h2>
        <img class="w-20 h-20 self-center justify-self-center" src="@/assets/arrow.png" alt=""/>
        <h3>Patient mit starken Rückenschmerzen und Zeichen einer Radikulopathie (CAVE: beginnende Parese) bei bekannten BSV L3/4 und L4/5 sowie Z.n. radikaler Prostatektomie bei Prostata-Ca 2015, Gleason 6, T2b N1 M0 R0. Patient zeigt Hinweise auf mögliche ossäre Metastasierung seines Prostata-CA. Er wird zur Weiterbehandlung in die onkologische Klinik überwiesen.</h3>
           <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click="">
             Copy to Notepad
         </button>
          
      </div>
    </div>
  
</template>

<script>
export default {
  data() {
    return {
      patientenakte_options: []
    }
  },
  mounted() {
    fetch('http://localhost:3000/patientenakte_options') //json server to be replaced by database later
      .then(res => res.json())
      .then(data => this.patientenakte_options = data)
      .catch(err => console.log(err.message))

  }
}

</script>

<style scoped>
h3 {
  background: #7fb78f;
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
 
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
  width: 20%; 
  min-width: 100px;
  cursor: pointer;
  /* color: #444   */
}
</style>