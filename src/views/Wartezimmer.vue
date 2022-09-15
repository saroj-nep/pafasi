<template>

  <div>
    <Header />
    <div class="patient">
      <router-link :to="{ name: 'Patient' }">
        <h3 class="btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl">Hr. Wolfgang Schneider</h3>
      </router-link>
    </div>
  </div>

</template>

<script>
import Header from '@/components/DefaultLayout.vue';

export default {
  components:{
   
    Header
   
  },
  data() {
    return {
      patients: []
    }
  },
  mounted() {
    fetch('https://database-pafasi.herokuapp.com/patients') //json server to be replaced by database later
      .then(res => res.json())
      .then(data => this.patients = data)
      .catch(err => console.log(err.message))
  },
  
}

</script>

<style scoped>
.patient h3 {
  background: rgb(5,150, 105);
  padding: 50px;
  border-radius: 10px;
  margin: 10px auto;
  /* max-width: 50 px; */
  width: 26%;
  cursor: pointer;
  color: rgb(255, 255, 255);
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 20px;
  
}

  .patient h3:hover {
    background: rgb(39, 190, 107)
  }
  .patient a{
    text-decoration: none
  }
  
</style>
