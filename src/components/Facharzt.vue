<template>
  <div>
    <div class="sticky top-0 bg-emerald-600">
    <h1 class="h1 text-white" style=";"> <strong>Wählen Sie den Facharzt aus, an den Sie den Patienten überweisen möchten: </strong> </h1>
    </div>
    <form action="" class="form" method="POST">
   <div style="margin-top:50px" class="grid grid-cols-3  gap-2">

   <button id="augenquestion" color="#42b983" class="button"
   @click.prevent="augencounter(),displayAugen();">
         Augenheilkunde
         </button>

    <button id="chiruquestion"  color="#42b983" class="button"
            @click.prevent="chirucounter(),displayChiru();">
            Chirurgie (ambulant)
          </button>

    <button id="dermaquestion" color="#42b983" class="button"
            @click.prevent="dermacounter(), displayDerma();">
          Dermatologie
          </button>
          
    <button id="gynaquestion"  color="#42b983" class="button"
            @click.prevent="gynacounter(),displayGyna();">
          Gynäkologie
         </button>
  
    <button id="halsquestion"  color="#42b983" class="button"
            @click.prevent="halscounter(), displayHals();">
           Hals-Nasen-Ohrenheilkunde
         </button>

   <button id="kardioquestion"  color="#42b983" class="button"
            @click.prevent="kardiocounter(),displayKardio();">
          Innere Medizin: Kardiologie
         </button>
         
   <button id="gastroquestion"  color="#42b983" class="button"
            @click.prevent="gastrocounter(), displayGastro();">
          Innere Medizin - Gastroenterologie
         </button>
         
   <button id="pulmoquestion"  color="#42b983" class="button"
            @click.prevent="pulmocounter(), displayPulmo();">
          Innere Medizin - Pulmologie
         </button>
         
   <button id="nephroquestion"  color="#42b983" class="button"
            @click.prevent="nephrocounter(),displayNephro();">
          Innere Medizin - Nephrologie
         </button>
         
  <button id="onkoquestion"  color="#42b983" class="button"
            @click.prevent="onkocounter(), displayOnko();">
          Innere Medizin - Hämato-/Onkologie
         </button>

  <button id="endoquestion" color="#42b983" class="button"
            @click.prevent="endocounter(),displayEndo();">
          Innere Medizin - Endokrinologie
         </button>

  <button id="neurochiruquestion"  color="#42b983" class="button"
            @click.prevent="neurochirucounter(),displayNeurochiru();">
          Neurochirurgie
         </button>


   <button id="neuroquestion" color="#42b983" class="button"
            @click.prevent="neurocounter(), displayNeuro();">
          Neurologie
         </button>

   <button id="orthoquestion"  color="#42b983" class="button"
            @click.prevent="orthocounter(),displayOrtho();">
          Orthopädie
         </button>

    <button id="padiquestion" color="#42b983" class="button"
            @click.prevent="padicounter(), displayPadi();">
          Pädiatrie
         </button>
  
     <button id="psychiquestion" color="#42b983" class="button"
            @click.prevent="psychicounter(),displayPsychi();">
          Psychiatrie/Psychosomatik
         </button>

     <button id="radioquestion" color="#42b983" class="button"
            @click.prevent="radiocounter(),displayRadio();">
          Radiologie
         </button>

     <button id="uroquestion"  color="#42b983" class="button"
            @click.prevent="urocounter(),displayUro();">
          Urologie
         </button>
        </div>  </form>
    <h3 id="augenanswer"  style="display:none">Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</h3> 
    <h3 id="chiruanswer"  style="display:none">Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</h3> 
    <h3 id="dermaanswer"  style="display:none">Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</h3> 
    <h3 id="endoanswer"   style="display:none">Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</h3> 
    <h3 id="gastroanswer" style="display:none">Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde. </h3> 
    <h3 id="gynaanswer"   style="display:none">Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</h3> 
    <h3 id="halsanswer"   style="display:none">Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</h3> 
    <h3 id="kardioanswer" style="display:none">Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</h3> 
    <h3 id="nephroanswer" style="display:none">Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</h3> 
    <h3 id="neuroanswer"  style="display:none">Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</h3> 
    <h3 id="neurochiruanswer" style="display:none">Patient mit starken Rückenschmerzen und Zeichen einer Radikulopathie (CAVE: beginnende Parese) bei bekannten BSV L3/4 und L4/5 sowie Z.n. radikaler Prostatektomie bei Prostata-Ca 2015, Gleason 6, T2b N1 M0 R0. Patient zeigt Hinweise auf mögliche ossäre Metastasierung seines Prostata-CA. Er wird zur Weiterbehandlung in die onkologische Klinik überwiesen.</h3> 
    <h3 id="onkoanswer"   style="display:none">Patient mit starken Rückenschmerzen und Zeichen einer Radikulopathie (CAVE: beginnende Parese) bei bekannten BSV L3/4 und L4/5 sowie Z.n. radikaler Prostatektomie bei Prostata-Ca 2015, Gleason 6, T2b N1 M0 R0. Patient zeigt Hinweise auf mögliche ossäre Metastasierung seines Prostata-CA. Er wird zur Weiterbehandlung in die onkologische Klinik geschickt.</h3> 
    <h3 id="orthoanswer"  style="display:none">Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</h3> 
    <h3 id="padianswer"   style="display:none">Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</h3> 
    <h3 id="psychianswer" style="display:none">Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</h3> 
    <h3 id="pulmoanswer"  style="display:none">Für diesen Fall ist ein solches Konsil nicht vorgesehen / notwendig. Es ergaben sich keine wegweisenden neuen Befunde.</h3> 
    <h3 id="radioanswer"  style="display:none">Patient mit starken Rückenschmerzen und Zeichen einer Radikulopathie bei bekannten BSV L3/4 und L4/5 sowie Z.n. radikaler Prostatektomie bei Prostata-Ca 2015, Gleason 6, T2b N1 M0 R0. Es zeigen sich unscharf begrenzte, inhomogene hyperdense Areale (Sklerosierungen) im Bereich der WK L2 - S1. Unter Berücksichtigung der Patientenvorgeschichte könnte es sich hierbei um osteoblastische Metastasen im Rahmen der Prostata-CA handeln. Zusätzlich sind Deckplatteneinbrüche des LWK 5 zu erkennen. Diese deuten auf eine Wirbelkörperfraktur ohne Instabilitätskriterien hin.</h3> 
    <h3 id="uroanswer"    style="display:none">Patient mit starken Rückenschmerzen und Zeichen einer Radikulopathie bei Z.n. radikaler Prostatektomie bei Prostata-Ca 2015, Gleason 6, T2b N1 M0 R0. Es wurde ein Anstieg des PSA auf 6,0ng/ml festgestellt, sodass von einer ossären Metastasierung in die Wirbelsäule auszugehen ist. Wir haben Hr. Schneider in die onkologische Klinik überwiesen, wo seine Weiterbehandlung koordiniert werden soll.</h3> 
  </div>
