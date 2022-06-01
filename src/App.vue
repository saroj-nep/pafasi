<template>
  <nav>
    <router-link to="/home">Home</router-link> |
    <router-link to="/about">About</router-link> |
    <router-link to="/">Main</router-link>
  </nav>
  <router-view/>

</template>


<script>
// import { createDecipheriv } from 'crypto'
import ButtonCompVue from './components/ButtonComp'

export default{
  name:'App',
  components:{
    ButtonCompVue
  },
}

</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
  text-decoration: none;
  padding:5px;
  border-radius: 5px;
}

nav a.router-link-exact-active {
  color: #fdfdfd;
  background: #326fe1;
}
</style>
