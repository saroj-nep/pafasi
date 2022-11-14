<template>
 <div style="position: sticky" class="sticky top-0">
<Header />
</div>
  <div class="popup  ">
    <div class="popup-inner     ">
     
    <div class= "grid justify-center">
      
          <h2 style="font-size:1.2em; " class="h1 text-white text-center" >Möchten Sie den Fall neu bearbeiten?​ Ihre Diagnose und Notizen werden zurückgesetzt und können nicht mehr aufgerufen werden.</h2>
         <div class= "flex justify-center">
            
        

         <button  class="button  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent=" goTopatient()">
           <h3 style="font-size:1em;">Ja, ich möchte den Fall neu bearbeiten.</h3>
         </button>


         <button style="font-size:1em;"  type="button" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl"
            @click.prevent="goTowaiting()">
          <h3 style="font-size:1em;"> Nein, ich möchte zurück in das Wartezimmer.</h3>
         </button>
        </div>
      </div>
    </div>
  
  
    </div>

</template>

<script>
import axios from 'axios';
import Header from '@/components/DefaultLayout.vue';
export default {
    props: ['TogglePopup'],
    components:{Header},
      created(){ console.log(localStorage.email)
    if (localStorage.email==''){this.$router.push("/login");}
},
    methods: {
        goTowaiting: function () {
          this.$router.push("/warte");
         
        },
      goTopatient: function () {
        

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
          console.log(localStorage.kleines);
        localStorage.kleines="false";
        console.log(localStorage.kleines);
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
        
            this.$router.push("/Schneider"); 
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
				},}
   
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


.button {
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

.popup {
  position: fixed;
  top: 0;
  left:0;
  right:0;
  bottom: 0;
 
  margin-top:3.5%;
  
  background: rgba(14, 13, 13, 0.479);
  border:2px solid rgb(5,150,105);
  height:60rem;
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