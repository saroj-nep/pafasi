<template>
  
    <div class= "grid justify-center">
      <div class="bg-emerald-600">
          <h2 style="font-size:1.2em; " class="h1 text-white text-center" >Was möchten Sie jetzt tun? </h2>
      </div>
          <br> <br><br><br> <div class= "grid grid-cols-1  gap-2">
            
        
         <div>
         <button  class="button  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="() => TogglePopup('nichtsTrigger')">
           Nichts
         </button>

         
          <Popup2 v-if="popupTriggers.nichtsTrigger" :TogglePopup="() => TogglePopup('nichtsTrigger')">
           
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <Print />
              </div>
              <div class="col-span-1">
               
              </div>
            </div>
          </Popup2>
          </div>
          <!-- <button  class="button  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="() => TogglePopup('krankenTrigger')">
          Patientin/Patienten sofort kontaktieren und ins Krankhaus einweisen
         </button>
          
         
          <Popup2 v-if="popupTriggers.krankenTrigger" :TogglePopup="() => TogglePopup('krankenTrigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <Print />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup2> -->
          <div>
          <button  class="button  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="() => TogglePopup('andernTrigger')">
       Arbeitsdiagnose ändern
         </button>

         
          <Popup2 v-if="popupTriggers.andernTrigger" :TogglePopup="() => TogglePopup('andernTrigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
               <Submit3 />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup2>


        <!-- <div v-for="doctor in doctorloops">
    <div  v-if="doctor.user==email">
         <button v-if="doctor.doctorloop==0"    class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="goToEvents()">
          Patientin/Patienten nochmal einbestellen
         </button>
         </div>
             </div> -->
             </div>
        </div>
      </div>

  
</template>

<script>
import Popup from '@/components/Popup.vue';
import Popup2 from '@/components/Popup2.vue';
import { ref } from 'vue';
import Notepad from '@/components/Rigas_Notepad.vue';
import Print from '@/components/Rigas_Prints.vue';
import Submit3 from './Rigas_Submit3.vue';
import Specialties from './Rigas_Facharzt/Rigas_Specialties.vue';
import axios from 'axios';




export default {
      created(){this.currentpage(),this.getdoctorloops()},
 methods: {
    currentpage(){
    var data = new FormData();
     data.append("main",0);
     data.append("warte",0);data.append("patient",0);data.append("anamnese",0);data.append("patientenakte",0);data.append("laboratory",0);data.append("blood",0);data.append("urine",0);data.append("stool",0);data.append("sendblood",0);data.append("sendurine",0);data.append("sendstool",0);data.append("doctors",0);data.append("senddoctors",0);data.append("untersuchen",0);data.append("nicht",0);data.append("kopf",0);data.append("rumpf",0);data.append("thorax",0);data.append("wirbel",0);data.append("abdomen",0);data.append("obere",0);data.append("untere",0);data.append("genital",0);data.append("apparative",0);data.append("sono",0);data.append("ekg",0);data.append("lungen",0);data.append("sendsubmit",0);data.append("submit1",0);data.append("submit2",0);data.append("submit3",0);data.append("lab",0);data.append("afterlab",0);data.append("specialties",0);data.append("afterspecialties",1);data.append("prints",0);
    data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/rigas_api.php?action=currentpage",
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
    
        getdoctorloops(){
            axios.get( "./Api/rigas_api.php?action=getsubmit",)
    
    .then((response) => {this.doctorloops=response.data;} )
  },
    goToEvents: function () {

          var data = new FormData();
           data.append("onlineuser",localStorage.email);
          axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/rigas_api.php?action=submitdoctorloop",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            localStorage.currentpage='';
            document. location. reload()
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
   
    
    },
  data() {
    return {
      
      showTooltip: false,
      showNotepad: false,
       doctorloops:[],
      email:localStorage.email
    };
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
  
  components: { Notepad, Popup, Print, Popup2, Submit3, Specialties }
}



</script>

<style scoped>

h2 {
  background: rgb(5, 150, 105);
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
  
    /* width: 50%; */
  
  color: rgb(255, 255, 255)
}


.button {
   background: #be123c;
  color: white;
  padding: 5%;
  border-radius: 20px;

 
  margin-top:5%;
  width:100%;

  
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
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