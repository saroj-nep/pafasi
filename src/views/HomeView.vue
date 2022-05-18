<template>
  <div class="home">
    <!-- <img alt="Vue logo" src="../assets/logo.png">
    <HelloWorld msg="Welcome to Your Vue.js App"/>
    <h1>hjbhkddbmmhkbkh</h1> -->
    <PatientsComp :tasks="tasks" />
  </div>
  
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'
import PatientsComp from '@/components/PatientsComp.vue'
export default {
  name: 'HomeView',
  components: {
    HelloWorld,
    PatientsComp
  },

  
  data() {
    return {
      tasks:[],
      showAddTask:false,
    }
  },
  async created() {
    // console.log("creating")
    this.tasks = await this.fetchTasks()
    // this.tasks =  [{"kkkm":"kjknjnjnj"}]
  },
  
  methods:{

    async fetchTasks(){

      const res = await fetch('http://localhost:5000/tasks')
      const data = await res.json()
      return data
     
      // const res = await fetch('http://localhost:5000/tasks')
      
      // const data= await res.json()

      // return data
    
    },


  }

}
</script>
