<template>
<div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div>
          <h1> {{title}}</h1>
          <h2> {{subtitle}}</h2>
          <h3>Total Notes: {{ notes.length }}</h3>
          <div class="form">
            <div class="form-group">
              <label>Note Title  </label>
              <input class="form-control" type="text" v-model="note.title" required>
            </div>
            <div class="form-group">
              <label>Note Text </label>
              <textarea rows="3" class="form-control" v-model="note.text" required></textarea>
            </div>
            <button class="btn btn-primary" @click="addNote">Save Note</button>
            <div class="alert alert-danger text-center" role="alert" v-bind:class="{ active: isActive }">All fields are Required</div>
          </div>
          <div class="row">
            <div class="col-sm-6 note" v-for="(note, index) in notes" :key="note.id">
              <div class="card">
                <button class="close" @click="removeNote(index)">&times;</button>
                <div class="card-block">
                  <h4 class="card-title">{{note.title}}</h4>
                  <h6 class="card-subtitle mb-2 text-muted">{{note.date}}</h6>
                  <p class="card-text">{{note.text}}</p>
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

<script>
export default({
			
			data(){return{
				isActive: false,
				title: 'Notepad',
				subtitle: 'Hr. Schneider Diagnosis Notes',
				note: {
					title: '',
					text: ''
				},
        notes: [
          
        ]
			}},
			methods: {
				addNote() {
					let {
						text,
						title
					} = this.note
					
					if (this.note.text.length > 1 && this.note.title.length > 1) {
						this.notes.push({
							text,
							title,
							date: new Date(Date.now()).toLocaleString()
						})
            this.isActive = false;
            this.note.text = "";
            this.note.title = "";
					} else {
						this.isActive = true;
					}
				},
				removeNote(index) {
					this.notes.splice(index, 1)
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
  background: #817b7b;
  border: 10px;
  padding: 20px; }
button.btn { 
	display: block; 
	padding: 15px 20px;
	font-family: 'Ubuntu', sans-serif;
	margin: 15px 0px;
  width: 100%;
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
h4.card-title { margin: 5px 0px 15px 0px; }
p.card-text { margin: 25px 0px 0px 0px; }
.card { 
  border-radius: 3px; 
  box-shadow: 0px 2px 3px rgb(74, 60, 60); }
.alert { display: none; }
.active { display: block; }
.col-sm-12 > div {
  
  margin: 0px auto; }
  .form-control 
  {padding-left: 10;
  margin-left: 20;
  }
  .container {background-color: #ffffff;}
</style>