<template>
    <Header />
    <div class="menu flex flex-row justify-center content-center justify-self-center self-center items-center justify-items-center ">
        <router-link to="#"><br><Button class="btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl" text="Anleitung zur Bewerbung" /></router-link> 
        <router-link to="/warte"><br><Button class="btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl" text="Wartezimmer" /></router-link>
        
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
 background:  rgb(5,150,105);
  padding: 50px;
  border-radius: 20px;
  width:80%;
  height: 100px;
  cursor: pointer;
  color: rgb(255, 255, 255);
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