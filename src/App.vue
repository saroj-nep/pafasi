<template>

<Header />
  <router-view/>

</template>


<script>
// import { createDecipheriv } from 'crypto'
import ButtonCompVue from './components/ButtonComp';
import Header from './components/DefaultLayout.vue';
// import Option from './components/Option'

export default{
  name:'App',
  components:{
    ButtonCompVue,
    Header
    // Option
  },
}


</script>

