<template>
 <div  style="height:80vh; overflow:auto" >
  <div class="grid grid-cols-1 gap-2">
    <div class="sticky top-0 bg-emerald-600">
    <h1 style="font-size:1.5em; " class="h1 text-white text-center" ><b>Wählen Sie den Facharzt aus, an den Sie den Patienten überweisen möchten. </b> </h1>
    </div>
  
  <h4 style="color:red">Wichtig: Sie können nur maximal 3 Spezialisten auswählen, an die Sie den Patienten überweisen. </h4>
  <br>
   <div  class="grid grid-cols-1 gap-2 " >
  
<div >
  <form  name="form_name" id="form_name">
<ul  class="w-400  text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    <div  class="grid grid-cols-4 gap-1 " >
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox1" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Augenheilkunde</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox2" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Chirurgie (ambulant)</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox3" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Gynäkologie</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox4" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Hals-Nasen-Ohrenheilkunde</label>
        </div>
    </li>
      <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox5" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Innere Medizin: Kardiologie</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox6" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Innere Medizin - Gastroenterologie</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox7" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Eisenstoffwechsel</label>
        </div>
    </li>
      <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox8" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"  >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Innere Medizin - Pulmologie</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox9" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Innere Medizin - Nephrologie</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox10" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"  >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Innere Medizin - Hämato-/Onkologie</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox11" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"  >
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Innere Medizin - Endokrinologie</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox12" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"  >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Neurochirurgie</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox13" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"  >
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Neurologie</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox14" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Orthopädie</label>
        </div>
    </li>
      <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox15" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Pädiatrie</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox16" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" >
            <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Psychiatrie/Psychosomatik</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox17" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"  >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"> Radiologie</label>
        </div>
    </li>
      <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox18" type="checkbox" name="check" class="check w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"  >
            <label for="react-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Urologie</label>
        </div>
    </li>
 
    
    </div>
</ul></form></div>
<div class="flex flex-row  justify-center items-center">
<button  class="submitbutton btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
@click.prevent="checkboxlimit(); ">
         Abschicken
</button>
</div>

 <Popup v-if="popupTriggers.sendTrigger" :TogglePopup="() => TogglePopup('sendTrigger')">
              <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" >Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
               x>
                <Senddoctor />
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
import Senddoctor from '@/components/Facharzt/Senddoctor.vue';
import axios from "axios";
import jquery from 'jquery';


