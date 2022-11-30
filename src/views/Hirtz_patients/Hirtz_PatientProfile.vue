<template>
   <div style="position: sticky" class="sticky top-0">
<Header />
</div>
<div v-for="page in pagez">
  <div v-if="page.user==email">
   
    <div v-if="page.sendsubmit==1">
       
       <div class="popup  ">
    <div class="popup-inner     ">
     
    <div class= " justify-center">
      
          <h2 style="font-size:1.2em; " class="h1 text-white text-center" >Sie haben eine ausstehende Diagnoseübermittlung. Sie können den Fall nicht nachbearbeiten, solange Sie Ihre Diagnose nicht eingereicht haben. Bitte machen Sie an der Stelle weiter, an der Sie aufgehört haben.</h2>
         <div class= "flex justify-center">
            
        

         <button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="sendsubmittrigger();" >
           <h3 style="font-size:1em;">Ich möchte die Falldiagnose vorlegen. </h3>
         </button>


<button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="warteroom();" >
           <h3 style="font-size:1em;">Ich möchte zurück in das Wartezimmer. </h3>
         </button>

        </div>
      </div>
    </div>
  
  
    </div>
    </div>
    
    <div v-if="page.submit1==1">
        
       <div class="popup  ">
    <div class="popup-inner     ">
     
    <div class= " justify-center">
      
          <h2 style="font-size:1.2em; " class="h1 text-white text-center" >Sie haben eine ausstehende Diagnoseübermittlung. Sie können den Fall nicht nachbearbeiten, solange Sie Ihre Diagnose nicht eingereicht haben. Bitte machen Sie an der Stelle weiter, an der Sie aufgehört haben.</h2>
         <div class= "flex justify-center">
            
        

         <button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="submittrigger();" >
           <h3 style="font-size:1em;">Ich möchte die Falldiagnose vorlegen. </h3>
         </button>
            


<button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="warteroom();" >
           <h3 style="font-size:1em;">Ich möchte zurück in das Wartezimmer. </h3>
         </button>

        </div>
      </div>
    </div>
  
  
    </div>
    </div>
    
    <div v-if="page.lab==1">
       
       <div class="popup  ">
    <div class="popup-inner     ">
     
    <div class= " justify-center">
      
          <h2 style="font-size:1.2em; " class="h1 text-white text-center" >Sie haben eine ausstehende Diagnoseübermittlung. Sie können den Fall nicht nachbearbeiten, solange Sie Ihre Diagnose nicht eingereicht haben. Bitte machen Sie an der Stelle weiter, an der Sie aufgehört haben.</h2>
         <div class= "flex justify-center">
            
        

         <button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="labtrigger();" >
           <h3 style="font-size:1em;">Ich möchte die Falldiagnose vorlegen. </h3>
         </button>
        


<button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="warteroom();" >
           <h3 style="font-size:1em;">Ich möchte zurück in das Wartezimmer. </h3>
         </button>

        </div>
      </div>
    </div>
  
  
    </div>
    </div>
    
    <div v-if="page.afterlab==1">
       
       <div class="popup  ">
    <div class="popup-inner     ">
     
    <div class= " justify-center">
      
          <h2 style="font-size:1.2em; " class="h1 text-white text-center" >Sie haben eine ausstehende Diagnoseübermittlung. Sie können den Fall nicht nachbearbeiten, solange Sie Ihre Diagnose nicht eingereicht haben. Bitte machen Sie an der Stelle weiter, an der Sie aufgehört haben.</h2>
         <div class= "flex justify-center">
            
        

         <button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent=" afterlabtrigger();" >
           <h3 style="font-size:1em;">Ich möchte die Falldiagnose vorlegen. </h3>
         </button>
            

<button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="warteroom();" >
           <h3 style="font-size:1em;">Ich möchte zurück in das Wartezimmer. </h3>
         </button>

        </div>
      </div>
    </div>
  
  
    </div>
    </div>
    
    <div v-if="page.specialties==1">
       
       <div class="popup  ">
    <div class="popup-inner     ">
     
    <div class= " justify-center">
      
          <h2 style="font-size:1.2em; " class="h1 text-white text-center" >Sie haben eine ausstehende Diagnoseübermittlung. Sie können den Fall nicht nachbearbeiten, solange Sie Ihre Diagnose nicht eingereicht haben. Bitte machen Sie an der Stelle weiter, an der Sie aufgehört haben.</h2>
         <div class= "flex justify-center">
            
        

         <button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="specialtiestrigger();" >
           <h3 style="font-size:1em;">Ich möchte die Falldiagnose vorlegen. </h3>
         </button>
         


