<template>
  <div  class="" >
    <button  class="popup-close" title="Zurück" @click="hauptmenu()" ><img class="h-10 w-10" src="../../src/assets/return.png" alt="Workflow" /> </button>
     <div class=" bg-emerald-600">
   
    <h1 style="font-size:1.5em; " class="h1 text-white text-center" ><b>Wählen Sie aus, welche Fragen Sie Ihrer Patientin/Ihrem Patienten stellen möchten:  </b> </h1>
    </div>
    <br>
    <form action="" class="form" method="POST">
      <div v-for="click in clickz">
    <div style="white-space: pre-wrap;" v-if="click.user==email" class="grid grid-cols-3  gap-1">
      
    <button v-if="click.beschreiben==1" id="beschreibenquestion"  color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
           @click.prevent="beschreibentimecounter(),displayBeschreiben();">
          <h6 style="font-size:1em; word-break: break-all;">Beschreiben Sie Ihre Symptome genauer (Charakter, Auslöser, Zeit, etc.).​</h6>
         </button>
    <button v-else id="beschreibenquestion"  color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
           @click.prevent="beschreibencounter(),displayBeschreiben();">
          <h6 style="font-size:1em; word-break: break-all;">Beschreiben Sie Ihre Symptome genauer (Charakter, Auslöser, Zeit, etc.).​</h6>
         </button>

    <button v-if="click.akutes==1" id="akutesquestion"   color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="akutestimecounter(),displayAkutes();">
             <h6 style="font-size:1em;word-break: break-all;">Akutes Ereignis oder Änderung der Lebensumstände?</h6>
          </button>
     <button v-else id="akutesquestion"   color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="akutescounter(),displayAkutes();">
             <h6 style="font-size:1em;word-break: break-all;">Akutes Ereignis oder Änderung der Lebensumstände?</h6>
          </button>
             
    <button v-if="click.medikamen==1" id="medikamenquestion" color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
           @click.prevent="medikamentimecounter(),displayMedikamen();">
           <h6 style="font-size:1em;word-break: break-all; ">Medikamentenanamnese</h6>
          </button>

    <button v-else id="medikamenquestion" color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
           @click.prevent="medikamencounter(),displayMedikamen();">
           <h6 style="font-size:1em;word-break: break-all; ">Medikamentenanamnese</h6>
          </button>

    <button v-if="click.gewohn==1" id="gewohnquestion"  color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="gewohntimecounter(),displayGewohn();">
           <h6 style="font-size:1em;word-break: break-all; ">Gewohnheiten, Lebensstil (Sport, Ernährung, etc.)​</h6>
         </button>

   <button v-else id="gewohnquestion"  color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="gewohncounter(),displayGewohn();">
           <h6 style="font-size:1em;word-break: break-all; ">Gewohnheiten, Lebensstil (Sport, Ernährung, etc.)​</h6>
         </button>
        
    <button v-if="click.nikotin==1" id="nikotinquestion" color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="nikotintimecounter(),displayNikotin();">
            <h6 style="font-size:1em;word-break: break-all; ">Nikotin, Alkohol oder Drogen?​</h6>
         </button>

    <button v-else id="nikotinquestion" color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="nikotincounter(),displayNikotin();">
            <h6 style="font-size:1em;word-break: break-all; ">Nikotin, Alkohol oder Drogen?​</h6>
         </button>

    <button v-if="click.allergien==1" id="allerginquestion"  color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="allergintimecounter(),displayAllergin();">
           <h6 style="font-size:1em;word-break: break-all; ">Allergien</h6>
         </button>
     <button v-else id="allerginquestion"  color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="allergincounter(),displayAllergin();">
           <h6 style="font-size:1em;word-break: break-all; ">Allergien</h6>
         </button>
          
    <button  v-if="click.vegetative==1"  id="vegetativequestion"  color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="vegetativetimecounter(),displayVegetative();">
           <h6 style="font-size:1em;word-break: break-all; ">Vegetative Anamnese (Appetit, Schlaf, Verdauung, etc.)</h6>
         </button>

    <button v-else id="vegetativequestion"  color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="vegetativecounter(),displayVegetative();">
           <h6 style="font-size:1em;word-break: break-all; ">Vegetative Anamnese (Appetit, Schlaf, Verdauung, etc.)</h6>
         </button>
          
     <button v-if="click.gyna==1" id="gynoquestion"  color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
           @click.prevent="gynotimecounter(),displayGyno();">
           <h6 style="font-size:1em; word-break: break-all; ">Gynäkologische-/Urologische-/Sexualanamnese​</h6>
         </button>

     <button v-else id="gynoquestion"  color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
           @click.prevent="gynocounter(),displayGyno();">
           <h6 style="font-size:1em;word-break: break-all; ">Gynäkologische-/Urologische-/Sexualanamnese​</h6>
         </button>
          
    <button v-if="click.psyche==1" id="psychequestion" color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="psychetimecounter(),displayPsyche();">
           <h6 style="font-size:1em;word-break: break-all; ">Psyche</h6>
         </button>

              
    <button v-else id="psychequestion" color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="psychecounter(),displayPsyche();">
           <h6 style="font-size:1em;word-break: break-all; ">Psyche</h6>
         </button>
         
     <button v-if="click.familien==1" id="familienquestion"   color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="familientimecounter(),displayFamilien();">
           <h6 style="font-size:1em;word-break: break-all; ">Familien- und Sozialanamnese (Beruf, Wohnsituation)</h6>
         </button>

      <button v-else id="familienquestion"   color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="familiencounter(),displayFamilien();">
           <h6 style="font-size:1em;word-break: break-all; ">Familien- und Sozialanamnese (Beruf, Wohnsituation)</h6>
         </button>

          </div>
          </div>
          </form>
          
    <h3 id="akutesanswer" style="display:none"> Schmerzbeginn vorgestern früh bei der Arbeit. Kein akutes Ereignis, kein unmittelbarer Zusammenhang mit der Nahrungsaufnahme oder körperlicher Bewegung. Keine Auslandsreisen in den letzten Wochen. Sie habe in den Tagen zuvor auch nichts Außergewöhnliches gegessen. Es bestehen keine gastrointestinalen Infekte in ihrem sozialen Umfeld.</h3> 
    <h3 id="allerginanswer" style="display:none">Keine bekannt.</h3> 
    <h3 id="beschreibenanswer" style="display:none">Die Schmerzen bestünden seit vorgestern früh bei der Arbeit (nun also 2 Tagen). Sie seien zunächst diffus und weniger stark gewesen. Allerdings habe sie dadurch kaum Appetit gehabt. Seit dem Abend habe es dann eher im rechten Unterbauch wehgetan. Die Schmerzen seien mehr oder weniger dauerhaft, dumpf und schwer lokalisierbar (irgendwo im rechten Unterbauch und/oder der rechten Leiste, die Patientin kann es nicht genau eingrenzen und deutet mit der flachen Hand auf einen breiten Bereich). Sie verstärkten sich durch Bewegung, in Ruhe sei es besser. Stärke gestern noch ca. 5-6/10, heute eher 7-8/10, zunehmend. </h3> 
    <h3 id="familienanswer" style="display:none">Die Patientin wohnt alleine. Eltern und Geschwister wohnen in der Umgebung, mit Ihnen stehe sie in gutem Kontakt. Alleinstehend. Von Beruf sei sie Einzelhandelskauffrau, arbeite im Supermarkt.</h3> 
    <h3 id="gewohnanswer" style="display:none">Normale Ernährung, Vollkost. Sie trinke nicht genug, meist knapp 1 l Saftschorle am Tag und Kaffee. Sie gehe einmal die Woche in einen Tanzkurs.</h3> 
    <h3 id="gynoanswer" style="display:none">Letzte Periode vor ca. 3-4 Wochen, die nächste erwarte sie in den kommenden paar Tagen. Normalerweise regelmäßig alle 28 Tage, Dauer i.d.R. 3 Tage, mittelstark, normalerweise vorher mäßige, aushaltbare Periodenschmerzen. Keine Veränderungen an der Brust bemerkt, Libido ohne Probleme. </h3> 
    <h3 id="medikamenanswer" style="display:none">L-Thyroxin, Vitaminpräparat (B-Komplex), Paracetamol gelegentlich bei Kopfschmerzen, gestern 2x, damit kaum Besserung.</h3> 
    <h3 id="nikotinanswer" style="display:none">Sie rauche ca. 5 Zigaretten am Tag. Alkohol und weitere Drogen verneint.</h3> 
    <h3 id="psycheanswer" style="display:none">Patientin wach, zu allen Qualitäten orieniert. Affekt und Psychomotorik unauffällig. Pat. kommt mit alltäglichen Belastungen gut zurecht. Konzentration, Aufmerksamkeit, Gedächtnis, Sprache o.p.B.</h3> 
    <h3 id="vegetativeanswer" style="display:none">Seit vorgestern keinen Appetit, Übelkeit. Bisher kein Erbrechen. Oft Probleme mit Obstipation. Letzter Stuhlgang am Tag vor Schmerzbeginn. Schlaf sei, abgesehen von den akuten Schmerzen, normalerweise gut.  </h3> 
 
 </div>
