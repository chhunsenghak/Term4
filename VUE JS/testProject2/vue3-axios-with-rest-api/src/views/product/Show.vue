<template>
  <div class="container mt-4">
    <h1 class="mb-4">Product Details</h1>
    <div v-if="product" class="card">
      <div class="card-body">
        <h5 class="card-title">{{ product.name }}</h5>
        <p class="card-text">Category: {{ product.category }}</p>
        <p class="card-text">{{ product.description }}</p>
        <p class="card-text">Created At: {{ product.created_at }}</p>
        <router-link
          :to="{ name: 'edit-product', params: { id: product.id } }"
          class="btn btn-secondary"
          >Edit</router-link
        >
        <router-link to="/products" class="btn btn-primary"
          >Back to Products</router-link
        >
      </div>
    </div>
  </div>
</template>
  
  <script>
import axios from "axios";

export default {
  name: "show-product",
  props: ["id"],
  data() {
    return {
      product: null,
    };
  },
  mounted() {
    this.fetchProductDetails();
  },
  methods: {
    async fetchProductDetails() {
      try {
        const response = await axios.get(
          `http://127.0.0.1:8000/api/product/show/${this.id}`
        );
        if (response.data.success) {
          this.product = response.data.data;
        }
      } catch (error) {
        console.error("Error fetching product details:", error);
      }
    },
  },
};
</script>
  