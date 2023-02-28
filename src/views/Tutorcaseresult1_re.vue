<template>
  <Header />
  <div id="backbutton" class="mt-10 ml-40">
   <button  class="popup-close" title="Zurück" @click="hauptmenu()"  ><img class="h-10 w-10" src="../../src/assets/return.png" alt="Workflow" /> </button>
  
  </div>
   <div class="ml-40 mr-40 mt-5 mb-20 ">
    

    
     <div id="resulttable" class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class=" inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-x-auto">
        <table class="min-w-full">
          <thead class="border-b bg-gray-800">
            <tr>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-middle border">
                
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-middle border-r">
              Studenten/Studentin
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-middle border-r">
              Wirtschaftlichkeit (Höchstwert 100)
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-middle border-r">
              Patientensicherheit (von 100 %)
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-middle border-r">
              Gesamte Diagnosezeit
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-middle border-r">
              Patientenzufriedenheit  (von 100 %)
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-middle border-r">
              Detailliertes Fallergebnis
              </th>
             
            </tr>
          </thead>
          <tbody v-for="student in students" >
            <tr v-if="student.tutor==0" class="border-b">
              <td  class="px-6 py-4 whitespace-nowrap text-sm font-medium text-middle text-gray-900 border">
                {{student.studentid}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 text-middle whitespace-nowrap border-r">
                             {{student.email}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 text-middle whitespace-nowrap border-r">
                              {{student.economy.replace('.',',')}} Punkte.
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 text-middle text-middle whitespace-nowrap border-r">
                              {{student.safety.replace('.',',')}} %
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 text-middle whitespace-nowrap border-r">
                                {{Math.floor(student.time/24/60)}} Tag(e), {{Math.floor(student.time/60%24)}} Stunde(n), {{Math.floor(student.time%60)}} Minute(n).
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 text-middle whitespace-nowrap border-r">
                               {{student.satisfaction.replace('.',',')}} %
              </td>
             
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r ">
              <div v-for="s in submits">
                <div v-if="s.user==student.email">
                <button v-if="s.submitted==1" id="submissionbutton" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
           @click=" downloadtrigger(student.email); ">
          <h6 style="font-size:1em; word-break: break-all;">Anzeigen​</h6>
         </button>
               </div>
               </div>
              </td>
              
            
            </tr>
        
          </tbody>
        </table>
      </div>
    </div>
  </div>
     
</div>
 <div id="buttons" style="display:none" class="">
      <button type="button"  id="btnPrint" class="specialbutton1 float-left  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl" @click.prevent="btnhide();" >Ausblenden</button>
      <button type="button"  id="btnPrint" class="specialbutton2 float-right  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl" @click.prevent="btnprint();" >Herunterladen </button>
   </div>
<div style="margin: 20px 0 20px 0;"></div>
  
   <div id="htmlcontent" style="display:none"  class="htmlcontent">
    <h1 style='text-align:center' class=" font-bold  py-2" > Fall: Hr. Schneider </h1>
    <h1 style='text-align:center' class=" font-bold  py-2" > Studenten/Studentin: {{e}} </h1>
    <div style="margin: 10px 0 10px 0;"></div>
      <h1 class=" bg-emerald-200 pl-3 py-2" >Diagnoseergebnisse: </h1>
      <div  >
      <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div   class="overflow-auto">
        <div v-for = " c in counters " >
          <div  v-if="c.email==e">
        <table class="min-w-full">
        
          <tbody>
            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
              <div class="grid-container grid grid-cols-6 ">
              <div class="col-span-2">
              <td class="text-sm text-gray-900 font-semibold px-6 py-4 whitespace-prewrap">
               Wirtschaftlichkeit (Höchstwert 100): 
              </td>
              </div>
              <div  class="col-span-1">
              <td class="text-sm text-gray-900  px-6 py-4 whitespace-prewrap">
                {{c.economy.replace('.',',')}} Punkte.
              </td>
            </div>
              <div  class="col-span-3">         
               <td v-if="c.economy<0" class="text-sm text-red-500  px-6 py-4 whitespace-prewrap">
             Die Studentin/der Studenten hat eine negative Punktzahl erhalten, weil die Anzahl der gewählten relevanten/idealen/richtigen Aktionen geringer war als die Anzahl der irrelevanten/nicht idealen/falschen Aktionen.
              </td>
            </div>
            </div>
            </tr>

            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
               <div class="grid-container grid grid-cols-6 ">
              <div class="col-span-2">
              <td class="text-sm text-gray-900  font-semibold px-6 py-4 whitespace-prewrap">
                Patientensicherheit (von 100 %): 
              </td> </div>
              <div  class="col-span-1">
              <td class="text-sm text-gray-900  px-6 py-4 whitespace-prewrap">
                {{c.safety.replace('.',',')}} %
              </td>
              </div>
              <div  class="col-span-3">         
         
    <td v-if="c.safety<=50" class="text-sm text-red-500  px-6 py-4 whitespace-prewrap">
              Die Studentin/der Studenten hat einen Patientensicherheits-Score von {{c.safety.replace('.',',')}} % liegt zwischen 0 % und 50 %. Punktzahlen in diesem Bereich bedeuten ihre Entscheidungen für das weitere Vorgehen bergen erhebliche Risiken. Der weitere Verlauf ist mehr abhängig vom Zufall als von ihrer ärztlichen Betreuung. Somit gefährden sie das Wohl des Patienten.
              </td>
              <td v-if="c.safety>50 && c.safety<=75" class="text-sm text-orange-500 px-6 py-4 whitespace-prewrap">
              Die Studentin/der Studenten hat eine Patientensicherheits-Score von {{c.safety.replace('.',',')}} % liegt zwischen 50 % und 75 %. Punktzahlen in diesem Bereich bedeuten ihre Entscheidungen für das weitere Vorgehen sind ausreichend, bergen allerdings gewisse Risiken für das Wohlergehen ihres Patienten.
              </td>
              <td v-if="c.safety>75 && c.safety<=95" class="text-sm text-lime-600  px-6 py-4 whitespace-prewrap">
              Die Studentin/der Studenten hat eine Patientensicherheits-Score von {{c.safety.replace('.',',')}} % liegt zwischen 75 % und 95 %. Punktzahlen in diesem Bereich bedeuten ihre Entscheidungen für das weitere Vorgehen sind gut, bergen nur wenige Risiken und wahren in angemessenem Umfang die Sicherheit des Patienten.
              </td>
               <td v-if="c.safety>95" class="text-sm text-green-600  px-6 py-4 whitespace-prewrap">
             Die Studentin/der Studenten hat eine Patientensicherheits-Score von {{c.safety.replace('.',',')}} % liegt zwischen 95 % und 100 %. Punktzahlen in diesem Bereich bedeuten ihre Entscheidungen für das weitere Vorgehen bergen nur sehr wenige bis keine Risiken und stellen größtmögliche Sicherheit für den Patienten sicher.
              </td>
            </div>
            </div>
            </tr>
                       
          
            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
             <div class="grid-container grid grid-cols-6 ">
              <div class="col-span-2">
              <td class="text-sm text-gray-900  font-semibold  px-6 py-4 whitespace-prewrap">
                Gesamte Diagnosezeit: 
              </td></div>
              <div  class="col-span-4">
              <td class="text-sm text-gray-900  px-6 py-4 whitespace-prewrap">
              {{Math.floor(c.time/24/60)}} Tag(e), {{Math.floor(c.time/60%24)}} Stunde(n), {{Math.floor(c.time%60)}} Minute(n). 
              </td>
             </div>
            </div>

            </tr>
              <tr class="bg-white border-b  transition duration-300 ease-in-out hover:bg-gray-100">
              <div class="grid-container grid grid-cols-6 ">
              <div class="col-span-2">
              <td class="text-sm text-gray-900  font-semibold px-6 py-4 whitespace-prewrap">
                Bewertung der Patientenzufriedenheit (von 100 %):
              </td></div>
              <div  class="col-span-4">
              <td class="text-sm text-gray-900  px-6 py-4 whitespace-prewrap">
              {{c.satisfaction.replace('.',',')}} %
              </td>
               </div>
            </div>
            </tr>
          </tbody>
        </table>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
  <h1 class=" bg-emerald-200 pl-3 py-2" > Diagnoseentscheidung: </h1>
 <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div   class="overflow-auto">
        <div v-for = " submit in downloads " >
        <div v-if="submit.user==e">
        <table class="min-w-full">
        
          <tbody>
            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
              <div class="grid-container grid grid-cols-6 ">
              <div class="col-span-2">
              <td class="text-sm text-gray-900 font-semibold px-6 py-4 whitespace-prewrap">
           Arbeitsdiagnose:
              </td>
              </div>
              <div  class="col-span-4">
              <td class="text-sm text-gray-900  px-6 py-4 whitespace-prewrap">
                {{submit.diagnosis}}
              </td>
            </div>
            </div>
            </tr>


            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
             <div class="grid-container grid grid-cols-6 ">
              <div class="col-span-2">
              <td class="text-sm text-gray-900  font-semibold  px-6 py-4 whitespace-prewrap">
               Was sie mit der Patientin/dem Patienten vorhaben:
              </td></div>
              <div  class="col-span-4">
              <td v-if="submit.ambulance==1" class="text-sm text-gray-900  px-6 py-4 whitespace-prewrap">
             Rettungsdienst rufen und Notfallmaßnahmen ergreifen
              </td>
              <td v-if="submit.hospital==1" class="text-sm text-gray-900  px-6 py-4 whitespace-prewrap">
             Krankenhauseinweisung
              </td>
              <td v-if="submit.noappointment==1" class="text-sm text-gray-900  px-6 py-4 whitespace-prewrap">
              Keine Wiedervorstellung verabredet
              </td>
              <td v-if="submit.badappointment==1" class="text-sm text-gray-900  px-6 py-4 whitespace-prewrap">
             Wiedervorstellung bei Verschlechterung
              </td>
              <td v-if="submit.twodays==1" class="text-sm text-gray-900  px-6 py-4 whitespace-prewrap">
            Wiedervorstellung in 2 Tagen
              </td>
              <td v-if="submit.fivedays==1" class="text-sm text-gray-900  px-6 py-4 whitespace-prewrap">
             Wiedervorstellung in 5 Tagen
              </td>
              <td v-if="submit.fourweeks==1" class="text-sm text-gray-900  px-6 py-4 whitespace-prewrap">
            Wiedervorstellung in 4 Wochen
              </td>
               <td v-if="submit.wiedereinbestellen==1" class="text-sm text-gray-900  px-6 py-4 whitespace-prewrap">
            Wiedereinbestellen
              </td>
              <td v-if="submit.ausstellen==1" class="text-sm text-gray-900  px-6 py-4 whitespace-prewrap">
            AU ausstellen
              </td>
              
             </div>
            </div>

            </tr>
              <tr class="bg-white border-b  transition duration-300 ease-in-out hover:bg-gray-100">
              <div class="grid-container grid grid-cols-6">
              <div class="col-span-2">
              <td class="text-sm text-gray-900  font-semibold px-6 py-4 whitespace-prewrap">
               Von ihnen ausgestellte Verschreibungen (falls vorhanden):
              </td></div>
              <div  class="col-span-4">
              <td v-if="submit.rezept==1" class="text-sm text-gray-900  px-6 py-4 whitespace-prewrap">
             {{submit.rezeptext}}</td>
             <td v-else></td>
           
               </div>
            </div>
            </tr>
          </tbody>
        </table>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>

    </div>
</div>

</template>

  
  
  <script >


    import axios from "axios";
   
    import Header from '@/components/DefaultLayout.vue';


    export default{
     name:"Tutorpanels",
     data()
      {return{		
        email:localStorage.email,
        students:[],
        submits:[],
        downloads:[],
        counters:[],
        counterbtn:0
			}},
      components: {Header},
       created(){
     if (!(localStorage.email)){this.$router.push("/login");};
    this.allstudents(); this.allSubmits();this.allCounters();this.counterbtn=0;
    
},
			methods: {

        counterBtn(){
          this.counterbtn=this.counterbtn+1;
        },

          allCounters(){
            axios.get( "./Api/api.php?action=getcounters",)
    
    .then((response) => {this.counters=response.data;} )
  },
        hauptmenu(){this.$router.push("/tutorpanel");},

         allSubmits(){

         axios.get( "./Api/api.php?action=getsubmit",)
        .then((response) => {this.submits=response.data;} )
          },

  downloadtrigger(e){
          this.e=e;
          
            
  axios.get( "./Api/api.php?action=getdownloadstuff", {params: {
    'user': e,
  }})
    
    .then((response) => {this.downloads=response.data })
    htmlcontent.style.display='block'
    buttons.style.display='block'
    resulttable.style.display='none'
    backbutton.style.display='none'
   

         },

         btnhide(){
    htmlcontent.style.display='none'
    buttons.style.display='none'
    resulttable.style.display='block'
     backbutton.style.display='block'
         },


             btnprint()
       {
       
        var element = document.getElementById('htmlcontent');
var opt = {
  margin:       1,
  filename:     'Diagnoseergebnisse_Schneider.pdf',
  image:        { type: 'jpeg', quality: 1 },
  html2canvas:  { scale: 2 },
  jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
};


html2pdf().set(opt).from(element).save();

      
         },

      
         allstudents(){

         axios.get( "./Api/api.php?action=getcounters",)
        .then((response) => {this.students=response.data;} )
          },

      }}
  </script>
 <style scoped>


.button {
   background: rgb(5, 150, 105);
  color: white;
  padding: 1%;
  border-radius: 5%;
  margin-right: 10%;
  margin-left:10%;
  margin-top:2%;
  width:100%;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
.specialbutton1 {
   background: rgb(202, 40, 7);
  color: white;
  padding: 1%;
  border-radius: 2%;
  margin-right: 20%;
  margin-top:2%;
  width:20%;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
.specialbutton2 {
   background: rgb(202, 40, 7);
  color: white;
  padding: 1%;
  border-radius: 2%;
  margin-left:20%;
  margin-top:2%;
  width:20%;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
 </style>

  
 
