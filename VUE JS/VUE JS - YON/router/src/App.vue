<template>
  <div class="container-fluid">
    <NavbarConponentVue></NavbarConponentVue>
    <div class="mb-5">
      <router-view></router-view>
    </div>
    <FooterVue />
  </div>
</template>

<script>
import FooterVue from "./components/Footer.vue";
import NavbarConponentVue from "./components/Navbar.vue";
export default {
  components: {
    NavbarConponentVue,
    FooterVue,
  },
  name: "App",
};
</script>

<style>
nav {
  padding: 15px;
}
nav a {
  margin: 0 10px;
  text-decoration: none;
}
</style>