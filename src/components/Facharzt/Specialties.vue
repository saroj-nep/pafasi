<template>
  <div style="height:95vh; overflow:auto">
    <div >
<div class=" bg-emerald-600 justify-center">
 <h1 style="font-size:1.5em; " class="h1 text-white text-center" > <b>{{specialtiz}}</b> </h1>
</div><span style="color:red"> {{spantext}}</span><br><br>
<div v-for="doctor in doctors">
<div v-if="doctor.user===email">
  <div v-if="doctor.augen==1||doctor.chiru==1||doctor.derma==1||doctor.gyna==1||doctor.hals==1||doctor.kardio==1||doctor.gastro==1||doctor.pulmo==1||doctor.nephro==1||doctor.onko==1||doctor.endo==1||doctor.neurochiru==1||doctor.neuro==1||doctor.ortho==1||doctor.padi==1||doctor.psychi==1||doctor.radio==1||doctor.uro==1">
<table   class=" border-separate border-spacing-8 border border-emerald-500" >
    <thead class="sticky bg-emerald-200 top-0">
      <tr>
        <th  class="border border-emerald-600 " >Facharzt </th>
        <th class="border border-emerald-600 ">Antwort</th>
        
      </tr>
    </thead>
    <tbody v-if="doctor.augen==1" class="border border-emerald-600 "  >
      <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="augentag();">
      <tr class="border border-emerald-600 ">
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2 ">Augenheilkunde</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
      </tr>
    </tbody>
    <tbody v-if="doctor.chiru==1">
      <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="chirutag();">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2  ">Chirurgie (ambulant)</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
        
      </tr>

    </tbody>
    <tbody v-if="doctor.derma==1">
      <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="dermatag();">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2  ">Dermatologie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
      </tr>
    </tbody>
    <tbody v-if="doctor.gyna==1">
      <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="gynatag();">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2 ">Gynäkologie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
      </tr>
    </tbody>
    <tbody v-if="doctor.hals==1">
      <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="halstag();">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2  ">Hals-Nasen-Ohrenheilkunde</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
        
      </tr>
     
    </tbody>
    <tbody v-if="doctor.kardio==1">
      <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="kardiotag();">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2  ">Innere Medizin: Kardiologie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
       
      </tr>
    </tbody>
    <tbody v-if="doctor.gastro==1">
      <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="gastrotag();">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2  ">Innere Medizin - Gastroenterologie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
        
      </tr>
      
      
    </tbody>
    <tbody v-if="doctor.pulmo==1">
      <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="pulmotag();">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2 ">Innere Medizin - Pulmologie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
       
      </tr>
     
    </tbody>
    <tbody v-if="doctor.nephro==1">
      <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="nephrotag();">
    <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2  ">Innere Medizin - Nephrologie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
      </tr>
      
    </tbody>
    <tbody v-if="doctor.onko==1">
      <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="onkotag();">
    <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2 ">Innere Medizin - Hämato-/Onkologie</td>
        <td>Patient mit starken Rückenschmerzen und Zeichen einer Radikulopathie (CAVE: beginnende Parese) bei bekannten BSV L3/4 und L4/5 sowie Z.n. radikaler Prostatektomie bei Prostata-Ca 2015, Gleason 6, T2b N1 M0 R0. Patient zeigt Hinweise auf mögliche ossäre Metastasierung seines Prostata-CA. Er wird zur Weiterbehandlung in die onkologische Klinik geschickt.</td>
       
      </tr>
      
    </tbody>
    <tbody v-if="doctor.endo==1">
      <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="endotag();">
    <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2 ">Innere Medizin - Endokrinologie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td>
      </tr>
      
    </tbody>
    <tbody v-if="doctor.neurochiru==1">
      <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="neurochirutag();">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2  ">Neurochirurgie</td>
        <td>Patient mit starken Rückenschmerzen und Zeichen einer Radikulopathie (CAVE: beginnende Parese) bei bekannten BSV L3/4 und L4/5 sowie Z.n. radikaler Prostatektomie bei Prostata-Ca 2015, Gleason 6, T2b N1 M0 R0. Patient zeigt Hinweise auf mögliche ossäre Metastasierung seines Prostata-CA. Er wird zur Weiterbehandlung in die onkologische Klinik überwiesen.</td> 
      </tr>

    </tbody>
    <tbody v-if="doctor.neuro==1">
      <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="neurotag();">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2  ">Neurologie</td>
        <td>Patient mit starken Rückenschmerzen und Zeichen einer Radikulopathie (CAVE: beginnende Parese) bei bekannten BSV L3/4 und L4/5 sowie Z.n. radikaler Prostatektomie bei Prostata-Ca 2015, Gleason 6, T2b N1 M0 R0. Patient zeigt Hinweise auf mögliche ossäre Metastasierung seines Prostata-CA. Er wird zur Weiterbehandlung in die onkologische Klinik überwiesen.</td> 
      </tr>
    </tbody>
      <tbody v-if="doctor.ortho==1">
        <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="orthotag();">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2  ">Orthopädie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td> 
      </tr>
    </tbody>
      <tbody v-if="doctor.padi==1">
      <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="paditag();">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2  ">Pädiatrie</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td> 
      </tr>
    </tbody>
      <tbody v-if="doctor.psychi==1">
        <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="psychitag();">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2  ">Psychiatrie/Psychosomatik</td>
        <td>Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</td> 
      </tr>
    </tbody>
      <tbody v-if="doctor.radio==1">
        <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="radiotag();">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2 ">Radiologie</td>
        <td>Patient mit starken Rückenschmerzen und Zeichen einer Radikulopathie bei bekannten BSV L3/4 und L4/5 sowie Z.n. radikaler Prostatektomie bei Prostata-Ca 2015, Gleason 6, T2b N1 M0 R0. Es zeigen sich unscharf begrenzte, inhomogene hyperdense Areale (Sklerosierungen) im Bereich der WK L2 - S1. Unter Berücksichtigung der Patientenvorgeschichte könnte es sich hierbei um osteoblastische Metastasen im Rahmen der Prostata-CA handeln. Zusätzlich sind Deckplatteneinbrüche des LWK 5 zu erkennen. Diese deuten auf eine Wirbelkörperfraktur ohne Instabilitätskriterien hin. </td> 
      </tr>
    </tbody>
      <tbody v-if="doctor.uro==1">
        <img src="@/assets/Schneider.jpg" class="w-1 h-1 opacity-0" @load="urotag();">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 px-2 py-2 ">Urologie</td>
        <td>Patient mit starken Rückenschmerzen und Zeichen einer Radikulopathie bei Z.n. radikaler Prostatektomie bei Prostata-Ca 2015, Gleason 6, T2b N1 M0 R0. Es wurde ein Anstieg des PSA auf 6,0ng/ml festgestellt, sodass von einer ossären Metastasierung in die Wirbelsäule auszugehen ist. Wir haben Hr. Schneider in die onkologische Klinik überwiesen, wo seine Weiterbehandlung koordiniert werden soll.</td> 
      </tr>
    </tbody>
  </table>
  </div>
    
