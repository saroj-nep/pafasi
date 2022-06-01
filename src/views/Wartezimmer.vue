<template>
    <h1>Wartezimmer</h1>
      <div v-for="patient in patients" :key="patient.id" class="patient">
        <router-link :to="{ name:'Patient', params: { id:patient.id}}">
          <h3>{{ patient.title }}</h3>
        </router-link>
      </div>
</template>

<script>
  export default{
  data() {
    return{
      patients: []
    }
  } ,
  mounted() {
    fetch('http://localhost:3000/patients') //json server to be replaced by database later
    .then(res=> res.json())
    .then(data =>this.patients=data)
    .catch(err =>console.log(err.message))
    
  }
}

</script>

<style scoped>
  .patient h3{
   background: #f4f4f4;
   padding: 20px;
   border-radius: 10px;
   margin: 10px auto ;
   max-width: 50 px;
   width:20%;
   cursor: pointer;
   color: #444  
  }

  .patient h3:hover {
    background: rgb(39, 190, 107)
  }
  .patient a{
    text-decoration: none
  }
  
</style>
