<template>
<div>
  <div class=" border-emerald-600 border-4 shadow-md h-fit shadow-emerald-600 mr-5 pl-5 pr-5 border-t-8 ">
    <div class="row">
      <div class="col-sm-12">
        <form>
        <div>
          <h1><strong> {{title}}</strong></h1>
          <h2> {{subtitle}}</h2>
          <h3>Total Noten: {{ notes.length }}</h3>
          <div class="form">
            <div class="form-group">
              <label>Titel der Notiz:     </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" v-model="note.title" required >
            </div>
            <div class="form-group">
              <label>Beschreibung :     </label>
              <textarea rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" v-model="note.text" required ></textarea>
            </div>
            <div class="flex flex-row  justify-center items-center">
            <button class="btn btn-primary " @click.prevent="addNote()">Notiz speichern</button>
            </div>
            <div class="alert alert-danger text-center text-red-500" role="alert" v-if="isActive='true'"  >Alle Felder sind obligatorisch.</div>
          </div>
          <div class="row">
            <div class="flex flex-row  justify-center items-center">
            <button class="btn btn-primary  " @click.prevent="allNotes()">gespeicherte Notizen anzeigen</button>
            <button class="btn btn-primary" @click.prevent="removeNote()">alle Notizen löschen</button>
           </div>
            <div class="col-sm-6 note" v-for="note in notes"  >
              <div v-if="note">
              <div v-if="note" class="card">
                
                <div v-if="note" class="card-block">
                  <h4  v-if="note" class="card-title text-white">{{note.title}}</h4>
                  <!-- <h6 class="card-subtitle mb-2 text-muted">{{note.date}}</h6> -->
                  <p  v-if="note" class="card-text text-white">{{note.text}}</p>
                  
                </div>
              </div></div>
            </div>
          </div>
        </div>
      
      </form></div>
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
        isActive: false,
				
				title: 'Noten zur Diagnose',
				note: {
					title: null,
					text: null
				},
        notes: []
			}},
      created(){this.allNotes()},
			methods: {

        
       allNotes() {
        

    axios.get( "http://localhost/patient-simulator/src/Api/api.php?action=getnotes",)
    
    .then((response) => {this.notes=response.data })
  },


				addNote() {
          if (this.note.text.length > 1 && this.note.title.length > 1)
					{
          var data = new FormData();
  
      data.append("notetitle", this.note.title);
      data.append("notetext", this.note.text);
      axios
        .post(
          // "./Api/api.php?action=login",
           "http://localhost/patient-simulator/src/Api/api.php?action=addnote",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
            
          } else {
            console.log("Success", res.data.message);
            this.isActive = false;
            this.note.text = "";
            this.note.title = "";
            this.allNotes()
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
				}
        else{this.isActive = true;}
      
      },

				removeNote() { 
          var data = new FormData();
  
  data.append("notetitle", this.note.title);
  data.append("notetext", this.note.text);
  axios
    .post(
      // "./Api/api.php?action=login",
       "http://localhost/patient-simulator/src/Api/api.php?action=removenote",
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
	font-size: 14px;
	min-width: 300px;
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
button.btn { 
	display: block; 
	padding: 5px  20px;
	font-family: 'Ubuntu', sans-serif;
	margin: 15px 40px 20px 20px;
  width: 50%;
	box-shadow: 0px 1px 3px rgb(76, 68, 68);
	border: none; 
	border-radius: 2px; }
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
h4 { 
  text-align: center; 
  font-weight: bold;
  font-size: 15px;
  margin: 30px 0px 30px 0px; 
   }

h4.card-title { margin: 5px 0px 15px 0px; }
p.card-text { margin: 25px 0px 0px 0px; }
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
  max-height: calc(200vh - 800px);}
</style>