</template>

<script>
import Popup from '@/components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';
import axios from "axios";



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
      showNotepad: true
    };
  },
  methods: {
 displayAugen(){  if (augenanswer.style.display !== "none") {
        augenanswer.style.display = "none";
        augenquestion.style.opacity="1";
      } else {
        augenanswer.style.display = "block";
        augenquestion.style.opacity="0.5";
        chiruquestion.style.opacity="1";
        dermaquestion.style.opacity="1";
        endoquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        gynaquestion.style.opacity="1";
        kardioquestion.style.opacity="1";
        gastroquestion.style.opacity="1";
        chiruanswer.style.display = "none";
        dermaanswer.style.display = "none";
        endoanswer.style.display = "none";
        gastroanswer.style.display = "none";
        gynaanswer.style.display = "none";
        halsanswer.style.display = "none";
        kardioanswer.style.display = "none";
        neuroanswer.style.display = "none";
        neuroquestion.style.opacity="1";
        nephroanswer.style.display = "none";
        nephroquestion.style.opacity="1";
         onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
         orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
         padianswer.style.display = "none";
        padiquestion.style.opacity="1";
         psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
         pulmoanswer.style.display = "none";
        pulmoquestion.style.opacity="1";
         radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
         uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
         neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";


      }},
displayChiru(){  if (chiruanswer.style.display !== "none") {
        chiruanswer.style.display = "none";
        chiruquestion.style.opacity="1";
      } else {
        chiruanswer.style.display = "block";
        chiruquestion.style.opacity="0.5";
         augenanswer.style.display = "none";
        dermaanswer.style.display = "none";
        endoanswer.style.display = "none";
        gastroanswer.style.display = "none";
        gynaanswer.style.display = "none";
        halsanswer.style.display = "none";
        kardioanswer.style.display = "none";
        augenquestion.style.opacity="1";
        dermaquestion.style.opacity="1";
        endoquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        gynaquestion.style.opacity="1";
        kardioquestion.style.opacity="1";
        gastroquestion.style.opacity="1";
        neuroanswer.style.display = "none";
        neuroquestion.style.opacity="1";
        nephroanswer.style.display = "none";
        nephroquestion.style.opacity="1";
          onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
         orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
         padianswer.style.display = "none";
        padiquestion.style.opacity="1";
         psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
         pulmoanswer.style.display = "none";
        pulmoquestion.style.opacity="1";
         radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
         uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
         neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";
      }},
displayDerma(){  if (dermaanswer.style.display !== "none") {
        dermaanswer.style.display = "none";
        dermaquestion.style.opacity="1";

      } else {
        dermaanswer.style.display = "block";
        dermaquestion.style.opacity="0.5";
          chiruanswer.style.display = "none";
       augenanswer.style.display = "none";
        endoanswer.style.display = "none";
        gastroanswer.style.display = "none";
        gynaanswer.style.display = "none";
        halsanswer.style.display = "none";
        kardioanswer.style.display = "none";
        chiruquestion.style.opacity="1";
        augenquestion.style.opacity="1";
        endoquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        gynaquestion.style.opacity="1";
        kardioquestion.style.opacity="1";
        gastroquestion.style.opacity="1";
        neuroanswer.style.display = "none";
        neuroquestion.style.opacity="1";
        nephroanswer.style.display = "none";
        nephroquestion.style.opacity="1";
          onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
         orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
         padianswer.style.display = "none";
        padiquestion.style.opacity="1";
         psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
         pulmoanswer.style.display = "none";
        pulmoquestion.style.opacity="1";
         radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
         uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
         neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";
      }},
displayEndo(){  if (endoanswer.style.display !== "none") {
        endoanswer.style.display = "none";
        endoquestion.style.opacity="1";
      } else {
        endoanswer.style.display = "block";
        endoquestion.style.opacity="0.5";
        chiruanswer.style.display = "none";
        dermaanswer.style.display = "none";
        augenanswer.style.display = "none";
        gastroanswer.style.display = "none";
        gynaanswer.style.display = "none";
        halsanswer.style.display = "none";
        kardioanswer.style.display = "none";
        chiruquestion.style.opacity="1";
        dermaquestion.style.opacity="1";
        augenquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        gynaquestion.style.opacity="1";
        kardioquestion.style.opacity="1";
        gastroquestion.style.opacity="1";
        neuroanswer.style.display = "none";
        neuroquestion.style.opacity="1";
        nephroanswer.style.display = "none";
        nephroquestion.style.opacity="1";
          onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
         orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
         padianswer.style.display = "none";
        padiquestion.style.opacity="1";
         psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
         pulmoanswer.style.display = "none";
        pulmoquestion.style.opacity="1";
         radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
         uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
         neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";
      }},
displayGastro(){  if (gastroanswer.style.display !== "none") {
        gastroanswer.style.display = "none";
        gastroquestion.style.opacity="1";
      } else {
        gastroanswer.style.display = "block";
        gastroquestion.style.opacity="0.5";
          chiruanswer.style.display = "none";
        dermaanswer.style.display = "none";
        endoanswer.style.display = "none";
        augenanswer.style.display = "none";
        gynaanswer.style.display = "none";
        halsanswer.style.display = "none";
        kardioanswer.style.display = "none";
        chiruquestion.style.opacity="1";
        dermaquestion.style.opacity="1";
        endoquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        gynaquestion.style.opacity="1";
        kardioquestion.style.opacity="1";
        augenquestion.style.opacity="1";
        neuroanswer.style.display = "none";
        neuroquestion.style.opacity="1";
        nephroanswer.style.display = "none";
        nephroquestion.style.opacity="1";
          onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
         orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
         padianswer.style.display = "none";
        padiquestion.style.opacity="1";
         psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
         pulmoanswer.style.display = "none";
        pulmoquestion.style.opacity="1";
         radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
         uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
         neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";
      }},
displayGyna(){  if (gynaanswer.style.display !== "none") {
        gynaanswer.style.display = "none";
         gynaquestion.style.opacity="1";
      } else {
       augenanswer.style.display = "none";
        augenquestion.style.opacity="1";
        chiruquestion.style.opacity="1";
        dermaquestion.style.opacity="1";
        endoquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        gynaquestion.style.opacity="0.5";
        kardioquestion.style.opacity="1";
        gastroquestion.style.opacity="1";
        chiruanswer.style.display = "none";
        dermaanswer.style.display = "none";
        endoanswer.style.display = "none";
        gastroanswer.style.display = "none";
        gynaanswer.style.display = "block";
        halsanswer.style.display = "none";
        kardioanswer.style.display = "none";
        neuroanswer.style.display = "none";
        neuroquestion.style.opacity="1";
        nephroanswer.style.display = "none";
        nephroquestion.style.opacity="1";
          onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
         orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
         padianswer.style.display = "none";
        padiquestion.style.opacity="1";
         psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
         pulmoanswer.style.display = "none";
        pulmoquestion.style.opacity="1";
         radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
         uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
         neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";
      }},
displayHals(){  if (halsanswer.style.display !== "none") {
        halsanswer.style.display = "none";
        halsquestion.style.opacity="1";
      } else {
        halsanswer.style.display = "block";
        halsquestion.style.opacity="0.5";
          chiruanswer.style.display = "none";
        dermaanswer.style.display = "none";
        endoanswer.style.display = "none";
        gastroanswer.style.display = "none";
        gynaanswer.style.display = "none";
       augenanswer.style.display = "none";
        kardioanswer.style.display = "none";
        chiruquestion.style.opacity="1";
        dermaquestion.style.opacity="1";
        endoquestion.style.opacity="1";
        augenquestion.style.opacity="1";
        gynaquestion.style.opacity="1";
        kardioquestion.style.opacity="1";
        gastroquestion.style.opacity="1";
        neuroanswer.style.display = "none";
        neuroquestion.style.opacity="1";
        nephroanswer.style.display = "none";
        nephroquestion.style.opacity="1";
          onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
         orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
         padianswer.style.display = "none";
        padiquestion.style.opacity="1";
         psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
         pulmoanswer.style.display = "none";
        pulmoquestion.style.opacity="1";
         radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
         uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
         neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";
      }},
displayKardio(){  if (kardioanswer.style.display !== "none") {
        kardioanswer.style.display = "none";
         kardioquestion.style.opacity="1";
      } else {
        kardioanswer.style.display = "block";
        kardioquestion.style.opacity="0.5";
          chiruanswer.style.display = "none";
        dermaanswer.style.display = "none";
        endoanswer.style.display = "none";
        gastroanswer.style.display = "none";
        gynaanswer.style.display = "none";
        halsanswer.style.display = "none";
        augenanswer.style.display = "none";
        chiruquestion.style.opacity="1";
        dermaquestion.style.opacity="1";
        endoquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        gynaquestion.style.opacity="1";
       augenquestion.style.opacity="1";
        gastroquestion.style.opacity="1";
        neuroanswer.style.display = "none";
        neuroquestion.style.opacity="1";
        nephroanswer.style.display = "none";
        nephroquestion.style.opacity="1";
          onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
         orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
         padianswer.style.display = "none";
        padiquestion.style.opacity="1";
         psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
         pulmoanswer.style.display = "none";
        pulmoquestion.style.opacity="1";
         radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
         uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
         neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";
      }}, 
displayNephro(){  if (nephroanswer.style.display !== "none") {
        nephroanswer.style.display = "none";
        nephroquestion.style.opacity="1";
      } else {
        nephroanswer.style.display = "block";
        nephroquestion.style.opacity="0.5";
        chiruanswer.style.display = "none";
        dermaanswer.style.display = "none";
        endoanswer.style.display = "none";
        gastroanswer.style.display = "none";
        gynaanswer.style.display = "none";
        halsanswer.style.display = "none";
        augenanswer.style.display = "none";
        kardioanswer.style.display = "none";
        chiruquestion.style.opacity="1";
        kardioquestion.style.opacity="1";
        dermaquestion.style.opacity="1";
        endoquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        gynaquestion.style.opacity="1";
        augenquestion.style.opacity="1";
        gastroquestion.style.opacity="1";
        neuroanswer.style.display = "none";
        neuroquestion.style.opacity="1";
          onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
         orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
         padianswer.style.display = "none";
        padiquestion.style.opacity="1";
         psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
         pulmoanswer.style.display = "none";
        pulmoquestion.style.opacity="1";
         radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
         uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
         neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";
      }}, 
displayNeuro(){  if (neuroanswer.style.display !== "none") {
        neuroanswer.style.display = "none";
        neuroquestion.style.opacity="1";
      } else {
        neuroanswer.style.display = "block";
        neuroquestion.style.opacity="0.5";
        chiruanswer.style.display = "none";
        dermaanswer.style.display = "none";
        endoanswer.style.display = "none";
        gastroanswer.style.display = "none";
        gynaanswer.style.display = "none";
        halsanswer.style.display = "none";
        augenanswer.style.display = "none";
        kardioanswer.style.display = "none";
        nephroanswer.style.display = "none";
        nephroquestion.style.opacity="1";
        chiruquestion.style.opacity="1";
        kardioquestion.style.opacity="1";
        dermaquestion.style.opacity="1";
        endoquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        gynaquestion.style.opacity="1";
        augenquestion.style.opacity="1";
        gastroquestion.style.opacity="1";
          onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
         orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
         padianswer.style.display = "none";
        padiquestion.style.opacity="1";
         psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
         pulmoanswer.style.display = "none";
        pulmoquestion.style.opacity="1";
         radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
         uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
         neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";
      }}, 
displayNeurochiru(){  if (neurochiruanswer.style.display !== "none") {
        neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";

      } else {
        neurochiruanswer.style.display = "block";
        neurochiruquestion.style.opacity="0.5";
          chiruanswer.style.display = "none";
       augenanswer.style.display = "none";
        endoanswer.style.display = "none";
        gastroanswer.style.display = "none";
        gynaanswer.style.display = "none";
        halsanswer.style.display = "none";
        kardioanswer.style.display = "none";
        chiruquestion.style.opacity="1";
        augenquestion.style.opacity="1";
        endoquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        gynaquestion.style.opacity="1";
        kardioquestion.style.opacity="1";
        gastroquestion.style.opacity="1";
        neuroanswer.style.display = "none";
        neuroquestion.style.opacity="1";
        nephroanswer.style.display = "none";
        nephroquestion.style.opacity="1";
          onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
         orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
         padianswer.style.display = "none";
        padiquestion.style.opacity="1";
         psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
         pulmoanswer.style.display = "none";
        pulmoquestion.style.opacity="1";
         radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
         uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
       
      }},
displayOnko(){  if (onkoanswer.style.display !== "none") {
        onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
      } else {
        onkoanswer.style.display = "block";
        onkoquestion.style.opacity="0.5";
        chiruanswer.style.display = "none";
        dermaanswer.style.display = "none";
        augenanswer.style.display = "none";
        gastroanswer.style.display = "none";
        gynaanswer.style.display = "none";
        halsanswer.style.display = "none";
        kardioanswer.style.display = "none";
        chiruquestion.style.opacity="1";
        dermaquestion.style.opacity="1";
        augenquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        gynaquestion.style.opacity="1";
        kardioquestion.style.opacity="1";
        gastroquestion.style.opacity="1";
        neuroanswer.style.display = "none";
        neuroquestion.style.opacity="1";
        nephroanswer.style.display = "none";
        nephroquestion.style.opacity="1";
        orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
         padianswer.style.display = "none";
        padiquestion.style.opacity="1";
         psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
         pulmoanswer.style.display = "none";
        pulmoquestion.style.opacity="1";
         radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
         uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
         neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";
      }},
displayOrtho(){  if (orthoanswer.style.display !== "none") {
        orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
      } else {
        orthoanswer.style.display = "block";
        orthoquestion.style.opacity="0.5";
          chiruanswer.style.display = "none";
        dermaanswer.style.display = "none";
        endoanswer.style.display = "none";
        augenanswer.style.display = "none";
        gynaanswer.style.display = "none";
        halsanswer.style.display = "none";
        kardioanswer.style.display = "none";
        chiruquestion.style.opacity="1";
        dermaquestion.style.opacity="1";
        endoquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        gynaquestion.style.opacity="1";
        kardioquestion.style.opacity="1";
        augenquestion.style.opacity="1";
        neuroanswer.style.display = "none";
        neuroquestion.style.opacity="1";
        nephroanswer.style.display = "none";
        nephroquestion.style.opacity="1";
          onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
        padianswer.style.display = "none";
        padiquestion.style.opacity="1";
         psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
         pulmoanswer.style.display = "none";
        pulmoquestion.style.opacity="1";
         radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
         uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
         neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";
      }},
displayPadi(){  if (padianswer.style.display !== "none") {
        padianswer.style.display = "none";
         padiquestion.style.opacity="1";
      } else {
       augenanswer.style.display = "none";
        augenquestion.style.opacity="1";
        chiruquestion.style.opacity="1";
        dermaquestion.style.opacity="1";
        endoquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        padiquestion.style.opacity="0.5";
        kardioquestion.style.opacity="1";
        gastroquestion.style.opacity="1";
        chiruanswer.style.display = "none";
        dermaanswer.style.display = "none";
        endoanswer.style.display = "none";
        gastroanswer.style.display = "none";
        padianswer.style.display = "block";
        halsanswer.style.display = "none";
        kardioanswer.style.display = "none";
        neuroanswer.style.display = "none";
        neuroquestion.style.opacity="1";
        nephroanswer.style.display = "none";
        nephroquestion.style.opacity="1";
          onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
         orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
        psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
         pulmoanswer.style.display = "none";
        pulmoquestion.style.opacity="1";
         radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
         uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
         neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";
      }},
displayPsychi(){  if (psychianswer.style.display !== "none") {
        psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
      } else {
        psychianswer.style.display = "block";
        psychiquestion.style.opacity="0.5";
          chiruanswer.style.display = "none";
        dermaanswer.style.display = "none";
        endoanswer.style.display = "none";
        gastroanswer.style.display = "none";
        gynaanswer.style.display = "none";
       augenanswer.style.display = "none";
        kardioanswer.style.display = "none";
        chiruquestion.style.opacity="1";
        dermaquestion.style.opacity="1";
        endoquestion.style.opacity="1";
        augenquestion.style.opacity="1";
        gynaquestion.style.opacity="1";
        kardioquestion.style.opacity="1";
        gastroquestion.style.opacity="1";
        neuroanswer.style.display = "none";
        neuroquestion.style.opacity="1";
        nephroanswer.style.display = "none";
        nephroquestion.style.opacity="1";
          onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
         orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
         padianswer.style.display = "none";
        padiquestion.style.opacity="1";
        pulmoanswer.style.display = "none";
        pulmoquestion.style.opacity="1";
         radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
         uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
         neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";
      }},
displayPulmo(){  if (pulmoanswer.style.display !== "none") {
        pulmoanswer.style.display = "none";
         pulmoquestion.style.opacity="1";
      } else {
        pulmoanswer.style.display = "block";
        pulmoquestion.style.opacity="0.5";
          chiruanswer.style.display = "none";
        dermaanswer.style.display = "none";
        endoanswer.style.display = "none";
        gastroanswer.style.display = "none";
        gynaanswer.style.display = "none";
        halsanswer.style.display = "none";
        augenanswer.style.display = "none";
        chiruquestion.style.opacity="1";
        dermaquestion.style.opacity="1";
        endoquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        gynaquestion.style.opacity="1";
       augenquestion.style.opacity="1";
        gastroquestion.style.opacity="1";
        neuroanswer.style.display = "none";
        neuroquestion.style.opacity="1";
        nephroanswer.style.display = "none";
        nephroquestion.style.opacity="1";
          onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
         orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
         padianswer.style.display = "none";
        padiquestion.style.opacity="1";
         psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
         radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
         uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
         neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";
      }}, 
displayRadio(){  if (radioanswer.style.display !== "none") {
        radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
      } else {
        radioanswer.style.display = "block";
        radioquestion.style.opacity="0.5";
        chiruanswer.style.display = "none";
        dermaanswer.style.display = "none";
        endoanswer.style.display = "none";
        gastroanswer.style.display = "none";
        gynaanswer.style.display = "none";
        halsanswer.style.display = "none";
        augenanswer.style.display = "none";
        kardioanswer.style.display = "none";
        chiruquestion.style.opacity="1";
        kardioquestion.style.opacity="1";
        dermaquestion.style.opacity="1";
        endoquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        gynaquestion.style.opacity="1";
        augenquestion.style.opacity="1";
        gastroquestion.style.opacity="1";
        neuroanswer.style.display = "none";
        neuroquestion.style.opacity="1";
          onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
         orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
         padianswer.style.display = "none";
        padiquestion.style.opacity="1";
         psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
         pulmoanswer.style.display = "none";
        pulmoquestion.style.opacity="1";
         uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
         neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";
      }}, 
displayUro(){  if (uroanswer.style.display !== "none") {
        uroanswer.style.display = "none";
        uroquestion.style.opacity="1";
      } else {
        uroanswer.style.display = "block";
        uroquestion.style.opacity="0.5";
        chiruanswer.style.display = "none";
        dermaanswer.style.display = "none";
        endoanswer.style.display = "none";
        gastroanswer.style.display = "none";
        gynaanswer.style.display = "none";
        halsanswer.style.display = "none";
        augenanswer.style.display = "none";
        kardioanswer.style.display = "none";
        nephroanswer.style.display = "none";
        nephroquestion.style.opacity="1";
        chiruquestion.style.opacity="1";
        kardioquestion.style.opacity="1";
        dermaquestion.style.opacity="1";
        endoquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        gynaquestion.style.opacity="1";
        augenquestion.style.opacity="1";
        gastroquestion.style.opacity="1";
          onkoanswer.style.display = "none";
        onkoquestion.style.opacity="1";
         orthoanswer.style.display = "none";
        orthoquestion.style.opacity="1";
         padianswer.style.display = "none";
        padiquestion.style.opacity="1";
         psychianswer.style.display = "none";
        psychiquestion.style.opacity="1";
         pulmoanswer.style.display = "none";
        pulmoquestion.style.opacity="1";
         radioanswer.style.display = "none";
        radioquestion.style.opacity="1";
         neurochiruanswer.style.display = "none";
        neurochiruquestion.style.opacity="1";
      }}, 

augencounter() {
      var data = new FormData();
  
     
      data.append("satisfaction",1);
      data.append("time",129600);
      data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Augenheilkunde");
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
    },
chirucounter() {
      var data = new FormData();
  
    
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
    },
dermacounter() {
      var data = new FormData();
  
     
      data.append("satisfaction",1);
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
        });
    },