<button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="warteroom();" >
           <h3 style="font-size:1em;">Ich möchte zurück in das Wartezimmer. </h3>
         </button>

        </div>
      </div>
    </div>
  
  
    </div>
    </div>
    
    <div v-if="page.afterspecialties==1">
       
       <div class="popup  ">
    <div class="popup-inner     ">
     
    <div class= " justify-center">
      
          <h2 style="font-size:1.2em; " class="h1 text-white text-center" >Sie haben eine ausstehende Diagnoseübermittlung. Sie können den Fall nicht nachbearbeiten, solange Sie Ihre Diagnose nicht eingereicht haben. Bitte machen Sie an der Stelle weiter, an der Sie aufgehört haben.</h2>
         <div class= "flex justify-center">
            
        

         <button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="afterspecialtiestrigger()" >
           <h3 style="font-size:1em;">Ich möchte die Falldiagnose vorlegen. </h3>
         </button>
          

<button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="warteroom();" >
           <h3 style="font-size:1em;">Ich möchte zurück in das Wartezimmer. </h3>
         </button>

        </div>
      </div>
    </div>
  
  
    </div>
    </div>
    
    <div v-if="page.submit2==1">
       
       <div class="popup  ">
    <div class="popup-inner     ">
     
    <div class= " justify-center">
      
          <h2 style="font-size:1.2em; " class="h1 text-white text-center" >Sie haben eine ausstehende Diagnoseübermittlung. Sie können den Fall nicht nachbearbeiten, solange Sie Ihre Diagnose nicht eingereicht haben. Bitte machen Sie an der Stelle weiter, an der Sie aufgehört haben.</h2>
         <div class= "flex justify-center">
            
        

         <button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="submit2trigger();" >
           <h3 style="font-size:1em;">Ich möchte die Falldiagnose vorlegen. </h3>
         </button>
            


<button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="warteroom();" >
           <h3 style="font-size:1em;">Ich möchte zurück in das Wartezimmer. </h3>
         </button>

        </div>
      </div>
    </div>
  
  
    </div>
    </div>
    
    <div v-if="page.submit3==1">
       
       <div class="popup  ">
    <div class="popup-inner     ">
     
    <div class= " justify-center">
      
          <h2 style="font-size:1.2em; " class="h1 text-white text-center" >Sie haben eine ausstehende Diagnoseübermittlung. Sie können den Fall nicht nachbearbeiten, solange Sie Ihre Diagnose nicht eingereicht haben. Bitte machen Sie an der Stelle weiter, an der Sie aufgehört haben.</h2>
         <div class= "flex justify-center">
            
        

         <button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="submit3trigger();" >
           <h3 style="font-size:1em;">Ich möchte die Falldiagnose vorlegen. </h3>
         </button>
           


<button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="warteroom();" >
           <h3 style="font-size:1em;">Ich möchte zurück in das Wartezimmer. </h3>
         </button>

        </div>
      </div>
    </div>
  
  
    </div>
    </div>
      <div v-if="page.prints==1">
       
       <div class="popup  ">
    <div class="popup-inner     ">
     
    <div v-if="page.tutor==0" class= " justify-center">
      
          <h2 style="font-size:1.2em; " class="h1 text-white text-center" >Sie haben die Falldiagnose bereits übermittelt. Gehen Sie zurück in den Warteraum, um Ihre Ergebnisse zu sehen.</h2>
         <div class= "flex justify-center">
            
        

         <!-- <button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="printstrigger();" >
           <h3 style="font-size:1em;">Ich möchte den Fall neu bearbeiten.</h3>
         </button> -->
           


