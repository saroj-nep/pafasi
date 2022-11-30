<template>
  <div>
     <div class="sticky top-0 bg-emerald-600">
    <h1 style="font-size:1.5em; " class="h1 text-white text-center" ><b>Heutige Vorstellung beenden und (be-)handeln.​</b> </h1>
    </div>
    

    <div v-for="submit in submits">
    <div  v-if="submit.user==email">
      <div>
      
      <h2>Arbeitsdiagnose: <span style="color:red"> (Pflichtfeld)</span></h2><textarea id="arbeits3" rows="4"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline border-green-900" v-model="submit.diagnosis" required ></textarea>
        </div>
    
    <br>
      <div class=" bg-emerald-600">
    <h1 style="font-size:1.5em; " class="h1 text-white text-center" ><b>Wie ist Ihr weiteres Vorgehen? </b> </h1>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-2"> 
      <div>
       <h2>Sie können nur eine Auswahl aus diesen Optionen treffen: <span style="color:red"> (Pflichtfeld)</span></h2>
     <form>
       <ul class="w-200 text-sm font-medium text-white rounded-lg border border-emerald-200 bg-emerald-600 dark:bg-emerald-600 dark:border-gray-600 dark:text-white" >
    <li class="w-full rounded-t-lg  border-gray-200 dark:border-gray-600">
           <div v-if="submit.ambulance==1" class="flex items-center pl-12">
            <input id="list-radio-13"  type="radio"  value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required checked="true">
            <label for="list-radio-license" class="py-2 ml-2 w-full text-sm font-medium text-white dark:text-white">Rettungsdienst rufen und Notfallmaßnahmen ergreifen </label>
        </div>
      <div v-else class="flex items-center pl-12">
            <input id="list-radio-13" type="radio" disabled value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required >
            <label for="list-radio-license" class="py-2 ml-2 w-full text-sm font-medium text-white dark:text-white">Rettungsdienst rufen und Notfallmaßnahmen ergreifen </label>
        </div>
    </li>
    <li class="w-full rounded-t-lg  border-gray-200 dark:border-gray-600">
         <div v-if="submit.hospital==1" class="flex items-center pl-12">
            <input id="list-radio-23" checked="true" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-id" class="py-2 ml-2 w-full text-sm font-medium text-white dark:text-white">Krankenhauseinweisung</label>
        </div>
      <div v-else class="flex items-center pl-12">
            <input id="list-radio-23" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-id" class="py-2 ml-2 w-full text-sm font-medium text-white dark:text-white">Krankenhauseinweisung</label>
        </div>
    </li>

    <li class="w-full rounded-t-lg border-gray-200 dark:border-gray-600">
      
      <div v-if="submit.doctorloop==0" class="flex items-center pl-12">
            <input id="list-radio-323" type="radio"  value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="list-radio-millitary" class="py-2 ml-2 w-full text-sm font-medium text-white dark:text-white">Wiedereinbestellen (Wenn Sie diese Option wählen, kehren Sie zur Seite des Patienten zurück, um weitere Diagnostik durchzuführen.)</label>
        </div>
        <div v-else class="flex items-center pl-12">
            <input  disabled id="list-radio-323" type="radio"  value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="list-radio-millitary" class="py-2 ml-2 w-full text-sm font-medium text-white dark:text-white">Wiedereinbestellen </label>
        </div>
          </li>

    <li  class="w-full rounded-t-lg border-gray-200 dark:border-gray-600">
         <div v-if="submit.noappointment==1" class="flex items-center pl-24">
            <input checked="true" id="list-radio-33" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-millitary" class="py-1 ml-2 w-full text-sm font-medium text-white dark:text-white">Keine Verabreden</label>
        </div>
      <div v-else class="flex items-center pl-24">
            <input disabled id="list-radio-33" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-millitary" class="py-1 ml-2 w-full text-sm font-medium text-white dark:text-white">Keine Verabreden</label>
        </div>
    </li>
    <li  class="w-full rounded-t-lg  border-gray-200 dark:border-gray-600">
        <div v-if="submit.badappointment==1" class="flex items-center pl-24">
            <input checked="true" id="list-radio-43" type="radio"  value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-passport" class="py-1 ml-2 w-full text-sm font-medium text-white dark:text-white">Bei Verschlechterung</label>
        </div>
      <div v-else class="flex items-center pl-24">
            <input id="list-radio-43" type="radio" disabled value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-passport" class="py-1 ml-2 w-full text-sm font-medium text-white dark:text-white">Bei Verschlechterung</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg  border-gray-200 dark:border-gray-600">
        <div v-if="submit.twodays==1" class="flex items-center pl-24">
            <input  checked="true" id="list-radio-53" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-passport" class="py-1 ml-2 w-full text-sm font-medium text-white dark:text-white">in 2 Tagen</label>
        </div>
        <div v-else class="flex items-center pl-24">
            <input disabled id="list-radio-53" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-passport" class="py-1 ml-2 w-full text-sm font-medium text-white dark:text-white">in 2 Tagen</label>
        </div>
    </li>
    <li  class="w-full rounded-t-lg  border-gray-200 dark:border-gray-600">
        <div v-if="submit.fivedays==1" class="flex items-center pl-24">
            <input checked="true" id="list-radio-63" type="radio"  value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-passport" class="py-1 ml-2 w-full text-sm font-medium text-white dark:text-white">in 5 Tagen</label>
        </div>
        <div v-else class="flex items-center pl-24">
            <input id="list-radio-63" type="radio" disabled value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-passport" class="py-1 ml-2 w-full text-sm font-medium text-white dark:text-white">in 5 Tagen</label>
        </div>
    </li>
    <li  class="w-full rounded-t-lg  border-gray-200 dark:border-gray-600">
        <div v-if="submit.fourweeks==1" class="flex items-center pl-24">
            <input checked="true" id="list-radio-73" type="radio"  value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-passport" class="py-1 ml-2 w-full text-sm font-medium text-white dark:text-white">in 4 Wochen</label>
        </div>
        <div v-else class="flex items-center pl-24">
            <input id="list-radio-73" type="radio" disabled value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" required>
            <label for="list-radio-passport" class="py-1 ml-2 w-full text-sm font-medium text-white dark:text-white">in 4 Wochen</label>
        </div>
    </li>
    
