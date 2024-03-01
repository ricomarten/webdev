<template>
  <!--
  <nav v-if="$route.name!=='Application'">
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link> | 
    <router-link to="/form">Form</router-link> | 
    <router-link to="/calculator">Calculator</router-link>
  </nav>
  -->
  <navigasi></navigasi>
  <router-view/>

</template>
<script>
import NavBar from "./components/NavBar.vue"
export default{
  components:{
    "navigasi":NavBar
  }
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
}

nav a.router-link-exact-active {
  color: #42b983;
}
</style>
