<template>
  <div style="height:80vh; overflow:auto">
  <div   class="grid grid-cols-1 gap-2">
     <div class="sticky top-0 bg-emerald-600">
    <h1 class="h1 text-white" style=";"> <strong>Urindiagnostik </strong> </h1>
   <br> <h1 class="h1 text-white" style=";">man wählt aus der Liste aus, was man durchführen lassen möchte (Mehrfachauswahl möglich), dann muss ein Button "Abschicken" angeklickt werden, dann Info:  </h1>
    </div>
    <br>

    <div class="grid grid-cols-1 gap-2" >
  

<ul class="w-400  text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    <div class="grid grid-cols-4 gap-1" >
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox1" type="checkbox" value="" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">U-Stix</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox2" type="checkbox" value="" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Urin-Sediment</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox3" type="checkbox" value="" class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Urin-Kultur</label>
        </div>
    </li>
    </div>
</ul>

<button class="submitbutton"
@click.prevent="sendValue(); urinecounter() ; TogglePopup('sendTrigger')">
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
               >
                <Sendurine />
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
import Sendurine from './Sendurine.vue';
import axios from "axios";


export default {
  name:"Urines",
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
    
		sendValue() {
         
          var data = new FormData();
          const a = document.querySelector('#vue-checkbox1');
          const b = document.querySelector('#vue-checkbox2');
          const c = document.querySelector('#vue-checkbox3');
         

      data.append("urinstix", a.checked);
      data.append("urinsediment", b.checked);
      data.append("urinkultur", c.checked);
     data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=login",
           "./Api/api.php?action=sendurine",
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
    urinecounter() {
          var data = new FormData();
          const a = document.querySelector('#vue-checkbox1');
          const b = document.querySelector('#vue-checkbox2');
          const c = document.querySelector('#vue-checkbox3');
         console.log(a.checked);
         console.log(b.checked);
         console.log(c.checked);
         if (c.checked==1) {
          data.append("satisfaction",0);
          data.append("time",2880);
          data.append("step","Sie haben die Urinkultur beantragt");
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
            });}
          else if (b.checked==1){
          data.append("satisfaction",0);
          data.append("time",10);
          data.append("step","Sie haben die Urin-Sediment beantragt");
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
            });}
             else if (a.checked==1){
          data.append("satisfaction",0);
          data.append("time",5);
          data.append("step","Sie haben die U-Stix fur Urintest beantragt");
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
            });}
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
  
  components: { Notepad, Popup,  Sendurine }
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