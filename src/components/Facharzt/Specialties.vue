<template>
  <div style="height:80vh; overflow:auto">
    <div >
    <div class=" bg-emerald-600">
 <h1 class="h1 text-white " > <b>Facharzt</b> </h1>
</div><br><br>
<div v-for="doctor in doctors">
<div v-if="doctor.user===email">
<table   class=" border-separate border-spacing-8 border border-emerald-500" >
    <thead class="sticky bg-emerald-200 top-0">
      <tr>
        <th  class="border border-emerald-600 " >Facharzt </th>
        <th class="border border-emerald-600 ">Antwort</th>
        
      </tr>
    </thead>
    <tbody v-if="doctor.augen==1" class="border border-emerald-600 "  >
      <tr class="border border-emerald-600 ">
        <td class="bg-emerald-100 border border-emerald-600 ">Augenheilkunde</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
      </tr>
    </tbody>
    <tbody v-if="doctor.chiru==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Chirurgie (ambulant)</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
        
      </tr>

    </tbody>
    <tbody v-if="doctor.derma==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Dermatologie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
      </tr>
    </tbody>
    <tbody v-if="doctor.gyna==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Gynäkologie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
      </tr>
    </tbody>
    <tbody v-if="doctor.hals==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Hals-Nasen-Ohrenheilkunde</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
        
      </tr>
     
    </tbody>
    <tbody v-if="doctor.kardio==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Innere Medizin: Kardiologie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
       
      </tr>
    </tbody>
    <tbody v-if="doctor.gastro==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Innere Medizin - Gastroenterologie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
        
      </tr>
      
      
    </tbody>
    <tbody v-if="doctor.pulmo==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Innere Medizin - Pulmologie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
       
      </tr>
     
    </tbody>
    <tbody v-if="doctor.nephro==1">
    <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Innere Medizin - Nephrologie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
      </tr>
      
    </tbody>
    <tbody v-if="doctor.onko==1">
    <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Innere Medizin - Hämato-/Onkologie</td>
        <td>Patient mit starken Rückenschmerzen und Zeichen einer Radikulopathie (CAVE: beginnende Parese) bei bekannten BSV L3/4 und L4/5 sowie Z.n. radikaler Prostatektomie bei Prostata-Ca 2015, Gleason 6, T2b N1 M0 R0. Patient zeigt Hinweise auf mögliche ossäre Metastasierung seines Prostata-CA. Er wird zur Weiterbehandlung in die onkologische Klinik geschickt.</td>
       
      </tr>
      
    </tbody>
    <tbody v-if="doctor.endo==1">
    <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Innere Medizin - Endokrinologie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
      </tr>
      
    </tbody>
    <tbody v-if="doctor.neurochiru==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Neurochirurgie</td>
        <td>Patient mit starken Rückenschmerzen und Zeichen einer Radikulopathie (CAVE: beginnende Parese) bei bekannten BSV L3/4 und L4/5 sowie Z.n. radikaler Prostatektomie bei Prostata-Ca 2015, Gleason 6, T2b N1 M0 R0. Patient zeigt Hinweise auf mögliche ossäre Metastasierung seines Prostata-CA. Er wird zur Weiterbehandlung in die onkologische Klinik überwiesen.</td> 
      </tr>

    </tbody>
    <tbody v-if="doctor.neuro==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Neurologie</td>
        <td>Patient mit starken Rückenschmerzen und Zeichen einer Radikulopathie (CAVE: beginnende Parese) bei bekannten BSV L3/4 und L4/5 sowie Z.n. radikaler Prostatektomie bei Prostata-Ca 2015, Gleason 6, T2b N1 M0 R0. Patient zeigt Hinweise auf mögliche ossäre Metastasierung seines Prostata-CA. Er wird zur Weiterbehandlung in die onkologische Klinik überwiesen.</td> 
      </tr>
    </tbody>
      <tbody v-if="doctor.ortho==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Neurochirurgie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td> 
      </tr>
    </tbody>
      <tbody v-if="doctor.padi==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Neurochirurgie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td> 
      </tr>
    </tbody>
      <tbody v-if="doctor.psychi==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Neurochirurgie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td> 
      </tr>
    </tbody>
      <tbody v-if="doctor.radio==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Neurochirurgie</td>
        <td>Patient mit starken Rückenschmerzen und Zeichen einer Radikulopathie bei bekannten BSV L3/4 und L4/5 sowie Z.n. radikaler Prostatektomie bei Prostata-Ca 2015, Gleason 6, T2b N1 M0 R0. Es zeigen sich unscharf begrenzte, inhomogene hyperdense Areale (Sklerosierungen) im Bereich der WK L2 - S1. Unter Berücksichtigung der Patientenvorgeschichte könnte es sich hierbei um osteoblastische Metastasen im Rahmen der Prostata-CA handeln. Zusätzlich sind Deckplatteneinbrüche des LWK 5 zu erkennen. Diese deuten auf eine Wirbelkörperfraktur ohne Instabilitätskriterien hin. </td> 
      </tr>
    </tbody>
      <tbody v-if="doctor.uro==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Neurochirurgie</td>
        <td>Patient mit starken Rückenschmerzen und Zeichen einer Radikulopathie bei Z.n. radikaler Prostatektomie bei Prostata-Ca 2015, Gleason 6, T2b N1 M0 R0. Es wurde ein Anstieg des PSA auf 6,0ng/ml festgestellt, sodass von einer ossären Metastasierung in die Wirbelsäule auszugehen ist. Wir haben Hr. Schneider in die onkologische Klinik überwiesen, wo seine Weiterbehandlung koordiniert werden soll.</td> 
      </tr>
    </tbody>
  </table><br><br>
</div>
</div>
  </div>
 
  </div>
</template>

<script>
    import Popup from '@/components/Popup.vue';
    import { ref } from 'vue';
    import Notepad from '@/components/Notepad.vue';
   import axios from "axios";
  

    
    export default {
     name:"Alldoctors",
      data() {
        return {
          doctors: [],
          showTooltip: false,
          showNotepad: false,
          email:localStorage.email,
        };
      },
    
    created(){this.alldoctors();},
    methods: {
    alldoctors() {
        

    axios.get( "./Api/api.php?action=getdoctors",)
    
    .then((response) => {this.doctors=response.data })
    
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
      
      components: {Notepad, Popup}
    }
    </script>
    
    <style scoped>
    .submitbutton{
      background: #be123c;
      color: white;
      padding: 20px;
      border-radius: 10px;
      margin: 10px auto;
      min-height: 50px;
      
      cursor: pointer;
      align-self: center;
      justify-self: center;
      /* color: #444   */
    }
    .button {
      background: black;
      color: white;
      padding: 20px;
      border-radius: 10px;
      margin: 10px auto;
      width:200px;
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
    