gynacounter() {
      var data = new FormData();
  
   
      data.append("satisfaction",1);
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
        });
    },
halscounter() {
      var data = new FormData();
  
    
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
        });
    },
kardiocounter() {
      var data = new FormData();
  
      data.append("satisfaction",1);
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
        });
    },
gastrocounter() {
      var data = new FormData();
  
     
      data.append("satisfaction",1);
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
        });
    },
pulmocounter() {
      var data = new FormData();
  
   
      data.append("satisfaction",1);
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
        });
    },
nephrocounter() {
      var data = new FormData();
  
     
      data.append("satisfaction",1);
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
        });
    },
onkocounter() {
      var data = new FormData();
  
      
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
        });
    },
endocounter() {
      var data = new FormData();
  
      
      data.append("satisfaction",1);
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
        });
    },
neurochirucounter() {
      var data = new FormData();
  
      
      data.append("satisfaction",1);
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
        });
    },
neurocounter() {
      var data = new FormData();
  
      
      data.append("satisfaction",1);
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
        });
    },
orthocounter() {
      var data = new FormData();
  
      
      data.append("satisfaction",1);
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
        });
    },
padicounter() {
      var data = new FormData();
  
      data.append("satisfaction",1);
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
        });
    },
psychicounter() {
      var data = new FormData();
  
      
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
        });
    },
radiocounter() {
      var data = new FormData();
  
      
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
        });
    },
    urocounter() {
      var data = new FormData();
  
      
      data.append("satisfaction",1);
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
  
  components: { Popup, Notepad}
}
</script>

<style scoped>

h3 {
  background:rgb(39, 190, 107);
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
;
    /* width: 50%; */
  cursor: pointer;
  color: #444
}

h3:hover {
  background: rgb(39, 190, 107)
}
.button {
  background: black;
  color: white;
  padding: 10px;
  border-radius: 10px;
  margin: 5px auto;
  width:300px;
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