</ul>
</form>
</div>
 
    
<div>
<h2>Sie können keine, eine oder beide dieser Optionen wählen: </h2>
<form>
 <ul class="w-200 text-sm font-medium text-white rounded-lg border border-emerald-200 bg-emerald-600 dark:bg-emerald-600 dark:border-gray-600 dark:text-white" >
    <li class="w-full rounded-t-lg  border-gray-200 dark:border-gray-600">
        <div v-if="submit.ausstellen==1" class="flex items-center pl-12">
            <input checked="true" id="ausstellencheck3" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="vue-checkbox" class="py-2 ml-2 w-full text-sm font-medium text-white dark:text-white">AU ausstellen</label>
        </div>
        <div v-else class="flex items-center pl-12">
            <input id="ausstellencheck3" type="checkbox" value="0" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="vue-checkbox" class="py-2 ml-2 w-full text-sm font-medium text-white dark:text-white">AU ausstellen</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg  border-gray-200 dark:border-gray-600">
        <div v-if="submit.rezept==1" class="flex items-center pl-12">
            <input checked="true" id="rezeptcheck3" type="checkbox" value="1" @click="showRezept();" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="react-checkbox" class="py-2 ml-2 w-full text-sm font-medium text-white dark:text-white">Rezept(e) und /oder Verordnungen ausstellen</label>
        </div>
        <div v-else class="flex items-center pl-12">
            <input id="rezeptcheck3" type="checkbox" value="0" @click="showRezept();" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="react-checkbox" class="py-2 ml-2 w-full text-sm font-medium text-white dark:text-white">Rezept(e) und /oder Verordnungen ausstellen</label>
        </div>
    </li>
    
    
</ul>
<div v-if="submit.rezept==1" id="rezept3" style="display:block" class="flex items-center pl-1">
            <label for="rezepttext" > Was verordnen Sie? <span style="color:red"> (Pflichtfeld)</span></label> 
          <textarea id="rezepttext3" rows="7" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline border-green-900" v-model="submit.rezeptext" ></textarea>
           
        </div>
        <div v-else id="rezept3" style="display:none" class="flex items-center pl-1">
            <label for="rezepttext" > Was verordnen Sie? <span style="color:red"> (Pflichtfeld)</span></label> 
          <textarea id="rezepttext3" rows="7" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline border-green-900" ></textarea>
           
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
                style="height: 80rem;  overflow: auto">
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
    <div class="flex flex-row  justify-center items-center">
<button type="submit" id="submitbutton3"  class="submitbutton btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
           @click.prevent="checkRadio(); ">
        Änderungen speichern und weiter
         </button>
</div>
        
    </div>

  </div>
  </div>
</template>


<script>
import Popup from '@/components/Popup2.vue';
import { ref } from 'vue';
import Notepad from '@/components/Meier_Notepad.vue';
import axios from 'axios';
import Print from '@/components/Meier_Prints.vue';


export default {
 name:"Submits3",
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
      submits:[],
      email:localStorage.email,
    };
  },
