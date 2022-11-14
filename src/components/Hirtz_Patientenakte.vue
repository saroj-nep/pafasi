<template>
  <div>
    <div class="sticky top-0 bg-emerald-600">
    <h1 style="font-size:1.5em; " class="h1 text-white text-center" ><b>Der Patientenakte können Sie Folgendes entnehmen: </b> </h1>
    </div>
    <div style="margin-top:50px">
      
    <ul class='marker:text-green list-outside list-disc ml-6'>
  <li>72J., 1,70cm groß</li>
  <li>Letzte Vorstellung vor ca. ½ Jahr wegen eingewachsenem Großzehennagel rechts</li>
  <li>Regelmäßig Folgeverordnung ASS 100 und Atorvastatin bei KHK</li>
  <li>Prostata-CA vor 7 Jahren, radikale Prostatektomie, T2b N1 M0 R0, Gleason 6</li>
  <li>Z.n. Myokardinfarkt (STEMI) vor 4 Jahren, 2 Stents</li>
  <li>Diskusprolaps L3/4, L4/5 seit vielen Jahren bekannt</li>
   </ul>
      </div>
    </div>
  
</template>
<script>
import axios from 'axios'

export default{
 created(){this.currentpage(); this.sendthesteps()},
 methods:{

 sendthesteps(){
    var data = new FormData();
     data.append("step","Der Benutzer ist auf dem Patientenakte Seite gelandet.")
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
  currentpage(){
    var data = new FormData();
     data.append("main",0);
     data.append("warte",0);data.append("patient",0);data.append("anamnese",0);data.append("patientenakte",1);data.append("laboratory",0);data.append("blood",0);data.append("urine",0);data.append("stool",0);data.append("sendblood",0);data.append("sendurine",0);data.append("sendstool",0);data.append("doctors",0);data.append("senddoctors",0);data.append("untersuchen",0);data.append("nicht",0);data.append("kopf",0);data.append("rumpf",0);data.append("thorax",0);data.append("wirbel",0);data.append("abdomen",0);data.append("obere",0);data.append("untere",0);data.append("genital",0);data.append("apparative",0);data.append("sono",0);data.append("ekg",0);data.append("lungen",0);data.append("sendsubmit",0);data.append("submit1",0);data.append("submit2",0);data.append("submit3",0);data.append("lab",0);data.append("afterlab",0);data.append("specialties",0);data.append("afterspecialties",0);data.append("prints",0);
    data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=currentpage",
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