<button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="warteroom();" >
           <h3 style="font-size:1em;">Ich möchte zurück in das Wartezimmer. </h3>
         </button>

        </div>
      </div>
      <div v-if="page.tutor==1" class= " justify-center">
      
          <h2 style="font-size:1.2em; " class="h1 text-white text-center" >Sie haben die Falldiagnose bereits übermittelt. Wiederholen Sie den Fall (die gesamte Historie wird gelöscht) oder gehen Sie zurück in den Warteraum, um Ihre Ergebnisse zu sehen.</h2>
         <div class= "flex justify-center">
            
        

         <button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="printstrigger();" >
           <h3 style="font-size:1em;">Ich möchte den Fall neu bearbeiten.</h3>
         </button>
           


<button  class="otherbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="warteroom();" >
           <h3 style="font-size:1em;">Ich möchte zurück in das Wartezimmer. </h3>
         </button>

        </div>
      </div>
    </div>
  
  
    </div>
    </div>
    <div v-else>
 
  <div >

    <!-- <div class="grid grid-cols-4 gap-4">
  <div>01</div>
  <div>09</div>
</div> -->


    <!-- <div class="row"> -->
    <div class="grid grid-cols-4 gap-4">
      <!-- <div class="column left"> -->
      <!-- <div class="col-span-1">
        <div class="patient">
          <div>
            <h1><strong> Case {{ patient.id }}: {{ patient.title }}</strong></h1>
          </div>
        </div>
      </div> -->
      
      <div style="" class="col-span-3 ">
        <div class="shadow-md shadow-green-600 bg-green-50 " style="display:flex;  padding: 20px; margin-left:10px; padding-left: 40px; border-radius: 10px;">
          <div class=" " style="width: 20%;">
            <div class="grid grid-cols-1 pl-6 ">
              <img src= "../../assets/Hirtz.jpg" class="object-contain h-48 " alt="Patient Image" style="top: 20px;" />   
         
            <div class="flex content-start "><h1><b> Hr. Pascal Hirtz</b></h1></div>
              <div class="flex content-start   ">Alter: 30 J</div>
              <div class="flex content-start    ">Geschlecht: Männlich</div>
            </div>
           
          </div>
          <div class="fallbeschreibung pl-10" style="width: 75%">
            <!-- Should be replaced by a widget -->
            <h3 style="font-size:3ex; "><b>Fallbeschreibung</b></h3>
            <br>
            <p style="border-radius: 5px">"Herr Pascal Hirtz, 1,85cm groß, schlanker EZ, AZ gut, freundliches Auftreten. Herr Hirtz bewegt sich soweit jugendlich agil durch das Sprechzimmer, er zeigt ein leichtes Zögern, als er sich drehen muss, um die Tür zu schließen und beim Hinsetzen.
Hr. Hirtz kommt mit der Bitte um Krankschreibung, da er unter sehr starken Rückenschmerzen leide. Da sei wohl etwas ausgerenkt. Dies ist schon das dritte Mal innerhalb von drei Wochen, dass er sich bei Ihnen mit der Bitte nach AU wegen der gleichen Beschwerden vorstellt."					
					
					
					
					
					</p>
            <!-- </div> -->
            <!-- <div class="column left"> -->
            <!-- </div> -->
          </div>
        </div>
        <br>
        <div >
          <div class=" text-center bg-emerald-600 ml-5">

    <h1 style="font-size:1.5em; " class="h1 text-white text-center" > <b>Was werden Sie als
              Nächstes tun? </b> </h1>
    </div>
