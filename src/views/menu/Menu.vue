<template>
  <div>
    <div class="grid grid-cols-3 gap-2">
      <div v-for="option in menu_options" :key="option.id" class="patient">
        <router-link :to="{ name: 'Menu', params: { id: option.id } }">
          <h3>{{ option.title }}</h3>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      menu_options: []
    }
  },
  mounted() {
    fetch('http://localhost:3000/menu_options') //json server to be replaced by database later
      .then(res => res.json())
      .then(data => this.menu_options = data)
      .catch(err => console.log(err.message))

  }
}

</script>

<style scoped>
.patient h3 {
  background: #e6e6e6;
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
  max-width: 20 px;
    /* width: 50%; */
  cursor: pointer;
  color: #444
}

.patient h3:hover {
  background: rgb(39, 190, 107)
}

.patient a {
  text-decoration: none
}
</style>
