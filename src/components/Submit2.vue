<template>
  <div>
     <div class="sticky top-0 bg-emerald-600">
    <h1 style="font-size:1.5em; " class="h1 text-white text-center" ><b>Heutige Vorstellung beenden und (be-)handeln. </b> </h1>
    </div>
    <br>

    <div >
      <div>
      <h2>Arbeitsdiagnose: <span style="color:red"> (Pflichtfeld)</span></h2><textarea id="arbeits" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline border-green-900" v-model="diagnosis"  ></textarea>
      
    
    </div>
    <br>
    <div class="grid grid-cols-2 gap-2"> 
      <div>
      
     <form>
      <ul class="w-200 text-sm font-medium text-white bg-white rounded-lg border border-emerald-200 dark:bg-emerald-600 dark:border-gray-600 dark:text-white" >
    
    <li class="w-full rounded-t-lg  border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-12">
            <input id="list-radio-2" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-id" class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white">Krankenhauseinweisung</label>
        </div>
    </li>
   
    
</ul>
</form>
</div>
 
    
<div>

<form>
<ul class="w-200 text-sm font-medium text-white bg-white rounded-lg border border-emerald-200 dark:bg-emerald-600 dark:border-gray-600 dark:text-white">
    
    <li class="w-full rounded-t-lg  border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-12">
            <input id="rezeptcheck" type="checkbox" value="" @click="showRezept();" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white">Rezept(e) und /oder Verordnungen ausstellen</label>
        </div>
    </li>
    
    
</ul>
<div id="rezept" style="display:none" class="flex items-center pl-1">
            <label for="checkbox2" > Was verordnen Sie? <span style="color:red"> (Pflichtfeld)</span></label> 
          <textarea id="rezepttext" rows="7" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline border-green-900" v-model="prescription" required ></textarea>
           
        </div>
        
<div class="flex flex-row  justify-center items-center">
<button type="submit" id="submitbutton"  class="submitbutton btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
           @click.prevent="checkRadio(); ">
         Patienten verabschieden
         </button>
</div>
    <Popup v-if="popupTriggers.labTrigger" :TogglePopup="() => TogglePopup('labTrigger')">
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
                <Specialties />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
        </form>
</div>
</div>

        
    </div>
  </div>
</template>


<script>
import Popup from '@/components/Popup2.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';
import axios from 'axios';
import Specialties from './Facharzt/Specialties.vue';


export default {
 name:"Submits",
  data() {
    return {
      counters: {
        safety: null,
        satisfaction: null,
        time: null,
        economy: null,
        eeconomy:null,
        saafety:null
      },
      showTooltip: false,
      showNotepad: false,
      diagnosis:'',
      prescription:''
    };
  },

  
methods:{
 
  checkRadio(){
          
          const i = document.querySelector('#rezeptcheck');

    
    if(!(this.diagnosis.length >0)){alert("Bitte schreiben Sie Ihre Arbeitsdiagnose. Dies ist ein Pflichtfeld..") } 
    else if(((i.checked==true) && (this.prescription.length ==0))){alert("Sie haben sich für die Ausstellung eines Rezepts entschieden. Bitte notieren Sie Ihre Rezept(e).") }      
    else {this.submitcounter();this.sendvalue();alert("Danke Ihnen für die vollständige Diagnose.")}
  },
 showRezept()
{  
const a = document.querySelector('#rezeptcheck');

if (a.checked ==1) {
rezept.style.display = "block";

}
else {rezept.style.display = "none";}

},

sendvalue() {
         
          var data = new FormData();
          const a = document.querySelector('#list-radio-1');
          const b = document.querySelector('#list-radio-2');
          const c = document.querySelector('#list-radio-3');
          const d = document.querySelector('#list-radio-4');
          const e = document.querySelector('#list-radio-5');
          const f = document.querySelector('#list-radio-6');
          const g = document.querySelector('#list-radio-7');
          const h = document.querySelector('#ausstellencheck');
          const i = document.querySelector('#rezeptcheck');
          var j = document.getElementById('rezepttext').value;
          var k = document.getElementById('arbeits').value;
       

      data.append("ambulance", a.checked);
      data.append("hospital", b.checked);
      data.append("noappointment", c.checked);
      data.append("badappointment", d.checked);
      data.append("twodays",e.checked);
      data.append("fivedays", f.checked);
      data.append("fourweeks",g.checked);
      data.append("ausstellen", h.checked);
      data.append("rezept",i.checked);
      data.append("rezepttext",j);
      data.append("diagnose",k);
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=login",
           "./Api/api.php?action=sendsubmit",
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

submitrezept(){
  var data = new FormData();
 const h = document.querySelector('#ausstellencheck');
  if (h.checked==1){
                     data.append("economy",1 ) ;
                     data.append("onlineuser",localStorage.email);
     axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=rezeptvariable",
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
                    
                    }
},    
submitcounter(){
   var data = new FormData();
          const a = document.querySelector('#list-radio-1');
          const b = document.querySelector('#list-radio-2');
          const c = document.querySelector('#list-radio-3');
          const d = document.querySelector('#list-radio-4');
          const e = document.querySelector('#list-radio-5');
          const f = document.querySelector('#list-radio-6');
          const g = document.querySelector('#list-radio-7');
         
          console.log(a.checked);

if (a.checked==1){data.append("safety",100);
                     data.append("economy",0 ) 
                     }

else if (b.checked==true){data.append("safety",100);
                     data.append("economy",1 ) 
                     }
else if (c.checked==true){data.append("safety",0);
                     data.append("economy",0 ) 
                     }
else if (d.checked==true){data.append("safety",50);
                     data.append("economy",0 ) 
                     }   
else if (e.checked==true){data.append("safety",80);
                     data.append("economy",0 ) 
                     }
else if (f.checked==true){data.append("safety",70);
                     data.append("economy",0 ) 
                     }
else if (g.checked==true){data.append("safety",20);
                     data.append("economy",0 ) 
}
 data.append("step",'Sie haben Ihre Diagnose eingereicht');
 data.append("onlineuser",localStorage.email);

  

 axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=submitvariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.submitrezept();this.TogglePopup('labTrigger');
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },},

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
  
  components: { Popup, Notepad,Specialties }
}

</script>


<style scoped>
h3 {
  background: rgb(5,150,105);
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
  max-width: 20 px;
    /* width: 50%; */
  cursor: pointer;
  color: rgb(255, 255, 255)
}
.submitbutton{
   background: #be123c;
  color: white;
  padding: 2%;
  border-radius: 20px;
  margin-top:1%;
  width:30%;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
 

</style>