<br>

        <div class="grid grid-cols-2  rounded-lg pb-8 " style="margin-left:2%" >
          <div class="grid">
          <button  color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="() => TogglePopup('anamneseTrigger')">
           <h3 style="font-size:1em; "> Ausführlichere Anamnese durchführen</h3>
          </button>

          <Popup2 v-if="popupTriggers.anamneseTrigger" :TogglePopup="() => TogglePopup('anamneseTrigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="../../assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="../../assets/Expand.png"  alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" >Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  ; overflow: auto">
                <Anamnese />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup2>
  
          <button  color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="() => TogglePopup('untersuchenTrigger')">
            <h3 style="font-size:1em; ">Untersuchen</h3>
          </button>

          <Popup v-if="popupTriggers.untersuchenTrigger" :TogglePopup="() => TogglePopup('untersuchenTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="../../assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="../../assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;   overflow: auto">
                <Untersuchen />
              </div>
              <div >
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

         <div v-for="click in clickz" >
          <div v-if="click.user==email">
          <button v-if="click.patientenakte==1" method="POST"  color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="patientenaktetimecounter();TogglePopup('patientenakteTrigger')">
           <h3 style="font-size:1em;">Einen Blick in die Patientenakte werfen</h3></button>
        
          <button v-else method="POST"  color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="patientenaktecounter(),TogglePopup('patientenakteTrigger')">
           <h3 style="font-size:1em;">Einen Blick in die Patientenakte werfen</h3></button>
        </div>
        </div>
          
          <Popup v-if="popupTriggers.patientenakteTrigger" :TogglePopup="() => TogglePopup('patientenakteTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="../../assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="../../assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <Patientenakte />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

         </div>
         <div class="grid">
          <button color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="() => TogglePopup('laboranordnungenTrigger')">
            <h3 style="font-size:1em;">Laboranordnungen</h3>
         </button>

          <Popup v-if="popupTriggers.laboranordnungenTrigger" :TogglePopup="() => TogglePopup('laboranordnungenTrigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="../../assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="../../assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <Labaratory />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
        
         <button color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="() => TogglePopup('facharztTrigger')">
            <h3 style="font-size:1em;">Eine Überweisung zum Facharzt ausstellen</h3>
         </button>

          <Popup v-if="popupTriggers.facharztTrigger" :TogglePopup="() => TogglePopup('facharztTrigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="../../assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="../../assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <Facharzt />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

         <button color="#42b983" class="submitbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="() => TogglePopup('beendenTrigger')">
           <h3 style="font-size:1em;">Heutige Untersuchung beenden und (be-)handeln​</h3>
         </button>

          <Popup2 v-if="popupTriggers.beendenTrigger" :TogglePopup="() => TogglePopup('beendenTrigger')">
            
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <Sendsubmit />
              </div>
             
            </div>
          </Popup2>


                <Popup2 v-if="popupTriggers.submitTrigger" :TogglePopup="() => TogglePopup('submitTrigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <Submit />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup2>

          <Popup2 v-if="popupTriggers.totalnextdayTrigger" :TogglePopup="() => TogglePopup('totalnextdayTrigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <TotalNextday />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup2>

  <Popup2 v-if="popupTriggers.afterlabTrigger" :TogglePopup="() => TogglePopup('afterlabTrigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
               <Afterlab />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup2>

 <Popup2 v-if="popupTriggers.submit2Trigger" :TogglePopup="() => TogglePopup('submit2Trigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
               <Submit2 />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup2>
<Popup2 v-if="popupTriggers.specialtiesTrigger" :TogglePopup="() => TogglePopup('specialtiesTrigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <Specialties />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup2>
 <Popup2 v-if="popupTriggers.afterspecialtiesTrigger" :TogglePopup="() => TogglePopup('afterspecialtiesTrigger')">
           
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <Afterspecialties />
              </div>
              <div class="col-span-1">
               
              </div>
            </div>
          </Popup2>
    <Popup2 v-if="popupTriggers.submit3Trigger" :TogglePopup="() => TogglePopup('submit3Trigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
               <Submit3 />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup2>

    <Popup2 v-if="popupTriggers.printsTrigger" :TogglePopup="() => TogglePopup('printsTrigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <Prints />
              </div>
           
            </div>
          </Popup2>

          </div>
</div>


        </div>
      </div>
     
        <!-- <div class="column right"> -->
        <div>
          <!-- Should be replaced by a widget -->
          <Notepad />
        </div>
      
    </div>
    <!-- </div> -->
  
  </div>
</div>

</div>
</div>
</template>


<script>

