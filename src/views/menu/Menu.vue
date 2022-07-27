<template>
    <div v-if ="option">
       
    <div class="patient">
        <div>
             <h1><strong>  Hr. Schneider </strong></h1>
        <h1><strong>  {{ option.title}}</strong></h1>
        </div>
    </div>
    
    <div class="row">
         <div class="column left"> 
             
           <div class="fallbeschreibung">  <!-- Should be replaced by a widget -->
                <h3><strong>Fallbeschreibung</strong></h3><br>
                 <p>{{option.title}}</p>
            </div>  
          <div class="column left"> <br>
          
      

          </div>
         </div>
         
         <div class="column right"> 
             <div class="Notepad">  <!-- Should be replaced by a widget -->
             
             <p> <form action="">
  <label for="phone">Notepad:</label><br><br>
  <input type="text" id="note" name="notepad" placeholder=" Save your notes here."
  ><br><br>
  
</form> 
</p>
             </div>
          </div>
    </div>
    
     </div>
     
</template>

<script>
export default {
    props: ["id"],
    data() {
        return {
            option: null
        };
    },
    mounted() {
        fetch("http://localhost:3000/menu_options/" + this.id) //json server to be replaced by database later
            .then(res => res.json())
            .then(data => this.option = data)
            .catch(err => console.log(err.message));
    },
    components: { Option }
}

</script>
<style scoped>
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