export default {
  name:"Facharzts",
  data() {
    return {counters: {
        safety: null,
        satisfaction: null,
        time: null,
        economy: null
      },
     
      showTooltip: false,
      showNotepad: false,
      facharzts:[],
      
    };
  },
created(){
this.showvalue();
 },
  methods: {

    checkboxlimit(){
    var a = document.getElementsByName("check");
    var n = 0;
    var count;
    for(count=0; count<a.length;count++){
if(a[count].checked===true){
n=n+1;

}

    }
    if(n > 3){
    event.preventDefault();
alert('Sie können nur maximal 3 Spezialisten auswählen, an die Sie den Patienten überweisen. ')


return false;

    }
    else {this.doctorcounter() ;this.sendvalue(); this.TogglePopup('sendTrigger')}
      
      
      },

   showvalue(){
    setTimeout(function(){
 if (localStorage.augen == "true") { document.getElementById('vue-checkbox1').checked = true; } else { document.getElementById('vue-checkbox1').checked = false; }
if (localStorage.chiru == "true") { document.getElementById('vue-checkbox2').checked = true; } else { document.getElementById('vue-checkbox2').checked = false; }
if (localStorage.derma == "true") { document.getElementById('vue-checkbox3').checked = true; } else { document.getElementById('vue-checkbox3').checked = false; }
if (localStorage.gyna == "true") { document.getElementById('vue-checkbox4').checked = true; } else { document.getElementById('vue-checkbox4').checked = false; }
if (localStorage.hals == "true") { document.getElementById('vue-checkbox5').checked = true; } else { document.getElementById('vue-checkbox5').checked = false; }
if (localStorage.kardio == "true") { document.getElementById('vue-checkbox6').checked = true; } else { document.getElementById('vue-checkbox6').checked = false; }
if (localStorage.gastro == "true") { document.getElementById('vue-checkbox7').checked = true; } else { document.getElementById('vue-checkbox7').checked = false; }
if (localStorage.pulmo == "true") { document.getElementById('vue-checkbox8').checked = true; } else { document.getElementById('vue-checkbox8').checked = false; }
if (localStorage.nephro== "true") { document.getElementById('vue-checkbox9').checked = true; } else { document.getElementById('vue-checkbox9').checked = false; }
if (localStorage.onko== "true") { document.getElementById('vue-checkbox10').checked = true; } else { document.getElementById('vue-checkbox10').checked = false; }
if (localStorage.endo == "true") { document.getElementById('vue-checkbox11').checked = true; } else { document.getElementById('vue-checkbox11').checked = false; }
if (localStorage.neurochiru== "true") { document.getElementById('vue-checkbox12').checked = true; } else { document.getElementById('vue-checkbox12').checked = false; }
if (localStorage.neuro== "true") { document.getElementById('vue-checkbox13').checked = true; } else { document.getElementById('vue-checkbox13').checked = false; }
if (localStorage.ortho == "true") { document.getElementById('vue-checkbox14').checked = true; } else { document.getElementById('vue-checkbox14').checked = false; }
if (localStorage.padi== "true") { document.getElementById('vue-checkbox15').checked = true; } else { document.getElementById('vue-checkbox15').checked = false; }
if (localStorage.psychi == "true") { document.getElementById('vue-checkbox16').checked = true; } else { document.getElementById('vue-checkbox16').checked = false; }
if (localStorage.radio == "true") { document.getElementById('vue-checkbox17').checked = true; } else { document.getElementById('vue-checkbox17').checked = false; }
if (localStorage.uro== "true") { document.getElementById('vue-checkbox18').checked = true; } else { document.getElementById('vue-checkbox18').checked = false; }

}, 500);    






  },

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
        

         localStorage.setItem("augen", document.getElementById("vue-checkbox1").checked);
         localStorage.setItem("chiru", document.getElementById("vue-checkbox2").checked);
         localStorage.setItem("derma", document.getElementById("vue-checkbox3").checked);
         localStorage.setItem("gyna", document.getElementById("vue-checkbox4").checked);
         localStorage.setItem("hals", document.getElementById("vue-checkbox5").checked);
         localStorage.setItem("kardio", document.getElementById("vue-checkbox6").checked);
         localStorage.setItem("gastro", document.getElementById("vue-checkbox7").checked);
         localStorage.setItem("pulmo", document.getElementById("vue-checkbox8").checked);
         localStorage.setItem("nephro", document.getElementById("vue-checkbox9").checked);
         localStorage.setItem("onko", document.getElementById("vue-checkbox10").checked);
         localStorage.setItem("endo", document.getElementById("vue-checkbox11").checked);
         localStorage.setItem("neurochiru", document.getElementById("vue-checkbox12").checked);
         localStorage.setItem("neuro", document.getElementById("vue-checkbox13").checked);
         localStorage.setItem("ortho", document.getElementById("vue-checkbox14").checked);
         localStorage.setItem("padi", document.getElementById("vue-checkbox15").checked);
         localStorage.setItem("psychi", document.getElementById("vue-checkbox16").checked);
         localStorage.setItem("radio", document.getElementById("vue-checkbox17").checked);
         localStorage.setItem("uro", document.getElementById("vue-checkbox18").checked);
         








      data.append("augen", a.checked);
      data.append("chiru", b.checked);
      data.append("derma", c.checked);
      data.append("gyna", d.checked);
      data.append("hals",e.checked);
      data.append("kardio", f.checked);
      data.append("gastro",g.checked);
      data.append("pulmo", h.checked);
      data.append("nephro",i.checked);
      data.append("onko",j.checked);
      data.append("endo", k.checked);
      data.append("neurochiru",l.checked);
      data.append("neuro", m.checked);
      data.append("ortho", n.checked);
      data.append("padi",  o.checked );
      data.append("psychi", p.checked);
      data.append("radio", q.checked);
      data.append("uro",r.checked);
      data.append("onlineuser",localStorage.email);
      console.log(data)
      axios
        .post(
          // "./Api/api.php?action=login",
           "./Api/api.php?action=senddoctors",
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
 


    doctorcounter() {
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
     
          if(a.checked==true){   data.append("satisfaction",1);
      data.append("time",259200);
     data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Innere Medizin: Kardiologie"); 
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
           if(b.checked==true){
            data.append("satisfaction",1);
      data.append("time",43200);
      data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Chirurgie (ambulant)");
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
           }
            if(c.checked==true){ data.append("satisfaction",1);
      data.append("time",129600);
      data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Dermatologie");
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
             if(d.checked==true){   data.append("satisfaction",1);
      data.append("time",43200);
      data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Gynäkologie");
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
              if(e.checked==true){var data = new FormData();
  
    
      data.append("satisfaction",1);
      data.append("time",129600);
      data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Hals-Nasen-Ohrenheilkunde");
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
               if(f.checked==true){    data.append("satisfaction",1);
      data.append("time",259200);
     data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Innere Medizin: Kardiologie"); 
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
                if(g.checked==true){ data.append("satisfaction",1);
      data.append("time",172800);
      data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Innere Medizin - Gastroenterologie");
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
                 if(h.checked==true){   data.append("satisfaction",1);
      data.append("time",216000);
      data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Innere Medizin - Pulmologie");
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
                  if(i.checked==true){      data.append("satisfaction",1);
      data.append("time",259200);
      data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Innere Medizin - Nephrologie");
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
                   if(j.checked==true){  
      data.append("satisfaction",1);
      data.append("time",302400);
      data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Innere Medizin - Hämato-/Onkologie");
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
                    if(k.checked==true){ data.append("satisfaction",1);
      data.append("time",345600);
       data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Innere Medizin - Endokrinologie");
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
                     if(l.checked==true){ data.append("satisfaction",1);
      data.append("time",129600);
   data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Neurochirurgie");
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
                      if(m.checked==true){ data.append("satisfaction",1);
      data.append("time",43200);
   data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Neurologie");
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
                       if(n.checked==true){  data.append("satisfaction",1);
      data.append("time",43200);
   data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Orthopädie");
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
                        if(o.checked==true){  data.append("satisfaction",1);
      data.append("time",43200);
   data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Pädiatrie");
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
                         if(p.checked==true){ 
      data.append("satisfaction",1);
      data.append("time",259200);
   data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Psychiatrie/Psychosomatik");
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
                          if(q.checked==true){
      data.append("satisfaction",1);
      data.append("time",43200);
      data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Radiologie");
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
                           if(r.checked==true){  data.append("satisfaction",1);
      data.append("time",43200);
     data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Urologie");
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
  
  components: { Notepad, Popup, Senddoctor }
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
  border-radius: 20px;
  margin-right: 5%;
  margin-left:10%;
  margin-top:1%;
  width:20%;
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
  width: 500%;
  background-color: rgb(97, 96, 96);
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 100;
  right:0
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}


</style>