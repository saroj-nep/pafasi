<template>
<div>
  <div class=" border-emerald-600 border-4 rounded-lg shadow-md h-fit shadow-green-600 mr-5 pl-5 pr-5  ">
    <div class="row">
      <div class="col-sm-12">
       
        <div>
        <form action="GET">
          <h1 style="font-size:large"><b> {{title}}</b></h1>
           <h1 id="savealert" style="display:none" class="text-center text-green-500" >Ihre Notiz wurde erfolgreich gespeichert.</h1>    
          <h1 id="inputalert" style="display:none" class="text-center text-red-500" >Alle Eingabefelder sind obligatorisch!</h1>
        </form>
          <form action="POST"><div class="form">
            <div class="form-group">
              <label>Titel der Notiz:     </label>
              <input id="inputtitle" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline border-green-900" type="text" v-model="note.title" required >
            </div>
          
            <div class="form-group">
              <label>Beschreibung:     </label>
              <textarea id="inputtext" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline border-green-900" v-model="note.text" required ></textarea>
            </div>
            <br>
            <div class="flex flex-row  justify-center items-center">
            <button color="#42b983" class="patient btn-primary shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl " @click.prevent="addNote()"><h5 style="font: size 1.5em;">Notiz speichern</h5></button>
           
           
           </div></div></form>
          <div class="row">
            <!-- <div class="flex flex-row  justify-center items-center">
            <button class="btn btn-primary  " @click.prevent="allNotes()">gespeicherte Notizen anzeigen</button>
            <button class="btn btn-primary" @click.prevent="removeNotes()">alle Notizen löschen</button>
           </div> -->
          <form >
            <div class="col-sm-6 note" v-for="notey in notes"  >
              
              <div >
              <div v-if="notey.user===email" class="card">
                <button class="close" @click.prevent="removeNote(notey.title,notey.date)" ><h7  class=" text-right text-white">&times;</h7> </button>
                <br><div v-if="notey" class="card-block">
                  <h4  class="card-title text-left text-white">{{notey.title}}</h4>
                  <!-- <h6 class="card-subtitle mb-2 text-left text-muted ">{{notey.date}}</h6> -->
                  <p  style= " white-space: pre-wrap;" class="card-text text-white">{{notey.text}}</p>
                  
                </div>
              </div></div>
            </div>
            </form>
          </div>
        </div>
      
     </div>
    </div>
  </div>
</div>
</template>

<script>

import axios from "axios";


export default({
  name:"Notes",
			data()
      {return{
				email:localStorage.email,
				title: 'Notizen zur Diagnose',
				note: {
					title: '',
					text: ''
				},
        notes: [],
        timer:null
      
			}},
      created(){
      this.timer = setInterval(() => {
    this.allNotes()
  }, 500)},
      beforeDestroy() {
  clearInterval(this.timer)
}, 
			methods: 
      

      {


        


        saveNotealert(){
          const savealert = document.getElementById('savealert');
 savealert.style.display = 'none';
 alert('Ihre Notiz wurde erfolgreich gespeichert.')
setTimeout(function() {

  savealert.style.display = 'none'

 
}, 3000); 


        },
	removeNote(i,j) { 
          var data = new FormData();
  
  data.append("notetitle", i);
  data.append("ndate",j)
  data.append("onlineuser",localStorage.email);
  axios
    .post(
      // "./Api/api.php?action=login",
       "./Api/rigas_api.php?action=removenote",
      data
    )
    .then(res => {
      if (res.data.error) {
        console.log("Error", res.data);
        alert(res.data.message);
      } else {
        console.log("Success", res.data.message);
        this.allNotes()
      
      }
    })
    .catch(err => {
      console.log("Error", err);
    });
					
				},
        
    allNotes() {
        
   
    axios.get( "./Api/rigas_api.php?action=getnotes",)
    
    .then((response) => {this.notes=response.data })
  },


				addNote() {
           const savealert = document.getElementById('savealert');
           const inputalert = document.getElementById('inputalert');
           const inputtitle = document.getElementById('inputtitle');
           const inputtext= document.getElementById('inputtext');
          if (this.note.text.length > 0 && this.note.title.length > 0)
					{
            inputalert.style.display='none';
          var data = new FormData();
  
      data.append("notetitle", this.note.title);
      data.append("notetext", this.note.text);
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=login",
           "./Api/rigas_api.php?action=addnote",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          
          } else {
            console.log("Success", res.data.message);
           alert('Ihre Notiz wurde erfolgreich gespeichert.')
            this.note.text = "";
            this.note.title = "";
            this.allNotes()
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
				}
        else{inputalert.style.display='none'; savealert.style.display='none'; alert('Alle Eingabefelder sind obligatorisch!')
      }  
        
        if (this.note.title.length < 1)  {inputtitle.style.border=' 1px solid red'}
        else{inputtitle.style.border=' 1px solid green'}
         if (this.note.text.length < 1 ) {inputtext.style.border='1px solid red'}
       else{inputtext.style.border=' 1px solid green'}
      },

				removeNotes() { 
          var data = new FormData();
  
  data.append("notetitle", this.note.title);
  data.append("notetext", this.note.text);
  data.append("onlineuser",localStorage.email);
  axios
    .post(
      // "./Api/api.php?action=login",
       "./Api/rigas_api.php?action=removenotes",
      data
    )
    .then(res => {
      if (res.data.error) {
        console.log("Error", res.data);
        alert(res.data.message);
      } else {
        console.log("Success", res.data.message);
        this.allNotes()
      
      }
    })
    .catch(err => {
      console.log("Error", err);
    });
					
				}
			}
		})

</script>

<style scoped>
body { 
	font-size: 12px;
	
	font-family: 'Ubuntu', sans-serif;
	background: #6e6b6b;
	margin: 0;
	-webkit-user-select: none;
	user-select: none;
	padding: 70px 30px 0px 30px;
	font-weight: 100; }.card {
  margin: 20px 0;
  background: rgb(5,150,105);
  border: 10px;
  padding: 20px; 
 }
.patient {
  background: rgb(5,150,105);
  margin-right: 5%;
  margin-left:1%;
  margin-top:1%;
  margin-bottom: 3%;
  color: white;
  padding:1%;
  border-radius: 20px;

  width:40%;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
  
}
h1 { 
  text-align: center; 
  margin: 15px 0px; }
h2 { 
  text-align: center; 
  margin: 15px 0px; 
  color: #b5b5b5; }
h3 { 
  text-align: center; 
  font-size: 14px;
  margin: 30px 0px 30px 0px; 
  color: #b5b5b5; }
  h6 { 
  color: #b5b5b5; }
h4 { 
  text-align: left; 
  font-weight: bold;
  font-size: 15px;
  margin:0px 0px 0px 0px; 
   }
   h7 { 
  text-align: right; 
  align-content: right;
  align-self: right;
  font-weight: bold;
  font-size: 15px;
  margin: 0px 0px 0px 0px; 
  
   }
button.close{
float:right;
 align-self: right;
 align-content: right;
 
}
h4.card-title { margin: 0px 0px 0px 0px; word-wrap: break-word}
p.card-text { margin: 15px 0px 0px 0px; word-wrap: break-word }
.card { 
  border-radius: 3px; 
  box-shadow: 0px 2px 3px rgb(5, 150, 105);
  }
.alert { display: none; }
.col-sm-12 > div {
  
  margin: auto; }
  .form-control 
  {padding-left: 0;
  margin-left: 30;
  
  }
  
  .row{  overflow: auto;
  }
</style>