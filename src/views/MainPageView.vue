<template>
     <header>
        <h1>PaFaSi<br/>Uni-Homburg</h1>
      </header>
    <div class="menu">
        <router-link to="/einlei"><br><Button text="Einleitung" color="#42b983"/></router-link>
        <router-link to="/anlei"><br><Button text="Anleitung Zu App" color="#42b983"/></router-link>
        <router-link to="/wart"><br><Button text="Wartezimmer" color="#42b983"/></router-link>
        <router-link to="/tip"><br><Button text="Tipps & Links" color="#42b983"/></router-link>
        <router-link to="/kleinge"><br><Button text="Kleingedrucktes" color="#42b983"/></router-link>
    </div>
    
</template>

<script>
import Button from '.././components/ButtonComp' 

export default{
    name:'button',
    components:{
        Button
    }
}
</script>

<style>
.h1{
 border-bottom: 1px solid#ddd;
 display:inline-block;
 padding:10px;   
}

.menu button {
background: #f4f4f4;
   padding: 20px;
   border-radius: 10px;
   margin: 5px auto ;
   max-width: 50 px;
   width:20%;
   cursor: pointer;
   color: #444  
} 

</style>