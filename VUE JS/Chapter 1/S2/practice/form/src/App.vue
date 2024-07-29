<template>
  <div>
    <input type="text" placeholder="First Name" v-model="first_name" />
    <input type="text" placeholder="Last Name" v-model="last_name" />
    <input type="text" placeholder="Age" v-model="age" />
    <p>Fist Name is : {{ first_name }}</p>
    <p>Last Name is : {{ last_name }}</p>
    <p>Full Name is : {{ full_name }}</p>
    <p>Your age is : {{ age }}</p>
    <p :style="{ color: color }">Your status is : {{ status }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      first_name: "",
      last_name: "",
      age: 0,
    };
  },
  computed: {
    full_name() {
      return this.first_name + " " + this.last_name;
    },
    status() {
      if (!this.age) {
        return "";
      } else if (this.age > 17) {
        return "Adult";
      } else {
        return "Child";
      }
    },
    color() {
      if (!this.age) {
        return "";
      } else if (this.age > 17) {
        return "green";
      } else {
        return "red";
      }
    },
  },
};
</script>

<style>
div {
  text-align: center;
}
</style>