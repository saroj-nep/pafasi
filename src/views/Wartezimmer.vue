<template>

    <Header />
    <div class="ml-80 mr-80 border-2  border-green-500 ">
    <div class="  grid grid-cols-3 mt-5 mb-2 ml-1 mr-1 align-center content-center justify-center justify-items-center justify-evenly place-content-center ">
  <div>
      <div v-for="submit in submits">
    <div  v-if="submit.user==email">

   <div v-if="submit.submitted=='0'" class="patient ml-12 btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl">
    
    <router-link :to="{ name: 'Patient' }"> 
        <img src= "../assets/Schneider2.png" class="  w-45" alt="Patient Image"  />   
                <br><h3 style="text-align: center" >Hr. Wolfgang Schneider</h3>
                    <h3 style="text-align: center" >Status: Offen</h3>
     </router-link>
     
    </div> 
      <div v-else class="patientdisabled ml-12 btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 rounded shadow-2xl">
      <router-link v-if="submit.tutor=='0'" to="#"> 
        <img src= "../assets/Schneider2.png" class="  w-45" alt="Patient Image"  />   
                <br><h3 style="text-align: center" >Hr. Wolfgang Schneider</h3>
                    <h3 style="text-align: center" >Status: Geschlossen</h3>
                    <div v-for="submit in submits">
    <div  v-if="submit.user==email">
 <router-link :to="{ name: 'Print' }"> 
   <div v-if="submit.submitted=='1'" id="Schneiderbutton" style= 'display:block' class="case ml-2 mr-5  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl">
      
        
               <h3 style="text-align: center" >Fallergebnisse herunterladen</h3>
        
     
    </div> 
    </router-link>
    </div>
    </div>
      </router-link>
      <router-link v-else :to="{ name: 'Patient' }"> 
        <img src= "../assets/Schneider2.png" class="  w-45" alt="Patient Image"  />   
                <br><h3 style="text-align: center" >Hr. Wolfgang Schneider</h3>
                    <h3 style="text-align: center" >Status: Geschlossen</h3>
                    <div v-for="submit in submits">
    <div  v-if="submit.user==email">
 <router-link :to="{ name: 'Print' }"> 
   <div v-if="submit.submitted=='1'" id="Schneiderbutton" style= 'display:block' class="case ml-2 mr-5  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl">
      
        
               <h3 style="text-align: center" >Fallergebnisse herunterladen</h3>
        
     
    </div> 
    </router-link>
    </div>
    </div>
      </router-link>
    </div> 
  
  
    </div>
    </div>
    </div>
       <div class="nopatient mr-8 btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl">
      <router-link to="" > 
           
        <br><h3 style="text-align: center" >Demnächst</h3>
      </router-link>
    </div>
       <div class="nopatient mr-6 btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl">
      <router-link to=""> 
        
        <br><h3 style="text-align: center" >Demnächst</h3>
      </router-link>
    </div>

</div>
 
    </div>
</template>

<script>
import Header from '@/components/DefaultLayout.vue';
import axios from 'axios';
import { method } from 'lodash';

export default {
  components:{
Header
   },
  data() {
    return {
    submits:[],
    email:localStorage.email,
    pagez:[]
    }},
    created(){  
    if (localStorage.email==''){this.$router.push("/login");}
     this.pagestatus();
    this.currentpage();
 this.getsubmit();
 this.sendthesteps();
  },
  methods:{
       sendthesteps(){
    var data = new FormData();
     data.append("step","Der Benutzer ist auf der Seite des Wartezimmers gelandet.")
    data.append("onlineuser",localStorage.email);
axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=sendthesteps",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
           
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
  pagestatus(){
  
  axios.get( "./Api/api.php?action=getpagestatus", {params: {
    'user': localStorage.email,
  }})
    
    .then((response) => {this.pagez=response.data })}
    ,
  
  currentpage(){
    // var data = new FormData();
    //  data.append("main",0);
    //  data.append("warte",1);data.append("patient",0);data.append("anamnese",0);data.append("patientenakte",0);data.append("laboratory",0);data.append("blood",0);data.append("urine",0);data.append("stool",0);data.append("sendblood",0);data.append("sendurine",0);data.append("sendstool",0);data.append("doctors",0);data.append("senddoctors",0);data.append("untersuchen",0);data.append("nicht",0);data.append("kopf",0);data.append("rumpf",0);data.append("thorax",0);data.append("wirbel",0);data.append("abdomen",0);data.append("obere",0);data.append("untere",0);data.append("genital",0);data.append("apparative",0);data.append("sono",0);data.append("ekg",0);data.append("lungen",0);data.append("sendsubmit",0);data.append("submit1",0);data.append("submit2",0);data.append("submit3",0);data.append("lab",0);data.append("afterlab",0);data.append("specialties",0);data.append("afterspecialties",0);data.append("prints",0);
    // data.append("onlineuser",localStorage.email);
    //   axios
    //     .post(
    //       // "./Api/api.php?action=countervariable",
    //       "./Api/api.php?action=currentpage",
    //       data
    //     )
    //     .then(res => {
    //       if (res.data.error) {
    //         console.log("Error", res.data);
    //         alert(res.data.message);
    //       } else {
    //         console.log("Success", res.data.message);
      
    //       }
    //     })
    //     .catch(err => {
    //       console.log("Error", err);
    //     });
    },getsubmit(){

    axios.get( "./Api/api.php?action=getsubmit",)
    
    .then((response) => {this.submits=response.data;} )

   
  },
showsubmit(){
  

}

}
     
   

  
  
}


</script>

<style scoped>
  


.patient {
  background: rgb(5,150, 105);
  padding: 5%;
  border-radius: 5%;
  
  width: 70%;
  cursor: pointer;
  color: rgb(255, 255, 255);
  display: grid;
  justify-content: center;
  align-items: center;
  font-size: 2 ex;
  
}
.patient:hover{

 background: rgb(39, 190, 107)
}
.patientdisabled {
  background: rgba(66, 70, 69, 0.356);
  padding: 5%;
  border-radius: 5%;
  
  width: 70%;
  cursor: pointer;
  color: rgb(255, 255, 255);
  display: grid;
  justify-content: center;
  align-items: center;
  font-size: 2 ex;
  
}
.patientdisabled:hover{

 background:rgba(66, 70, 69, 0.356);
}
.case {
  background: rgb(255, 0, 0);
  padding: 2%;
  border-radius: 2%;
  
  width: 90%;
  cursor: pointer;
  color: rgb(255, 255, 255);
  display: grid;
  justify-content: center;
  align-items: center;
  font-size: 1 ex;
  
}
.nopatient {
  background: rgba(66, 70, 69, 0.356);
  padding: 5%;
  border-radius: 5%;
  
  width: 70%;
  cursor: pointer;
  color: rgb(255, 255, 255);
  display: grid;
  justify-content: center;
  align-items: center;
  font-size: 2 ex;
  
}

 
  
</style>
