<template>
   <Header />
</template>
<script>

import Header from '@/components/DefaultLayout'

export default{
    name:'button',
    components:{

        Header
    },
      created(){ console.log(localStorage.email)
    if (localStorage.email==''){this.$router.push("/login");}
},
}
</script>
