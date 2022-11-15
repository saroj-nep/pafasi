<template>
  <Header />
  <div class="flex sticky top -0 align-center content-center justify-center justify-items-center justify-evenly place-content-center">
      <button type="button"  id="btnPrint" class="button   btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl" @click.prevent="btnWarte();" >Rückkehr ins Wartezimmer</button>
      <button type="button"  id="btnPrint" class="button   btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl" @click.prevent="btnPrint();" >Laden Sie Ihre Diagnoseergebnisse herunter</button>
   </div>
  <div class="ml-60 mr-60 mt-10 mb-20 border border-green-500">
    
    <form id="form1">
    <div id="html-content" class="html-content">
      <h1 class=" bg-emerald-200 pl-3 py-2" > Ihre Diagnoseergebnisse: </h1>
      <div  >
      <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div   class="overflow-auto">
        <div v-for = " c in counters " >
          <div  v-if="c.email==email">
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
              Sie haben eine negative Punktzahl erhalten, weil die Anzahl der gewählten relevanten / idealen / richtigen Aktionen geringer war als die Anzahl der irrelevanten/nicht idealen/falschen Aktionen.
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
             Ihr Patientensicherheits-Score von {{c.safety.replace('.',',')}} % liegt zwischen 0 % und 50 %. Punktzahlen in diesem Bereich bedeuten Ihre Entscheidungen für das weitere Vorgehen bergen erhebliche Risiken. Der weitere Verlauf ist mehr abhängig vom Zufall als von Ihrer ärztlichen Betreuung. Somit gefährden Sie das Wohl des Patienten.
              </td>
              <td v-if="c.safety>50 && c.safety<=75" class="text-sm text-orange-500 px-6 py-4 whitespace-prewrap">
              Ihr Patientensicherheits-Score von {{c.safety.replace('.',',')}} % liegt zwischen 50 % und 75 %. Punktzahlen in diesem Bereich bedeuten Ihre Entscheidungen für das weitere Vorgehen sind ausreichend, bergen allerdings gewisse Risiken für das Wohlergehen Ihres Patienten.
              </td>
              <td v-if="c.safety>75 && c.safety<=95" class="text-sm text-lime-600  px-6 py-4 whitespace-prewrap">
              Ihr Patientensicherheits-Score von {{c.safety.replace('.',',')}} % liegt zwischen 75 % und 95 %. Punktzahlen in diesem Bereich bedeuten Ihre Entscheidungen für das weitere Vorgehen sind gut, bergen nur wenige Risiken und wahren in angemessenem Umfang die Sicherheit des Patienten.
              </td>
               <td v-if="c.safety>95" class="text-sm text-green-600  px-6 py-4 whitespace-prewrap">
              Ihr Patientensicherheits-Score von {{c.safety.replace('.',',')}} % liegt zwischen 95 % und 100 %. Punktzahlen in diesem Bereich bedeuten Ihre Entscheidungen für das weitere Vorgehen bergen nur sehr wenige bis keine Risiken und stellen größtmögliche Sicherheit für den Patienten sicher.
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
  <h1 class=" bg-emerald-200 pl-3 py-2" > Ihre Diagnoseentscheidung: </h1>
 <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div   class="overflow-auto">
        <div v-for = " submit in submits " >
        <div v-if="submit.user===email">
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
               Was Sie mit der Patientin/dem Patienten vorhaben:
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
               Von Ihnen ausgestellte Verschreibungen (falls vorhanden):
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

<br>
        <h1 class=" bg-emerald-200 top-0 pl-3 py-2"> Ihre gespeicherten Notizen (falls vorhanden): </h1>
         <div  >
        <div >
      
                
  <table v-for = " note in notes" style="white-space: pre-wrap;"  class=" " >
   
   
          <tbody v-if="note.user===email" class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100"  >
            <tr >
              <div >
        
              <td class="text-sm text-gray-900 font-semibold  px-6 py-4 whitespace-prewrap">
              {{note.title}} @ ({{note.date}})
              </td>
            </div>
           
            </tr>


            <tr >
             <div >
              
              
            
              <td  class="text-sm text-gray-900  px-6 py-4 whitespace-prewrap">
            {{note.text}}
              </td>
              
         
            </div>

            </tr>
       
          </tbody></table>
              </div>
            
        </div>
    </div>
   
    </form>
    </div>
     
</template>

  
  
  <script >


    import axios from "axios";
    import jQuery from "jquery";
    import Header from '@/components/DefaultLayout.vue';

     
    const $ = jQuery;
    window.$ = $;
    export default{
     name:"Prints",
     data()
      {return{		
        notes: [],
        stepsmodified:[],
        counters:[],
         submits:[],
        email:localStorage.email,
			}},
      components: {Header},
       created(){this.allNotes();this.allCounters();this.allSubmits();
       console.log(localStorage.email)
    if (localStorage.email==''){this.$router.push("/login");}
},
			methods: {

         allSubmits(){

         axios.get( "./Api/hirtz_api.php?action=getsubmit",)
        .then((response) => {this.submits=response.data;} )
          },

        emptydiagnosis(){
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
            this.$router.push("/warte");
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
				},
        
      

       
 
        allCounters(){
            axios.get( "./Api/hirtz_api.php?action=getcounters",)
    
    .then((response) => {this.counters=response.data;} )
  },
      
        
    stepsmodify(){
         var a =Object.values(this.steps);
         
         var b=JSON.stringify(a)
         var c = b.split(",").pop();
         var d=c.slice(9,-3);
        this.stepsmodified=d.split(".");
            
   

    },   
    btnWarte(){
     this.$router.push({ name: 'Wartezimmer' })



    },         
    allNotes() {
        

    axios.get( "./Api/hirtz_api.php?action=getnotess",)
    
    .then((response) => {this.notes=response.data;  } )
  },
      btnPrint()
       {
        var element = document.getElementById('html-content');
var opt = {
  margin:       1,
  filename:     'Diagnoseergebnisse_Hirtz.pdf',
  image:        { type: 'jpeg', quality: 1 },
  html2canvas:  { scale: 2 },
  jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
};

// New Promise-based usage:
html2pdf().set(opt).from(element).save();

      
    }}}
  </script>
 <style scoped>
 .button {
   background: rgb(202, 40, 7);
  color: white;
  padding: 1%;
  border-radius: 2%;
  margin-right: 10%;
  margin-left:10%;
  margin-top:2%;
  width:20%;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
 </style>

  
 