import Popup from '../../components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Hirtz_Notepad.vue';
import Anamnese from '@/components/Hirtz_Anamnese.vue';
import Patientenakte from '../../components/Hirtz_Patientenakte.vue';
import Untersuchen from '../../components/Hirtz_Untersuchen.vue';
import Labaratory from '../../components/Hirtz_Labaratory.vue';
import Facharzt from '../../components/Hirtz_Facharzt.vue';
import Sendsubmit from '../../components/Hirtz_Sendsubmit.vue';
import Header from '@/components/DefaultLayout.vue';
import Popup2 from '@/components/Popup2.vue';
// import Tooltip from '@/components/Tooltip.vue';
import axios from "axios";
import Submit from '@/components/Hirtz_Submit.vue';
import TotalNextday from '@/components/Hirtz_Labaratory/Hirtz_TotalNextday.vue';
import Afterlab from '@/components/Hirtz_Afterlab.vue';
import Submit2 from '@/components/Hirtz_Submit2.vue';
import Specialties from '@/components/Hirtz_Facharzt/Hirtz_Specialties.vue';
import Afterspecialties from '@/components/Hirtz_Afterspecialties.vue';
import Submit3 from '@/components/Hirtz_Submit3.vue';
import Prints from '@/components/Hirtz_Prints.vue'; 

export default {
  name:"Patient1",

  data() {
    return {counters: {
        safety: null,
        satisfaction: null,
        time: null,
        economy: null,
        step:""
       
      },
      patients:[],
      clickz:[],
      pagez:[],
     
      patient: null,
      showTooltip: false,
      showNotepad: false,
      email:localStorage.email
    };
  },
  created(){ 

    if (!(localStorage.email)){this.$router.push("/login");}
     this.sendthesteps();
    console.log(this.email);
    if (localStorage.currentpage=='labaratory'&& localStorage.labaratoryemail==localStorage.email){this.TogglePopup("laboranordnungenTrigger");}
    this.pagestatus();
    this.clicks();
  
   
   
  
  
},
methods: {
sendsubmittrigger(){this.TogglePopup('beendenTrigger')},
submittrigger(){this.TogglePopup('submitTrigger')},
submit2trigger(){this.TogglePopup('submit2Trigger')},
submit3trigger(){this.TogglePopup('submit3Trigger')},
labtrigger(){this.TogglePopup('totalnextdayTrigger')},
afterlabtrigger(){this.TogglePopup('afterlabTrigger')},
specialtiestrigger(){this.TogglePopup('specialtiesTrigger')},
afterspecialtiestrigger(){this.TogglePopup('afterspecialtiesTrigger')},
printstrigger(){
          var data= new FormData();
          data.append("onlineuser",localStorage.email);
          axios
        .post(
          // "./Api/api.php?action=login",
           "./Api/hirtz_api.php?action=emptydiagnosis",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
            
          } else {
            console.log("Success", res.data.message);
          
        localStorage.kleines="false";
       
         localStorage.grosses = "false";
         localStorage.gerin ="false";
         localStorage.entz = "false";
         localStorage.glucose = "false";
         localStorage.fetts = "false";
         localStorage.eisen = "false";
         localStorage.leber = "false";
         localStorage.pankreas = "false";
         localStorage.niere = "false";
         localStorage.elektrolyte = "false";
         localStorage.schild= "false";
         localStorage.herz= "false";
         localStorage.bvitamin = "false";
         localStorage.ldh= "false";
         localStorage.harn = "false";
         localStorage.psa= "false";
         localStorage.hcg = "false";
         localStorage.serum = "false";
         localStorage.probe = "false";
         localStorage.culture = "false";
         localStorage.suchen = "false";
         localStorage.stix = "false";
         localStorage.sediment = "false";
         localStorage.kultur = "false";
         localStorage.augen = "false";
         localStorage.chiru = "false";
         localStorage.derma = "false";
         localStorage.gyna = "false";
         localStorage.hals = "false";
         localStorage.kardio = "false";
         localStorage.gastro = "false";
         localStorage.pulmo = "false";
         localStorage.nephro= "false";
         localStorage.onko= "false";
         localStorage.endo = "false";
         localStorage.neurochiru= "false";
         localStorage.neuro= "false";
         localStorage.ortho = "false";
         localStorage.padi= "false";
         localStorage.psychi = "false";
         localStorage.radio = "false";
         localStorage.uro= "false";
         localStorage.currentpage='';
        
            this.currentpage(); 
          }
        })
        .catch(err => {
          console.log("Error", err);
        });},

warteroom(){this.$router.push("/warte");},