</template>

<script>
import Popup from '@/components/Popup2.vue';
import { ref } from 'vue';
import Notepad from '@/components/Bauch_Notepad.vue';
import Submit from '@/components/Bauch_Submit.vue';
import axios from "axios";


export default {
  
 name:"Anamneses",
  data() {
    return {counters: {
        safety: null,
        satisfaction: null,
        time: null,
        economy: null
      },
      
      showTooltip: false,
      showNotepad: false,
      clickz:[],
      email:localStorage.email,

    };
  },

  created(){this.currentpage();this.clicks(); this.sendthesteps(); },

 methods: {

  sendthesteps(){
    var data = new FormData();
     data.append("step","Der Benutzer ist auf dem Anamnese-Menü gelandet.")
    data.append("onlineuser",localStorage.email);
axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=sendthesteps",
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

    currentpage(){
    var data = new FormData();
     data.append("main",0);
     data.append("warte",0);data.append("patient",0);data.append("anamnese",1);data.append("patientenakte",0);data.append("laboratory",0);data.append("blood",0);data.append("urine",0);data.append("stool",0);data.append("sendblood",0);data.append("sendurine",0);data.append("sendstool",0);data.append("doctors",0);data.append("senddoctors",0);data.append("untersuchen",0);data.append("nicht",0);data.append("kopf",0);data.append("rumpf",0);data.append("thorax",0);data.append("wirbel",0);data.append("abdomen",0);data.append("obere",0);data.append("untere",0);data.append("genital",0);data.append("apparative",0);data.append("sono",0);data.append("ekg",0);data.append("lungen",0);data.append("sendsubmit",0);data.append("submit1",0);data.append("submit2",0);data.append("submit3",0);data.append("lab",0);data.append("afterlab",0);data.append("specialties",0);data.append("afterspecialties",0);data.append("prints",0);
    data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=currentpage",
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

  hauptmenu(){
    document.location.reload();
  },

clicks(){

  axios.get( "./Api/bauch_api.php?action=getclicks",)
    
    .then((response) => {this.clickz=response.data })

},

 displayAkutes(){ 
        akutesanswer.style.display = "block";
        akutesquestion.style.opacity="0.5";
        allerginquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
        nikotinquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
        allerginanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        familienanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "none";
        medikamenanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
      },
displayAllergin(){  
        allerginanswer.style.display = "block";
        allerginquestion.style.opacity="0.5";
         akutesanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        familienanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "none";
        medikamenanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        akutesquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
        nikotinquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
      },
displayBeschreiben(){
        beschreibenanswer.style.display = "block";
        beschreibenquestion.style.opacity="0.5";
          allerginanswer.style.display = "none";
       akutesanswer.style.display = "none";
        familienanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "none";
        medikamenanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        allerginquestion.style.opacity="1";
        akutesquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
        nikotinquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
      },
displayFamilien(){
        familienanswer.style.display = "block";
        familienquestion.style.opacity="0.5";
        allerginanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        akutesanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "none";
        medikamenanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        allerginquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        akutesquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
        nikotinquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
      },
displayGewohn(){ 
        gewohnanswer.style.display = "block";
        gewohnquestion.style.opacity="0.5";
          allerginanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        familienanswer.style.display = "none";
        akutesanswer.style.display = "none";
        gynoanswer.style.display = "none";
        medikamenanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        allerginquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
        nikotinquestion.style.opacity="1";
        akutesquestion.style.opacity="1";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
      },
displayGyno(){
       akutesanswer.style.display = "none";
        akutesquestion.style.opacity="1";
        allerginquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="0.5";
        nikotinquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
        allerginanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        familienanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "block";
        medikamenanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
      },
displayMedikamen(){ 
        medikamenanswer.style.display = "block";
        medikamenquestion.style.opacity="0.5";
          allerginanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        familienanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "none";
       akutesanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        allerginquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        akutesquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
        nikotinquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
      },
displayNikotin(){ 
        nikotinanswer.style.display = "block";
        nikotinquestion.style.opacity="0.5";
        allerginanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        familienanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "none";
        medikamenanswer.style.display = "none";
        akutesanswer.style.display = "none";
        allerginquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
       akutesquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
      }, 
displayPsyche(){
        psycheanswer.style.display = "block";
        psychequestion.style.opacity="0.5";
        allerginanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        familienanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "none";
        medikamenanswer.style.display = "none";
        akutesanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        allerginquestion.style.opacity="1";
        nikotinquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
        akutesquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
      }, 
displayVegetative(){
        vegetativeanswer.style.display = "block";
        vegetativequestion.style.opacity="0.5";
        allerginanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        familienanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "none";
        medikamenanswer.style.display = "none";
        akutesanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
        allerginquestion.style.opacity="1";
        nikotinquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
        akutesquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
      }, 

 akutestimecounter() {
      var data = new FormData();
     
      data.append("time",0.3);
      data.append("step","Sie haben akutes Ergebnis unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countertimevariable",
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
allergintimecounter() {
      var data = new FormData();
      data.append("time",0.3);
      data.append("step","Sie haben akutes Allergin unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countertimevariable",
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
beschreibentimecounter() {
      var data = new FormData();
  
 
      data.append("time",2)
      data.append("step","Sie haben Beschreiben Sie Ihre Symptome genauer! unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countertimevariable",
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
familientimecounter() {
      var data = new FormData();
  

      data.append("time",1);
      data.append("step","Sie haben Familien- und Sozialanamnese  unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countertimevariable",
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
gewohntimecounter() {
      var data = new FormData();
  
     
      data.append("time",1);
      data.append("step","Sie haben Gewohnheiten, Lebensstil  unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countertimevariable",
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
gynotimecounter() {
      var data = new FormData();
  
  
      data.append("time",2);
      data.append("step","Sie haben Gynokologische/Urologische/Sexualanamnese unter ausführlichere Anamnese angekreuzt")
       data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countertimevariable",
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
medikamentimecounter() {
      var data = new FormData();
  
   
      data.append("time",0.5);
      data.append("step","Sie haben Medikamentenanamnese unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countertimevariable",
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
nikotintimecounter() {
      var data = new FormData();
 
      data.append("time",1);
      data.append("step","Sie haben Nikotin, Alkohol, Drogen? unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countertimevariable",
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
psychetimecounter() {
      var data = new FormData();
  

      data.append("time",1);
      data.append("step","Sie haben Psyche unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countertimevariable",
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
vegetativetimecounter() {
      var data = new FormData();

      data.append("time",2);
      data.append("step","Sie haben vegetative Anamnese  unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countertimevariable",
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



 akutescounter() {
      var data = new FormData();
      data.append("economy",5.88);
      data.append("akutes",1)
      data.append("satisfaction",1);
      data.append("time",0.3);
  
      data.append("step","Sie haben akutes Ergebnis unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countervariable",
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
allergincounter() {
      var data = new FormData();
  
      data.append("economy",-2.94);
      data.append("satisfaction",0);
      data.append("allergien",1)
      data.append("time",0.3);
     
      data.append("step","Sie haben akutes Allergin unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countervariable",
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
beschreibencounter() {
      var data = new FormData();
  
      data.append("economy",5.88);
      data.append("satisfaction",1);
      data.append("beschreiben",1)
      data.append("time",2);
    
      data.append("step","Sie haben Beschreiben Sie Ihre Symptome genauer! unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countervariable",
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
familiencounter() {
      var data = new FormData();
  
      data.append("economy",5.88);
      data.append("satisfaction",1);
      data.append("time",1);
      data.append("familien",1)
      
      data.append("step","Sie haben Familien- und Sozialanamnese  unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countervariable",
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
gewohncounter() {
      var data = new FormData();
  
      data.append("economy",-2.94);
      data.append("satisfaction",0);
      data.append("time",0.75);
      data.append("gewohn",1)
   
      data.append("step","Sie haben Gewohnheiten, Lebensstil  unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countervariable",
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
gynocounter() {
      var data = new FormData();
  
      data.append("economy",5.88);
      data.append("satisfaction",1);
      data.append("time",2);
      data.append("gyna",1)
      
      data.append("step","Sie haben Gynokologische/Urologische/Sexualanamnese unter ausführlichere Anamnese angekreuzt")
       data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countervariable",
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
medikamencounter() {
      var data = new FormData();
  
      data.append("economy",5.88);
      data.append("satisfaction",1);
      data.append("time",0.5);
      data.append("medikamen",1)
      
      data.append("step","Sie haben Medikamentenanamnese unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countervariable",
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
nikotincounter() {
      var data = new FormData();
  
      data.append("economy",-2.94);
      data.append("satisfaction",0);
      data.append("time",1);
      data.append("nikotin",1)
     
      data.append("step","Sie haben Nikotin, Alkohol, Drogen? unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countervariable",
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
psychecounter() {
      var data = new FormData();
  
      data.append("economy",-2.94);
      data.append("satisfaction",0);
      data.append("time",1);
      data.append("psyche",1)
    
      data.append("step","Sie haben Psyche unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countervariable",
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
vegetativecounter() {
      var data = new FormData();
  
      data.append("economy",5.88);
      data.append("satisfaction",1);
      data.append("time",2);
      data.append("vegetative",1)
     
      data.append("step","Sie haben vegetative Anamnese  unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=countervariable",
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
  
  components: { Popup, Notepad, Submit }
}
</script>

<style scoped>
h3 {
  background:rgb(5,150,105);
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
;
    /* width: 50%; */
  cursor: pointer;
  color: rgb(255, 255, 255)
}
h6{
 white-space: pre-wrap;
}

h3:hover {
  background: rgb(5,150,105)
}
.button {
  background: black;
  margin-right: 5%;
  margin-left:1%;
  margin-top:2%;
  color: white;
  padding: 5%;
  border-radius: 20px;

  width:87%;
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
