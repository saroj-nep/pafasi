<template>
  <div class="grid grid-cols-1 gap-2">
     <div class="bg-emerald-600">

    <h1 style="font-size:1.5em; " class="h1 text-white text-center" ><b>Wählen Sie aus, welche nicht apparativen Untersuchungen Sie am Thorax (Herz & Lunge) durchführen möchten.</b> </h1>
    </div>
    <br>
    


   <div v-for="click in clickz">
        <div v-if="click.user==email"  class="flex justify-center ">
        <button v-if="click.thoraxinspektion==1" id="inspektionquestion"  class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="countertimeInspektion();displayInspektion();">
         Inspektion und Palpation </button>
          <button v-else id="inspektionquestion"  class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="counterInspektion(); displayInspektion();">
         Inspektion und Palpation </button>
         
          <button v-if="click.thoraxauskultation==1" id="nasequestion" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="countertimeNase();displayNase();">
           Auskultation & Perkussion
          </button>
           <button v-else id="nasequestion" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="counterNase();displayNase();">
           Auskultation & Perkussion
          </button>
            
        </div>
          </div> 
       
          
  </div>
   <h3 id="inspektionanswer" style="display:none"> Haut: o.p.B., Halsvenen nicht gestaut, Thorax: symmetrisch, keine Thoraxdeformitäten, Rippen durchgängig tastbar, keine Konturunterbrechung, keine Thoraxinstabilität, seitengleiche Atemexkursionen, Atemfrequenz etwa 12/min, Herzspitzenstoß regelrecht tastbar.</h3> 
    <h3 id="naseanswer" style="display:none">Herz:  Rhythmisch, leises, bandförmiges Systolikum mit p.m. im 5. ICR links medioclaviculär, Fortleitung in Axilla, Herzfrequenz ca. 68/min, leichte Strömungsgeräusche über den Carotiden, Lunge: vesikuläre Atemgeräusche bds., keine Nebengeräusche, thorakal bds. sonorer Klopfschall, Lungengrenzen etwa bei BWK 10-11, normale Atemverschieblichkeit.</h3> 
</template>

<script>
import Popup from '@/components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Hirtz_Notepad.vue';
import axios from 'axios';

export default {
 name:"Untersuchens",
  data() {
    return {counters: {
        safety: null,
        satisfaction: null,
        time: null,
        economy: null,
        step:''
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

  axios.get( "./Api/hirtz_api.php?action=getclicks",)
    
    .then((response) => {this.clickz=response.data })

},
    countertimeInspektion() {
      var data = new FormData();
  

      data.append("time",0.5);

      data.append("step","Sie haben Inspektion & Palpation unter Nicht Apparative Untersuchen: Rumpf-Thorax angekreuzt")
    data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/hirtz_api.php?action=countertimevariable",
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

      data.append("time",2);

      data.append("step","Sie haben Auskultation & Perkussion unter Nicht Apparative Untersuchen: Rumpf-Thorax angekreuzt")
     data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/hirtz_api.php?action=countertimevariable",
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
  
      data.append("economy",-3.125);
      data.append("satisfaction",1);
      data.append("thoraxinspektion",1);
      data.append("time",0.5);
      data.append("safety",100);
      data.append("step","Sie haben Inspektion & Palpation unter Nicht Apparative Untersuchen: Rumpf-Thorax angekreuzt")
    data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/hirtz_api.php?action=countervariable",
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
  
      data.append("economy",-3.125);
      data.append("satisfaction",1);
      data.append("thoraxauskultation",1);
      data.append("time",2);
      data.append("safety",100);
      data.append("step","Sie haben Auskultation & Perkussion unter Nicht Apparative Untersuchen: Rumpf-Thorax angekreuzt")
     data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/hirtz_api.php?action=countervariable",
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