pagestatus(){
  
  
  axios.get( "./Api/hirtz_api.php?action=getpagestatus")
    
    .then((response) => {this.pagez=response.data })
       
},

    sendthesteps(){
    var data = new FormData();
     data.append("step","Der Benutzer ist auf der Seite Fall 2: Hr. Hirtz Seite gelandet.")
    data.append("onlineuser",localStorage.email);
axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/hirtz_api.php?action=sendthesteps",
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
     data.append("warte",0);data.append("patient",1);data.append("anamnese",0);data.append("patientenakte",0);data.append("laboratory",0);data.append("blood",0);data.append("urine",0);data.append("stool",0);data.append("sendblood",0);data.append("sendurine",0);data.append("sendstool",0);data.append("doctors",0);data.append("senddoctors",0);data.append("untersuchen",0);data.append("nicht",0);data.append("kopf",0);data.append("rumpf",0);data.append("thorax",0);data.append("wirbel",0);data.append("abdomen",0);data.append("obere",0);data.append("untere",0);data.append("genital",0);data.append("apparative",0);data.append("sono",0);data.append("ekg",0);data.append("lungen",0);data.append("sendsubmit",0);data.append("submit1",0);data.append("submit2",0);data.append("submit3",0);data.append("lab",0);data.append("afterlab",0);data.append("specialties",0);data.append("afterspecialties",0);data.append("prints",0);
    data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/hirtz_api.php?action=currentpage",
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

 pagereload() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
},
  clicks(){

  axios.get( "./Api/hirtz_api.php?action=getclicks",)
    
    .then((response) => {this.clickz=response.data })
    console.log(this.clickz)
    
},   patientenaktetimecounter() {
      var data = new FormData();
      
      
      data.append("time",1);
      data.append("step","Sie haben einen Blick in die Patientenakte geworfen")
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/hirtz_api.php?action=countertimevariable",
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
    patientenaktecounter() {
      var data = new FormData();
      
      data.append("economy",6.66);
      data.append("satisfaction",0);
      data.append("patientenakte",1)
      data.append("time",1);
      data.append("step","Sie haben einen Blick in die Patientenakte geworfen")
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/hirtz_api.php?action=countervariable",
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
      Popup2,
      popupTriggers,
      TogglePopup
    }
  },
 
  components: {Prints, Submit, TotalNextday, Afterlab,Submit2, Specialties, Afterspecialties, Submit3, Header,Popup2,  Popup, Notepad, Anamnese, Patientenakte, Untersuchen, Labaratory, Facharzt, Sendsubmit }
}
</script>
<style scoped>

h2 {
  background: rgb(5, 150, 105);
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
  
    /* width: 50%; */
  
  color: rgb(255, 255, 255)
}
.fallbeschreibung {
  /* border: 1px solid green; */
  text-align: left;
  /* margin-left: 200px; */
  padding-left: 10px;
  margin-right: 50px;
}
.Notepad {
  border: 1px solid green;
  text-align: left;
  height: 50%;
  width:50%;
  padding-left: 10px;
}
.button {
  background: black;
  margin-right: 5%;
  margin-left:5%;
  margin-top:5%;
   
  color: white;
  padding: 3%;
  border-radius: 20px;

  width:80%;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
.submitbutton{
  background: #be123c;
  color: white;
  padding: 3%;
  border-radius: 20px;
  margin-right: 5%;
  margin-left:5%;
  margin-top:5%;
  
  width:80%;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
.otherbutton {
   background: #be123c;
  color: white;
  padding: 2%;
  border-radius: 20px;
  margin-right: 5%;
  margin-left:10%;
  margin-top:1%;
  width:30%;
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
.popup {
  position: fixed;
  top: 0;
  left:0;
  right:0;
  bottom: 0;
 
  margin-top:3.5%;
  
  background: rgba(14, 13, 13, 0.479);
  border:2px solid rgb(5,150,105);
 
  align-self: center;
  justify-self: center;
  align-content: center;
  justify-content: center;
  overflow-y: auto;
}

.popup-inner {
background: #fff;
padding: 50px ;
left:10;
height: 100%;
overflow-y: auto;

/* margin-right: 400px; */
}
</style>
