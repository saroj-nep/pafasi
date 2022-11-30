<template>
  <div class="grid grid-cols-1 gap-2">
     <div class="sticky top-0 bg-emerald-600">

    <h1 style="font-size:1.5em; " class="h1 text-white text-center" ><b>Wählen Sie aus, welche nicht apparativen Untersuchungen an der Genital- und Glutealregion Sie durchführen möchten.​</b> </h1>
    </div>
    <br>
    


        <div v-for="click in clickz">
        <div v-if="click.user==email"  class="flex justify-center ">

             <button v-if="click.genitalinspektion==1" id="inspektionquestion"  class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="countertimeInspektion(); displayInspektion();">
         Inspektion und Palpation </button>
 <button v-else id="inspektionquestion"  class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="counterInspektion(); displayInspektion();">
         Inspektion und Palpation </button>
         
          <button v-if="click.genitalrektal==1" id="nasequestion" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="countertimeNase();displayNase();">
           Digital-rektale Untersuchung
          </button>
               <button v-else id="nasequestion" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="counterNase();displayNase();">
           Digital-rektale Untersuchung
          </button>
            
         </div>
          </div> 
      
  </div>
    <h3 id="inspektionanswer" style="display:none">Haut o.p.B., insbes. keine Rötungen, Bläschen oder Rhagaden, keine Wucherungen, geschlechtstypisches Behaarungsmuster. Kein Ausfluss aus der Harnröhre, optisch sowie palpatorisch keine feststellbaren Schwellungen oder Hernien.Labien symmetrisch, keine Varizen, Schleimhaut feucht, rosig und reizlos, physiologischer vaginaler Ausfluss.</h3> 
         <h3 id="naseanswer" style="display:none">Kein Hervortreten von Schleimhaut, Analreflex normal auslösbar, normaler Sphinktertonus. Schleimhaut gleichmäßig, weich und verschieblich. Keine Raumforderungen, keine Schmerzauslösung, kein Blut am Fingerling.</h3> 
          
</template>

<script>
import Popup from '@/components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Meier_Notepad.vue';
import axios from 'axios';

export default {
 name:"Untersuchens",
  data() {
    return { counters: {
        safety: null,
        satisfaction: null,
        time: null,
        economy: null
      },
      
   showTooltip: false,
      showNotepad: false,
          clickz:[],
      email:localStorage.email,
    };
  },
  created(){this.clicks(); },

  methods: {
    clicks(){

  axios.get( "./Api/meier_api.php?action=getclicks",)
    
    .then((response) => {this.clickz=response.data })

},
  countertimeInspektion() {
      var data = new FormData();

      data.append("time",0.5);
      data.append("step","Sie haben Inspektion & Palpation unter Nicht Apparative Untersuchen: Genital- und Glutealregion angekreuzt");
     data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/meier_api.php?action=countertimevariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },

    countertimeNase() {
      var data = new FormData();
  
      data.append("time",0.5);
      data.append("step","Sie haben digital rektale Untersuchung unter Nicht Apparative Untersuchen: untere Extremität angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/meier_api.php?action=countertimevariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
   
  counterInspektion() {
      var data = new FormData();
  
      data.append("economy",-5.55);
      data.append("satisfaction",0);
        data.append("genitalinspektion",1);
      data.append("time",0.5);
      data.append("step","Sie haben Inspektion & Palpation unter Nicht Apparative Untersuchen: Genital- und Glutealregion angekreuzt");
     data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/meier_api.php?action=countervariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },

    counterNase() {
      var data = new FormData();
  
      data.append("economy",-5.55);
      data.append("satisfaction",0);
      data.append("genitalrektal",1);
      data.append("time",0.5);
      data.append("step","Sie haben digital rektale Untersuchung unter Nicht Apparative Untersuchen: untere Extremität angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/meier_api.php?action=countervariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
   



displayInspektion(){ 
        inspektionanswer.style.display = "block";
        inspektionquestion.style.opacity="0.5";
        nasequestion.style.opacity="1";
        naseanswer.style.display = "none";
       
      },
displayNase(){ 
        naseanswer.style.display = "block";
        nasequestion.style.opacity="0.5";
        inspektionanswer.style.display = "none";
        inspektionquestion.style.opacity="1";
       
      },


},



  setup() {
    const popupTriggers = ref({
      buttonTrigger: false
    })
    const TogglePopup = (trigger) => {
      console.log(trigger, 'trigger')
      popupTriggers.value[trigger] = !popupTriggers.value[trigger]
    }
    return {
      Popup,
      popupTriggers,
      TogglePopup
    }
  },
  
  components: { Popup, Notepad}
}
</script>

<style scoped>
h3 {
  background: rgb(5,150,105);
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
;
    /* width: 50%; */
  cursor: pointer;
  color: rgb(255, 255, 255)
}

h3:hover {
  background: rgb(5,150,105)
}
.button {
  background: black;
  margin-right: 5%;
  margin-left:1%;
  margin-top:1%;
  color: white;
  padding: 2%;
  border-radius: 20px;

  width:85%;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
.submitbutton{
  background: #be123c;
  color: white;
  padding: 20px;
  border-radius: 10px;
  margin: 5px auto;
  width:400px;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
.h1{
 font-size: large; 
}

.tooltip {
  position: relative;
  display: inline-block;
  /* border-bottom: 1px dotted black; */
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 100;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 100;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>
