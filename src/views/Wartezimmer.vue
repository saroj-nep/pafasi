<template>

    <Header />]
    <div class="grid grid-cols-3 ">
  
<router-link :to="{ name: 'Patient' }"> 
   <div class="patient btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl">
      
        <img src= "../assets/Schneider.jpg" class="object-contain h-45 w-45" alt="Patient Image" style="top: 20px;" />   
        <br><h3 style="text-align: center" >Hr. Wolfgang Schneider</h3>
        <h3 style="text-align: center" >Status:Offen</h3>
     
    </div> </router-link>
       <div class="nopatient btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl">
      <router-link to="" > 
           
        <br><h3 style="text-align: center" >demnächst</h3>
      </router-link>
    </div>
       <div class="nopatient btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl">
      <router-link to=""> 
        
        <br><h3 style="text-align: center" >demnächst</h3>
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
    
    }
  },
  
  
}

</script>

<style scoped>
  


.patient {
  background: rgb(5,150, 105);
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
  width: 60%;
  cursor: pointer;
  color: rgb(255, 255, 255);
  display: grid;
  justify-content: center;
  align-items: center;
  font-size: 15px;
  
}
.nopatient {
  background: rgba(66, 70, 69, 0.356);
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
  width: 60%;
  cursor: pointer;
  color: rgb(255, 255, 255);
  display: grid;
  justify-content: center;
  align-items: center;
  font-size: 20px;
  
}

 
  
</style>
