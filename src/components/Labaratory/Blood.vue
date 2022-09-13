<template>
  <div  style="height:80vh; overflow:auto" >
  <div class="grid grid-cols-1 gap-2">
     <div class="sticky top-0 bg-emerald-600">
    <h1 class="h1 text-white" style=";"> <strong>Blutentnahme </strong> </h1>
   <br> <h1 class="h1 text-white" style=";">man wählt aus der Liste aus, was man durchführen lassen möchte (Mehrfachauswahl möglich), dann muss ein Button "Abschicken" angeklickt werden, dann Info:  </h1>
    </div>
    <br>

    <div  class="grid grid-cols-1 gap-2 " >
  
<div >
<ul  class="w-400  text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    <div  class="grid grid-cols-4 gap-1 " >
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox1" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">kleines Blutbild</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox2" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">großes Blutbild</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox3" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Gerinnung</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox4" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Entzündungsparameter</label>
        </div>
    </li>
      <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox5" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Glucosestoffwechsel</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox6" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Fettstoffwechsel</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox7" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Eisenstoffwechsel</label>
        </div>
    </li>
      <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox8" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"  >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Leber/Galle</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox9" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Pankreas</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox10" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"  >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Niere</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox11" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"  >
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Elektrolyte</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox12" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"  >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Schilddrüse/Nebenschilddrüse</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox13" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"  >
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Herz</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox14" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">B-Vitamine & Folsäure</label>
        </div>
    </li>
      <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox15" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">LDH</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox16" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Harnsäure</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox17" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"  >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">PSA</label>
        </div>
    </li>
      <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox18" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"  >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">beta-HCG</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox19" type="checkbox" value="1" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Serumelektrophorese</label>
        </div>
    </li>
    
    </div>
</ul></div>
<button class="submitbutton"
@click.prevent="bloodcounter() ;sendvalue(); TogglePopup('sendTrigger')">
         Abschicken
</button>

 <Popup v-if="popupTriggers.sendTrigger" :TogglePopup="() => TogglePopup('sendTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
               x>
                <Sendblood />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
    </div>
  </div>
  </div>
</template>

<script>
import Popup from '@/components/Popup2.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';
import Sendblood from './Sendblood.vue';
import axios from "axios";


export default {
  name:"Bloods",
  data() {
    return {counters: {
        safety: null,
        satisfaction: null,
        time: null,
        economy: null
      },
     
      showTooltip: false,
      showNotepad: false
    };
  },

  methods: {
		sendvalue() {
         
          var data = new FormData();
          const a = document.querySelector('#vue-checkbox1');
          const b = document.querySelector('#vue-checkbox2');
          const c = document.querySelector('#vue-checkbox3');
          const d = document.querySelector('#vue-checkbox4');
          const e = document.querySelector('#vue-checkbox5');
          const f = document.querySelector('#vue-checkbox6');
          const g = document.querySelector('#vue-checkbox7');
          const h = document.querySelector('#vue-checkbox8');
          const i = document.querySelector('#vue-checkbox9');
          const j = document.querySelector('#vue-checkbox10');
          const k = document.querySelector('#vue-checkbox11');
          const l = document.querySelector('#vue-checkbox12');
          const m = document.querySelector('#vue-checkbox13');
          const n = document.querySelector('#vue-checkbox14');
          const o = document.querySelector('#vue-checkbox15');
          const p = document.querySelector('#vue-checkbox16');
          const q = document.querySelector('#vue-checkbox17');
          const r = document.querySelector('#vue-checkbox18');
          const s = document.querySelector('#vue-checkbox19');

      data.append("bloodkleines", a.checked);
      data.append("bloodgrosses", b.checked);
      data.append("bloodgerin", c.checked);
      data.append("bloodentz", d.checked);
      data.append("bloodglucose",e.checked);
      data.append("bloodfetts", f.checked);
      data.append("bloodeisen",g.checked);
      data.append("bloodleber", h.checked);
      data.append("bloodpankreas",i.checked);
      data.append("bloodniere",j.checked);
      data.append("bloodelektrolyte", k.checked);
      data.append("bloodschild",l.checked);
      data.append("bloodherz", m.checked);
      data.append("bloodbvitamin", n.checked);
      data.append("bloodldh",  o.checked );
      data.append("bloodharn", p.checked);
      data.append("bloodpsa", q.checked);
      data.append("bloodhcg",r.checked);
      data.append("bloodserum",s.checked);
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=login",
           "./Api/api.php?action=sendblood",
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
    removevalue() {
         
         var data = new FormData();
         
        
     data.append("bloodkleines",0);
     data.append("bloodgrosses", 0);
     data.append("bloodgerin", 0);
     data.append("bloodentz", 0);
     data.append("bloodglucose",0);
     data.append("bloodfetts",0);
     data.append("bloodeisen",0);
     data.append("bloodleber", 0);
     data.append("bloodpankreas",0);
     data.append("bloodniere",0);
     data.append("bloodelektrolyte", 0);
     data.append("bloodschild", 0);
     data.append("bloodherz", 0);
     data.append("bloodbvitamin",0);
     data.append("bloodldh", 0);
     data.append("bloodharn", 0);
     data.append("bloodpsa", 0);
     data.append("bloodhcg",0);
     data.append("bloodserum",0);
     data.append("onlineuser",localStorage.email);
     axios
       .post(
         // "./Api/api.php?action=login",
          "./Api/api.php?action=sendblood",
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


    bloodcounter() {
      var data = new FormData();
  
     
      data.append("satisfaction",1);
      data.append("time",1440);
      data.append("step","Sie haben einen Bluttest beantragt");
      data.append("onlineuser",localStorage.email);
      
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=facharztvariable",
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
  
  components: { Notepad, Popup, Sendblood }
}
</script>

<style scoped>


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
  
  width:20%; 
  cursor: pointer;
  /* color: #444   */
}
 

</style>