created(){

  this.currentpage();this.showvalue(); this.showRezept(); 
},

  
methods:{
   setcurrentpage(){
    var data = new FormData();
     data.append("main",0);
     data.append("warte",0);data.append("patient",1);data.append("anamnese",0);data.append("patientenakte",0);data.append("laboratory",0);data.append("blood",0);data.append("urine",0);data.append("stool",0);data.append("sendblood",0);data.append("sendurine",0);data.append("sendstool",0);data.append("doctors",0);data.append("senddoctors",0);data.append("untersuchen",0);data.append("nicht",0);data.append("kopf",0);data.append("rumpf",0);data.append("thorax",0);data.append("wirbel",0);data.append("abdomen",0);data.append("obere",0);data.append("untere",0);data.append("genital",0);data.append("apparative",0);data.append("sono",0);data.append("ekg",0);data.append("lungen",0);data.append("sendsubmit",0);data.append("submit1",0);data.append("submit2",0);data.append("submit3",0);data.append("lab",0);data.append("afterlab",0);data.append("specialties",0);data.append("afterspecialties",0);data.append("prints",0);
    data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/meier_api.php?action=currentpage",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            document.location.reload();
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
  
     currentpage(){
    var data = new FormData();
     data.append("main",0);
     data.append("warte",0);data.append("patient",0);data.append("anamnese",0);data.append("patientenakte",0);data.append("laboratory",0);data.append("blood",0);data.append("urine",0);data.append("stool",0);data.append("sendblood",0);data.append("sendurine",0);data.append("sendstool",0);data.append("doctors",0);data.append("senddoctors",0);data.append("untersuchen",0);data.append("nicht",0);data.append("kopf",0);data.append("rumpf",0);data.append("thorax",0);data.append("wirbel",0);data.append("abdomen",0);data.append("obere",0);data.append("untere",0);data.append("genital",0);data.append("apparative",0);data.append("sono",0);data.append("ekg",0);data.append("lungen",0);data.append("sendsubmit",0);data.append("submit1",0);data.append("submit2",0);data.append("submit3",1);data.append("lab",0);data.append("afterlab",0);data.append("specialties",0);data.append("afterspecialties",0);data.append("prints",0);
    data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/meier_api.php?action=currentpage",
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

  showvalue(){

    axios.get( "./Api/meier_api.php?action=getsubmit",)
    
    .then((response) => {this.submits=response.data;} )
    alert('Dies ist Ihre aktuelle Diagnose. Bitte nehmen Sie Änderungen vor, wenn Sie dies wünschen. Fahren Sie trotzdem fort.')

  },
    
  checkRadio(){
          const a = document.querySelector('#list-radio-13');
          const b = document.querySelector('#list-radio-23');
          const c = document.querySelector('#list-radio-33');
          const d = document.querySelector('#list-radio-43');
          const e = document.querySelector('#list-radio-53');
          const f = document.querySelector('#list-radio-63');
          const g = document.querySelector('#list-radio-73');
          const i = document.querySelector('#rezeptcheck3');
          var j = document.getElementById('rezepttext3').value;
          var k = document.getElementById('arbeits3').value;
           const l = document.querySelector('#list-radio-323');
    
    if(!(k.length >0)){alert("Bitte schreiben Sie Ihre Arbeitsdiagnose. Dies ist ein Pflichtfeld..") } 
    else if (!(a.checked||b.checked||c.checked||d.checked||e.checked||f.checked||g.checked||l.checked)==true){alert("wählen Sie mindestens eine Option für das weitere Vorgehen mit dem Patienten.") }
    else if(((i.checked==true) && (j.length ==0))){alert("Sie haben sich für die Ausstellung eines Rezepts entschieden. Bitte notieren Sie Ihre Rezept(e).") }      
    else {this.submitcounter();this.sendvalue();alert("Danke Ihnen für die vollständige Diagnose.")}
  },
showRezept()
{  
const a = document.querySelector('#rezeptcheck3');

if (a.checked ==1) {
rezept3.style.display = "block";

}
else {rezept3.style.display = "none";}

},

sendvalue() {
         
          var data = new FormData();
          const a = document.querySelector('#list-radio-13');
          const b = document.querySelector('#list-radio-23');
          const c = document.querySelector('#list-radio-33');
          const d = document.querySelector('#list-radio-43');
          const e = document.querySelector('#list-radio-53');
          const f = document.querySelector('#list-radio-63');
          const g = document.querySelector('#list-radio-73');
          const h = document.querySelector('#ausstellencheck3');
          const i = document.querySelector('#rezeptcheck3');
           const l = document.querySelector('#list-radio-323');
          
          var k = document.getElementById('arbeits3').value;
      if (i.checked){ var j = document.getElementById('rezepttext3').value;}
      else {var j =''}



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
      data.append("wiedereinbestellen",l.checked);
     if (l.disabled) {data.append("doctorloop",1);} else{data.append("doctorloop",l.checked);} 
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=login",
           "./Api/meier_api.php?action=sendsubmit3",
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
          const a = document.querySelector('#rezeptcheck3');
          const b = document.querySelector('#ausstellencheck3');        
     

if ((b.checked==1 && b.value==0)){ if ((a.checked==0 && a.value==0)) {data.append("economy",-3.125)}}
if ((b.checked==0 && b.value==0)){ if ((a.checked==1 && a.value==0)) {data.append("economy",6.25)}}
if ((b.checked==0 && b.value==0)){ if ((a.checked==0 && a.value==1)) {data.append("economy",-6.25)}}
if ((b.checked==0 && b.value==1)){ if ((a.checked==0 && a.value==0)) {data.append("economy",3.125)}}
if ((b.checked==1 && b.value==1)){ if ((a.checked==0 && a.value==0)) {data.append("economy",0)}}
if ((b.checked==0 && b.value==0)){ if ((a.checked==0 && a.value==0)) {data.append("economy",0)}}
if ((b.checked==1 && b.value==1)){ if ((a.checked==0 && a.value==1)) {data.append("economy",-6.25)}}
if ((b.checked==1 && b.value==1)){ if ((a.checked==1 && a.value==0)) {data.append("economy",6.25)}}
if ((b.checked==0 && b.value==1)){ if ((a.checked==1 && a.value==0)) {data.append("economy",9.375)}}
if ((b.checked==0 && b.value==1)){ if ((a.checked==1 && a.value==1)) {data.append("economy",3.125)}}
if ((b.checked==0 && b.value==0)){ if ((a.checked==1 && a.value==1)) {data.append("economy",0)}}
if ((b.checked==1 && b.value==1)){ if ((a.checked==1 && a.value==1)) {data.append("economy",0)}}
if ((b.checked==1 && b.value==0)){ if ((a.checked==1 && a.value==1)) {data.append("economy",-3.125)}}
if ((b.checked==0 && b.value==1)){ if ((a.checked==0 && a.value==1)) {data.append("economy",-3.125)}}
if ((b.checked==1 && b.value==0)){ if ((a.checked==1 && a.value==0)) {data.append("economy",3.125)}}
if ((b.checked==1 && b.value==0)){ if ((a.checked==0 && a.value==1)) {data.append("economy",-9.375)}}
 data.append("step",'Sie haben Ihre Diagnose eingereicht');
 data.append("onlineuser",localStorage.email);

  

 axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/meier_api.php?action=submitrezeptvariable",
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
submitcounter(){
   var data = new FormData();
          const a = document.querySelector('#list-radio-13');
          const b = document.querySelector('#list-radio-23');
          const c = document.querySelector('#list-radio-33');
          const d = document.querySelector('#list-radio-43');
          const e = document.querySelector('#list-radio-53');
          const f = document.querySelector('#list-radio-63');
          const g = document.querySelector('#list-radio-73');
           const l = document.querySelector('#list-radio-323');
         
          
 if (b.checked==true){data.append("safety",100);
  data.append("step",'Sie haben Ihre Diagnose eingereicht');
 data.append("onlineuser",localStorage.email);

  

 axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/meier_api.php?action=submitvariable3",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.submitrezept();
           
            this.TogglePopup('labTrigger');
          }
        })
        .catch(err => {
          console.log("Error", err);
        }); 
                     }
else if (l.checked==true){data.append("safety",100);

                     
                    


 data.append("step",'Sie haben Ihre Diagnose eingereicht');
 data.append("onlineuser",localStorage.email);

  

 axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/meier_api.php?action=submitvariable3",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.submitrezept();
           
            if (l.disabled) {this.TogglePopup('labTrigger')}
           else{ this.setcurrentpage();}
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
     }
    else 
    {data.append("step",'Sie haben Ihre Diagnose eingereicht');
 data.append("onlineuser",localStorage.email);

  

 axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/meier_api.php?action=submitvariable3",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.submitrezept();
           
            this.TogglePopup('labTrigger');
          }
        })
        .catch(err => {
          console.log("Error", err);
        }); }
    
    
    
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
  
  components: { Popup, Notepad,Print}
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
  padding: 1%;
  margin-top:1%;
  border-radius: 20px;
  width:50%;
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
  width: 400%;
  background-color: rgba(0, 0, 0, 0.689);
  color: #fff;
  text-align: center;
  font-size: small;
  padding: 1px 0;


  /* Position the tooltip */
  position: absolute;
  z-index: 100;
  right:0
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  
}

</style>