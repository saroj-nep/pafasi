<template>
    <Header />
    <div class="h-20"></div>
    <div class="menu grid justify-center content-center justify-self-center self-center items-center justify-items-center "> 
         <div v-for ="t in tutors">
          <div v-if ="t.email==email">
            <router-link v-if="t.tutor==1"  to="/tutorpanel"><br><Button class="btn  shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl" text="Tutor Dashboard" /></router-link>
             </div>
     </div>
      <router-link to="/anleitung"><br><Button class="btn  shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl" text="Anleitung" /></router-link>
        <router-link to="/warte"><br><Button class="btn  shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl" text="Wartezimmer" /></router-link>
        <router-link to="/tipps_links"><br><Button class="btn  shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl" text="Tipps & Links" /></router-link> 
         <router-link to="kleingedrucktes_datenschutzerklaerung"><br><Button class="btn  shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl" text="Kleingedrucktes & Datenschutzerklärung" /></router-link>

        
        
    </div>
    
</template>

<script>
import Button from '.././components/ButtonComp' 
import Header from '@/components/DefaultLayout'
import axios from "axios";

export default{
    name:'button',
     data() {
    return {
      tutors:[],
      email:localStorage.email
    }},
    components:{
        Button,
        Header
    },
    created(){ 
    if (localStorage.email==''){this.$router.push("/login");}
   
    if( localStorage.rrload=false){this.rload();}
    else{this.sendthesteps()}
   this.gettutors();
  }, 
  methods:{
        sendthesteps(){
    var data = new FormData();
     data.append("step","Der Benutzer ist auf der Hauptmenüseite gelandet.")
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

    rload(){
      localStorage.rrload=true
      window.location.href = window.location.href;
    },
    
   gettutors(){

 axios.get( "./Api/api.php?action=getusers",)
    
    .then((response) => {this.tutors=response.data; })

   },


   currentpage(){
    // var data = new FormData();
    // data.append("main",1);
    // data.append("warte",0);data.append("patient",0);data.append("anamnese",0);data.append("patientenakte",0);data.append("laboratory",0);data.append("blood",0);data.append("urine",0);data.append("stool",0);data.append("sendblood",0);data.append("sendurine",0);data.append("sendstool",0);data.append("doctors",0);data.append("senddoctors",0);data.append("untersuchen",0);data.append("nicht",0);data.append("kopf",0);data.append("rumpf",0);data.append("thorax",0);data.append("wirbel",0);data.append("abdomen",0);data.append("obere",0);data.append("untere",0);data.append("genital",0);data.append("apparative",0);data.append("sono",0);data.append("ekg",0);data.append("lungen",0);data.append("sendsubmit",0);data.append("submit1",0);data.append("submit2",0);data.append("submit3",0);data.append("lab",0);data.append("afterlab",0);data.append("specialties",0);data.append("afterspecialties",0);data.append("prints",0);
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
    // 
  },
  }
   

 
}
</script>

<style>
.h1{
 border-bottom: 1px solid#ddd;
 display:inline-block;
 padding:10px;   
}

.menu button {
 background:  rgb(5,150,105);
  padding: 2%;
  border-radius: 20px;
  width:300px;
 
  cursor: pointer;
  color: rgb(255, 255, 255);
  display: grid;
  justify-content: center;
  align-items: center;
  font-size: 20px;
  
} 
 .menu button:hover {
    background: rgb(39, 190, 107)
  }
  .menu a{
    text-decoration: none
  }
</style>