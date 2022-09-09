<template>
  <div>
     <div class="sticky top-0 bg-emerald-600">
    <h1 class="h1 text-white" style=";"> <strong>Heutige Vorstellung beenden und (be-)handeln </strong> </h1>
    </div>
    <br>

    <div class="grid grid-cols-1 gap-2">
      <h2>Arbeitsdiagnose:</h2><textarea type="text" id="arbeits" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" ></textarea>
      
      <br>
       <h2>Sie können nur eine Auswahl aus diesen Optionen treffen:</h2>
     <form>
      <ul class="w-200 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white" >
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-radio-1" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required >
            <label for="list-radio-license" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Rettungsdienst rufen und Notfallmaßnahmen ergreifen </label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-radio-2" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-id" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Krankenhauseinweisung</label>
        </div>
    </li>
    <br><h2>Wiedervorstellung:</h2><br>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-radio-3" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-millitary" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">keine Verabreden</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-radio-4" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-passport" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">bei Verschlechterung</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-radio-5" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-passport" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">in 2 Tagen</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-radio-6" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-passport" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">in 5 Tagen</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-radio-7" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-passport" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">in 4 Wochen</label>
        </div>
    </li>
    
</ul>
 

<h2>Sie können keine, eine oder beide dieser Optionen wählen:</h2>
<ul class="w-200 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">AU ausstellen</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="checkbox1" type="checkbox" value="" @click="showRezept();" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Rezept(e) und /oder Verordnungen ausstellen</label>
        </div>
    </li>
    
    
</ul>
<div id="rezept" style="display:none" class="flex items-center pl-3">
            <label for="checkbox2" > Was verordnen Sie?</label> 
           <textarea rows="2" id ="rezepttext" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
           
        </div>

<button type="submit" id="submitbutton" style="margin-right: 50px; margin-left: 100px"  class="submitbutton"
           @click.prevent="checkRadio(); ">
         Patienten verabschieden
         </button>
   <Popup v-if="popupTriggers.printtrigger" :TogglePopup="() => TogglePopup('printtrigger')">
            
             <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 40rem; overflow: auto">
                <Print />
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
</template>


<script>
import Popup from '@/components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';
import axios from 'axios';
import PrintVue from '@/views/Print.vue';
import Print from '@/views/Print.vue';

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
      showNotepad: false
    };
  },

  
methods:{
 
  checkRadio(){
          const a = document.querySelector('#list-radio-1');
          const b = document.querySelector('#list-radio-2');
          const c = document.querySelector('#list-radio-3');
          const d = document.querySelector('#list-radio-4');
          const e = document.querySelector('#list-radio-5');
          const f = document.querySelector('#list-radio-6');
          const g = document.querySelector('#list-radio-7');
    if (!(a.checked||b.checked||c.checked||d.checked||e.checked||f.checked||g.checked)==true){alert("wählen Sie mindestens eine Option für das weitere Vorgehen mit dem Patienten.") }
    else {this.submitcounter();this.sendvalue();alert("Ich danke Ihnen für die vollständige Diagnose.")}
  },
 showRezept()
{  
const a = document.querySelector('#checkbox1');

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
          const h = document.querySelector('#vue-checkbox1');
          const i = document.querySelector('#checkbox1');
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
 const h = document.querySelector('#checkbox1');
  if (h.checked==1){
                     data.append("economy",1 ) 
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
 data.append("step",'Sie haben Ihre Diagnose eingereicht')
  

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
            this.submitrezept();this.TogglePopup('printtrigger');
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
  
  components: { Popup, Notepad, PrintVue, Print }
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
  padding: 10px;
  border-radius: 10px;
  margin: 5px auto;
  
  width: 50%; 
  cursor: pointer;
  /* color: #444   */
}
 

</style>