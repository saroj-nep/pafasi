<template>
    <Header />
    <div class="menu flex flex-row  justify-center items-center">
        <router-link to="/einlei"><br><Button text="Leitfaden zur Bewerbung" /></router-link> 
        <router-link to="/warte"><br><Button text="Wartezimmer" /></router-link>
        
        
    </div>
    
</template>

<script>
import Button from '.././components/ButtonComp' 
import Header from '@/components/DefaultLayout'

export default{
    name:'button',
    components:{
        Button,
        Header
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
 background:  rgb(82, 225, 132);
  padding: 50px;
  border-radius: 20px;
  width:80%;
  height: 50px;
  cursor: pointer;
  color: #444;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 20px;
  
} 
 .menu button:hover {
    background: rgb(39, 190, 107)
  }
  .menu a{
    text-decoration: none
  }
</style>