<template>
  <div>
    <form id="form1">
    <div id="text" class="">
      <h1 class=" bg-emerald-200 top-0" >Ihre Diagnoseergebnisse</h1>
      <div v-for = " c in counters " >
        <div v-if="c.email===email">
<table   class=" border-separate border-spacing-8 border border-emerald-500 justify-center align-center" >
    <thead class="bg-emerald-200 top-0">
      <tr>
        <th ></th>
        <th class="border border-emerald-600 ">Wirtschaftlichkeit (Höchstwert 100)</th>
        <th class="border border-emerald-600 ">Patientensicherheit (von 100%)</th>
        <th class="border border-emerald-600 " >Gesamte Diagnosezeit</th>
        <th class="border border-emerald-600 "> Bewertung der Patientenzufriedenheit (von 100%)</th>
      </tr>
    </thead>
    <tbody  class="border border-emerald-600 "  >
      
      <tr>
        <td></td>
        <td>{{c.economy}} Punkte.</td>
        <td>{{c.safety}}%</td>
        <td>{{Math.floor(c.time/24/60)}} days, {{Math.floor(c.time/60%24)}} hours,{{Math.floor(c.time%60)}} minutes. </td>
        <td>{{c.satisfaction}}%</td>
      </tr>
     
    </tbody>
  </table>
</div>
  </div>
<br>
   <div v-for = " submit in submits " >
        <div v-if="submit.user===email">
<table   class=" border-separate border-spacing-8 border border-emerald-500 justify-center align-center" >
    <thead >
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        </tr>
    </thead>
     <tbody>
           <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Arbeitsdiagnose:</td>
        <td></td>
        <td></td>
        <td></td>

      </tr>
      <tr>
         <td >{{submit.diagnosis}}</td>
        <td></td>
        <td></td>
        <td></td>

      </tr>
      </tbody>
    <tbody  class="border border-emerald-600 " style="white-space: pre-wrap;" >
       <tr>
        <td class="bg-emerald-100 border border-emerald-600 " >Was Sie mit dem Patienten vorhaben:</td>
        <td></td>
        <td></td>
        <td></td>

      </tr>
      <tr>
       <td v-if="submit.ambulance==1">Rettungsdienst rufen und Notfallmaßnahmen ergreifen</td>
        <td v-if="submit.hospital==1">Krankenhauseinweisung</td>
        <td v-if="submit.noappointment==1">keine Verabreden</td>
        <td v-if="submit.badappointment==1">Wiedervorstellung bei Verschlechterung</td>
        <td v-if="submit.twodays==1">Wiedervorstellung in 2 Tagen</td>
        <td v-if="submit.fivedays==1">Wiedervorstellung in 5 Tagen</td>
        <td v-if="submit.fourweeks==1">Wiedervorstellung in 4 Wochen</td>
        <td v-if="submit.ausstellen==1">AU ausstellen</td>
        <td></td>
        <td></td>

      </tr>
      </tbody>
      
<tbody  class="border border-emerald-600 " style="white-space: pre-wrap;" >
       <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Von Ihnen ausgestellte Verschreibungen (falls vorhanden):</td>
        <td></td>
        <td></td>
        <td></td>

      </tr>
      <tr>
      <td v-if="submit.rezept==1">{{submit.rezeptext}}</td>
        <td v-else></td>
        <td></td>
        <td></td>
        <td></td>

      </tr>
      </tbody>
     
  </table>
</div>
  </div>
<br>
        <h1 class=" bg-emerald-200 top-0">Ihre gespeicherten Notizen</h1>
         <div  >
        <div >
      
                
  <table style="white-space: pre-wrap;"  class=" border-separate border-spacing-8 border border-emerald-500 justify-center align-center" >
    <thead class=" bg-emerald-200 top-0">
      <tr>
       
        <th class="border border-emerald-600 ">Titel der Notiz</th>
        <th class="border border-emerald-600 ">Text notieren</th>
         <th class="border border-emerald-600 ">Zeit</th>
      </tr>
    </thead>
    <tbody v-for = " note in notes " style="white-space: pre-wrap;" class="border border-emerald-600 "  >
      
      <tr style="white-space: pre-wrap;" v-if="note.user===email">
       
        <td style="white-space: pre-wrap;">{{note.title}}</td>
         <td style="white-space: pre-wrap;" >{{note.text}}</td>
         <td >{{note.date}}</td>
      </tr>
     
    </tbody></table>
              </div>
            
        </div>
    </div>
   
    </form>
    </div>
     <div>
      <button type="button"  id="btnPrint" class="button  align-center content-center justify-center justify-items-center justify-evenly place-content-center btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl" @click="btnPrint(); btnprint();" >Laden Sie Ihre Diagnoseergebnisse herunter</button>
   </div>
</template>

  
  
  <script >


    import axios from "axios";
    import jQuery from "jquery";
   

     
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
      components: {},
       created(){this.submitted();this.allNotes();this.allCounters(); this.allSubmits(); },
			methods: {
        allSubmits(){

         axios.get( "./Api/api.php?action=getsubmit",)
        .then((response) => {this.submits=response.data;} )
          },

        submitted(){ 
          
          var data = new FormData();
            data.append("onlineuser",localStorage.email);
          axios
        .post(
          // "./Api/api.php?action=login",
           "./Api/api.php?action=sendsubmit4",
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

        btnprint(){this.$router.push("/warte");},
        emptydiagnosis(){
          var data= new FormData();
          data.append("onlineuser",localStorage.email);
          axios
        .post(
          // "./Api/api.php?action=login",
           "./Api/api.php?action=emptydiagnosis",
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
            axios.get( "./Api/api.php?action=getcounters",)
    
    .then((response) => {this.counters=response.data;} )
  },
      
        
    stepsmodify(){
         var a =Object.values(this.steps);
         
         var b=JSON.stringify(a)
         var c = b.split(",").pop();
         var d=c.slice(9,-3);
        this.stepsmodified=d.split(".");
            
   

    },            
    allNotes() {
        

    axios.get( "./Api/api.php?action=getnotess",)
    
    .then((response) => {this.notes=response.data;  } )
  },
      btnPrint() {

      var divContents = $("#text").html();
      var printWindow = window.open('', '', 'height=1000,width=1000');
      printWindow.document.write('<html><head><title>Html to PDF</title>');
      printWindow.document.write('</head><body >');
      printWindow.document.write(divContents);
      printWindow.document.write('</body></html>');
      printWindow.document.close();
      printWindow.print();
      
    }}}
  </script>
 <style scoped>
 .button {
   background: #be123c;
  color: white;
  padding: 1%;
  border-radius: 2%;
  margin-right: 40%;
  margin-left:40%;
  margin-top:2%;
  width:25%;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
 </style>

  
 
