<template>
  <div>
    <form id="form1">
    <div id="text" class="">
      <h1>Ihre Disgnoseergebnisse</h1>
      <div v-for = " c in counters " >
<table   class=" border-separate border-spacing-8 border border-emerald-500" >
    <thead class="sticky bg-emerald-200 top-0">
      <tr>
        <th ></th>
        <th class="border border-emerald-600 ">Wirtschaftlichkeit (von 100%)</th>
        <th class="border border-emerald-600 ">Patientensicherheit (von 100%)</th>
        <th class="border border-emerald-600 " >Gesamte Diagnosezeit (in Minuten)</th>
        <th class="border border-emerald-600 "> Bewertung der Patientenzufriedenheit (von 100%)</th>
      </tr>
    </thead>
    <tbody  class="border border-emerald-600 "  >
      
      <tr>
        <td></td>
        <td >{{c.economy}}</td>
        <td>{{c.safety}}</td>
        <td>{{c.time}}</td>
        <td>{{c.satisfaction}}</td>
      </tr>
     
    </tbody>
  </table>
  </div>

        <h1>Diagnose-Logs</h1><br><br>
      <div v-for="step in stepsmodified"  >
                
                <div v-if="step" class="card-block">
                   
                  <p class="card-text">{{step}}</p>
                  
                </div>
              
            </div>
    </div>
      <button type="button"  id="btnPrint" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl" @click="btnPrint();" >Print your diagnosis </button>
    </form>
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
        steps: [],
        stepsmodified:[],
        counters:[]
			}},
       created(){this.allSteps();this.allCounters();},
			methods: {

        emptydiagnosis(){
          var data= new FormData();
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
         var c= b.slice(11,-3)
        this.stepsmodified=c.split(".");
            
    console.log(b);

    },            
    allSteps() {
        

    axios.get( "./Api/api.php?action=getsteps",)
    
    .then((response) => {this.steps=response.data;this.stepsmodify(); } )
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
      this.emptydiagnosis();
    }}}
  </script>
 <style scoped>
 .button {
  background: black;
  color: white;
  padding: 20px;
  border-radius: 10px;
  margin: 5px auto;
  width:400px;
  min-height: 0px;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
 </style>

  
 
