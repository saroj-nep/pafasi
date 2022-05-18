<template>
    <div>
        <h3> {{task.text}} </h3>
        <p> {{task.day}} </p>
    </div>


</template>

<script>
export default{
    name:'PatientComp',
    props:{
            task:Object,
    },
}


</script>
