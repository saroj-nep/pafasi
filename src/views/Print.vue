<template>
  <div>
    <form id="form1">
    <div id="text" class="">
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
        stepsmodified:[]
			}},
       created(){this.allSteps();},
			methods: {

        
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

  
 
