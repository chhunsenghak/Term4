<template>
  <div>
    <h1>{{ title }}</h1>
    <button @click="increment">+</button>
    <button @click="decrement">-</button>
    <p>{{ description }}</p>
    <!-- <h3 v-text="title"></h3> -->
    <h1>{{ product }}</h1>
    <p v-if="price <= 50" style="color: red">{{ price }}</p>
    <p v-else-if="price > 50" style="color: blue">{{ price }}</p>
    <img v-bind:src="image" />
    <br>
    <a v-bind:href="link">Go to w3schools</a>
    <br>
    <a :href="link">Go to w3schools</a>
    <img :src="lamborghini" alt="">
  </div>
</template>


<script>
export default {
  data() {
    return {
      title: "Hello World",
      product: "Computer",
      price: 51,
      lamborghini : "https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/models_gw/2023/03_29_revuelto/gate_models_s_02_m.jpg",
      link : "https://www.w3schools.com/",
      description:
        "This is the description fo the lesson for today. I love you senghak",
      image:
        "https://t4.ftcdn.net/jpg/06/29/74/85/360_F_629748538_FGo3si6sm8MpXEInFQ9ZOas0AJN0zJWH.jpg",
    };
  },
  methods:{
    increment(){
      this.price += 1;
    },
    decrement(){
      this.price -= 1;
    }
  }
};
</script>

<style>
div {
  text-align: center;
}
h1 {
  color: red;
}
p {
  font-size: 30px;
}
</style>