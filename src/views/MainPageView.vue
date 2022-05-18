<template>
     <header>
        <h1>PaFaSi<br/>Uni-Homburg</h1>
      </header>
    
    <router-link to="/einlei"><Button text="Einleitung" color="red"/></router-link>
    <router-link to="/anlei"><br><Button text="Anleitung Zu App" color="red"/></router-link>
    <router-link to="/wart"><br><Button text="Wartezimmer" color="red"/></router-link>
    <router-link to="/tip"><br><Button text="Tipps & Links" color="red"/></router-link>
    <router-link to="/kleinge"><br><Button text="Kleingedrucktes" color="red"/></router-link>

    
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
