<template>
    <div v-if ="patient">
       
    <div class="patient">
        <h1> Case {{ patient.id}}: {{ patient.title}}</h1>
    </div>
    
    <div class="row">
         <div class="column left"> 
             <h3>Money:</h3>
             <h3>Time:</h3>
             <h3>Morale:</h3>
           <div class="fallbeschreibung">  <!-- Should be replaced by a widget -->
                <h3>Fallbeschreibung</h3>
                 <p>{{patient.details}}</p>
            </div>  

         </div>
         <div class="column right"> 
             <div class="Notepad">  <!-- Should be replaced by a widget -->
             <h3>Notepad</h3>
             <p> Copy and paste your notes here. </p>
             </div>
          </div>
    </div>
     </div>
</template>

<script>
export default {
    props: ['id'],
    data(){
        return {
            patient:null
        }
    },

mounted() {
    fetch('http://localhost:3000/patients/' +this.id) //json server to be replaced by database later
    .then(res=> res.json())
    .then(data =>this.patient=data)
    .catch(err =>console.log(err.message))
    
  }
}

</script>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  padding: 10px;
  height: 600px;
  
}

.left {
  width: 75%;
  
}

.column right {
  width: 25%;
 
}
.fallbeschreibung {
  border: 1px solid green ;
  text-align: left;
  margin-left:200px;
  padding-left:10px;
  margin-right:50px;
}
.Notepad {
  border: 1px solid green ;
  text-align: left;
  height: 600px;
  padding-left:10px;
}


</style>