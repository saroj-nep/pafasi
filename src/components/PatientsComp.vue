<template>
    <div v-for="task in tasks" :key="task.id">
        <h1>hjbhkbhkbkh</h1>
         <PatientComp :task="task" />
    </div>
</template>

<script>
import PatientComp from '.././components/PatientComp'

export default {
    name:'PatientsComp',
    props:{
        tasks:Array
    },
    components:{
        PatientComp,
    }
}

</script>