</div>
</div>
  </div>

   <div class="flex flex-row  justify-center items-center">
   <button v-if="specialtizfinal==0" class="button  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="() => TogglePopup('printTrigger')">
           <h3 style="font-size:1em;">Weiter</h3>
   </button>
    <button  v-else class="button  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="() => TogglePopup('beendenTrigger')">
           <h3 style="font-size:1em;">Weiter</h3>
   </button>
   </div>
   <br>

      
 <Popup2 v-if="popupTriggers.printTrigger" :TogglePopup="() => TogglePopup('printTrigger')">
           
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <Prints />
              </div>
              <div class="col-span-1">
               
              </div>
            </div>
          </Popup2>

 <Popup2 v-if="popupTriggers.beendenTrigger" :TogglePopup="() => TogglePopup('beendenTrigger')">
           
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <Afterspecialties />
              </div>
              <div class="col-span-1">
               
              </div>
            </div>
          </Popup2>
  </div>
</template>

<script>
    import Popup2 from '@/components/Popup2.vue';
 import Popup from '@/components/Popup.vue';
    import { ref } from 'vue';
    import Notepad from '@/components/Notepad.vue';
   import axios from "axios";
   import Afterspecialties from '@/components/Afterspecialties.vue';
import Prints from '../Prints.vue';
  

    
    export default {
     name:"Alldoctors",
      data() {
        return {
          doctors: [],
          showTooltip: false,
          showNotepad: false,
          email:localStorage.email,
          specialtiz:'',
          augentagz:null,
          chirutagz:null,
          dermatagz:null,
          gynatagz:null,
          halstagz:null,
          kardiotagz:null,
          gastrotagz:null,
          pulmotagz:null,
          nephrotagz:null,
          onkotagz:null,
          endotagz:null,
          neurochirutagz:null,
          neurotagz:null,
          orthotagz:null,
          paditagz:null,
          psychitagz:null,
          radiotagz:null,
          urotagz:null,
          spcecialtizfinal:null,
          spantext:''

        };
      },
    
    created(){this.currentpage();this.alldoctors(); this.tag()},
    methods: {
        currentpage(){
    var data = new FormData();
     data.append("main",0);
     data.append("warte",0);data.append("patient",0);data.append("anamnese",0);data.append("patientenakte",0);data.append("laboratory",0);data.append("blood",0);data.append("urine",0);data.append("stool",0);data.append("sendblood",0);data.append("sendurine",0);data.append("sendstool",0);data.append("doctors",0);data.append("senddoctors",0);data.append("untersuchen",0);data.append("nicht",0);data.append("kopf",0);data.append("rumpf",0);data.append("thorax",0);data.append("wirbel",0);data.append("abdomen",0);data.append("obere",0);data.append("untere",0);data.append("genital",0);data.append("apparative",0);data.append("sono",0);data.append("ekg",0);data.append("lungen",0);data.append("sendsubmit",0);data.append("submit1",0);data.append("submit2",0);data.append("submit3",0);data.append("lab",0);data.append("afterlab",0);data.append("specialties",1);data.append("afterspecialties",0);data.append("prints",0);
    data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=currentpage",
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

         augentag(){ this.augentagz=3; this.tag();
    },
    chirutag(){ this.chirutagz=1; this.tag();
    },
      dermatag(){ this.dermatagz=3; this.tag();
    },
     gynatag(){ this.gynatagz=1; this.tag();
    },
      halstag(){ this.halstagz=3; this.tag();
    },
       kardiotag(){ this.kardiotagz=6; this.tag();
    },
      gastrotag(){ this.gastrotagz=4; this.tag();
    },
        pulmotag(){ this.pulmotagz=5; this.tag();
    },
   nephrotag(){ this.nephrotagz=6; this.tag();
    },
     onkotag(){ this.onkotagz=7; this.tag();
    },
     endotag(){ this.endotagz=8; this.tag();
    },
      neurochirutag(){ this.neurochirutagz=3; this.tag();
    },
       neurotag(){ this.neurotagz=2; this.tag();
    },
     orthotag(){ this.orthotagz=2; this.tag();
    },
     paditag(){ this.paditagz=2; this.tag();
    },
    psychitag(){ this.pychitagz=6; this.tag();
    },
    radiotag(){ this.radiotagz=1; this.tag();
    },
     urotag(){ this.urotagz=1; this.tag();
    },
     
 tag(){
    
     this.specialtizfinal=Math.max(this.augentagz,this.chirutagz,this.dermatagz,this.gynatagz,this.halstagz,this.kardiotagz,this.gastrotagz,this.nephrotagz,this.pulmotagz,this.onkotagz, this.endotagz, this.neurochirutagz,this.neurotagz,this.orthotagz, this.paditagz,this.psychitagz,this.radiotagz,this.urotagz)
    if (!(this.specialtizfinal ==0))
     {this.specialtiz='Nach '+this.specialtizfinal+ ' Monat(en) werden Sie von den Fachärzten, an die Sie Ihre Patienten überwiesen haben, Briefe mit folgenden Antworten erhalten:';this.spantext='(Bitte beachten Sie die Schaltfläche am Ende des Berichts, um fortzufahren)' }
    else {this.specialtiz='Sie haben für die Diagnose keine Fachärzte konsultiert. Bitte klicken Sie auf Weiter.'}
   
 },

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
      
      components: { Notepad, Popup, Popup2, Afterspecialties, Prints }
    }
    </script>
    
    <style scoped>
.button{
   background: #be123c;
  color: white;
  padding: 1%;
  border-radius: 10px;
  margin-top:1%;
  width:10%;
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
    