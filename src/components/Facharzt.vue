<template>
  <div>
    <div class="sticky top-0 bg-emerald-600">
    <h1 class="h1 text-white" style=";"> <strong>Wählen Sie den Facharzt aus, an den Sie den Patienten überweisen möchten: </strong> </h1>
    </div>
    <form action="" class="form" method="POST">
   <button style="margin-top: 50px;margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
   @click.prevent="augencounter(),TogglePopup('augenTrigger')">
         Augenheilkunde
         </button>

          <Popup v-if="popupTriggers.augenTrigger" :TogglePopup="() => TogglePopup('augenTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Augen />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
  
          <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="chirucounter(),TogglePopup('chiruTrigger')">
            Chirurgie (ambulant)
          </button>

          <Popup v-if="popupTriggers.chiruTrigger" :TogglePopup="() => TogglePopup('chiruTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Chirurgie />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

          
          <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="dermacounter(), TogglePopup('dermaTrigger')">
          Dermatologie
          </button>

          <Popup v-if="popupTriggers.dermaTrigger" :TogglePopup="() => TogglePopup('dermaTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Dermatologie />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

          
          <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="gynacounter(),TogglePopup('gynaTrigger')">
          Gynäkologie
         </button>

          <Popup v-if="popupTriggers.gynaTrigger" :TogglePopup="() => TogglePopup('gynaTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Gyna />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
        
         <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="halscounter(), TogglePopup('halsTrigger')">
           Hals-Nasen-Ohrenheilkunde
         </button>

          <Popup v-if="popupTriggers.halsTrigger" :TogglePopup="() => TogglePopup('halsTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Hals />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

         <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="kardiocounter(),TogglePopup('kardioTrigger')">
          Innere Medizin: Kardiologie
         </button>

          <Popup v-if="popupTriggers.kardioTrigger" :TogglePopup="() => TogglePopup('kardioTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Kardio />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

          
         <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="gastrocounter(), TogglePopup('gastroTrigger')">
          Innere Medizin - Gastroenterologie
         </button>

          <Popup v-if="popupTriggers.gastroTrigger" :TogglePopup="() => TogglePopup('gastroTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Gastro />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

          
         <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="pulmocounter(), TogglePopup('pulmoTrigger')">
          Innere Medizin - Pulmologie
         </button>

          <Popup v-if="popupTriggers.pulmoTrigger" :TogglePopup="() => TogglePopup('pulmoTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Pulmo />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

          
        <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="nephrocounter(), TogglePopup('nephroTrigger')">
          Innere Medizin - Nephrologie
         </button>

          <Popup v-if="popupTriggers.nephroTrigger" :TogglePopup="() => TogglePopup('nephroTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Nephro />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

          
         <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="onkocounter(), TogglePopup('onkoTrigger')">
          Innere Medizin - Hämato-/Onkologie
         </button>

          <Popup v-if="popupTriggers.onkoTrigger" :TogglePopup="() => TogglePopup('onkoTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Onko />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
          <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="endocounter(),TogglePopup('endoTrigger')">
          Innere Medizin - Endokrinologie
         </button>

          <Popup v-if="popupTriggers.endoTrigger" :TogglePopup="() => TogglePopup('endoTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Endo />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

          <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="neurochirucounter(), TogglePopup('neurochirurgieTrigger')">
          Neurochirurgie
         </button>

          <Popup v-if="popupTriggers.neurochirurgieTrigger" :TogglePopup="() => TogglePopup('neurochirurgieTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Neurochirur />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
          <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="neurocounter(), TogglePopup('neuroTrigger')">
          Neurologie
         </button>

          <Popup v-if="popupTriggers.neuroTrigger" :TogglePopup="() => TogglePopup('neuroTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Neuro />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
          <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="orthocounter(),TogglePopup('orthoTrigger')">
          Orthopädie
         </button>

          <Popup v-if="popupTriggers.orthoTrigger" :TogglePopup="() => TogglePopup('orthoTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Ortho />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
          <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="padicounter(), TogglePopup('padiTrigger')">
          Pädiatrie
         </button>

          <Popup v-if="popupTriggers.padiTrigger" :TogglePopup="() => TogglePopup('padiTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Padiatre />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
          <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="psychicounter(),TogglePopup('psychiTrigger')">
          Psychiatrie/Psychosomatik
         </button>

          <Popup v-if="popupTriggers.psychiTrigger" :TogglePopup="() => TogglePopup('psychiTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Psychiatre />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

            <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="radiocounter(),TogglePopup('radioTrigger')">
          Radiologie
         </button>

          <Popup v-if="popupTriggers.radioTrigger" :TogglePopup="() => TogglePopup('radioTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Radiology />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

            <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="urocounter(),TogglePopup('uroTrigger')">
          Urologie
         </button>

          <Popup v-if="popupTriggers.uroTrigger" :TogglePopup="() => TogglePopup('uroTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Urology />
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
</template>

<script>
import Popup from '@/components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';
import Augen from './Facharzt/Augen.vue';
import Chirurgie from './Facharzt/Chirurgie.vue';
import Dermatologie from './Facharzt/Dermatologie.vue';
import Endo from './Facharzt/Endo.vue';
import Gastro from './Facharzt/Gastro.vue';
import Gyna from './Facharzt/Gyna.vue';
import Hals from './Facharzt/Hals.vue';
import Kardio from './Facharzt/Kardio.vue';
import Nephro from './Facharzt/Nephro.vue';
import Neuro from './Facharzt/Neuro.vue';
import Neurochirur from './Facharzt/Neurochirur.vue';
import Onko from './Facharzt/Onko.vue';
import Ortho from './Facharzt/Ortho.vue';
import Padiatre from './Facharzt/Padiatre.vue';
import Psychiatre from './Facharzt/Psychiatre.vue';
import Pulmo from './Facharzt/Pulmo.vue';
import Radiology from './Facharzt/Radiology.vue';
import Urology from './Facharzt/Urology.vue';
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
      showNotepad: false
    };
  },
  methods: {
    augencounter() {
      var data = new FormData();
  
     
      data.append("satisfaction",1);
      data.append("time",129600);
      data.append("step","Sie haben den Patienten an den Spezialisten empfohlen:Augenheilkunde");
      
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
  
  components: {Augen, Popup, Notepad, Augen, Chirurgie, Dermatologie, Endo, Gastro, Gyna,Hals,Kardio,Nephro, Neuro, Neurochirur, Onko, Ortho, Padiatre,Psychiatre,Urology,Radiology, Pulmo }
}
</script>

<style scoped>

.button {
  background: black;
  color: white;
  padding: 20px;
  border-radius: 10px;
  margin: 5px auto;
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
