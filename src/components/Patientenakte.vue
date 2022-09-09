<template>
  <div>
    <div class="grid grid-cols-4 gap-2">
      
       
          <h2>einen blick in die Patientenakte werfenn</h2>
        <img class="w-20 h-20 self-center justify-self-center" src="@/assets/arrow.png" alt=""/>
        <div v-for="option in patientenakte_options" :key="option.id" class="patient">
           <h3>{{ option.answer }}</h3></div>
         
           
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
    fetch('https://database-pafasi.herokuapp.com/patientenakte_options') //json server to be replaced by database later
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