<template>
    <div class="container mt-4">
      <h1 class="mb-4">Create Discount</h1>
      <form @submit.prevent="createDiscount">
        <div class="mb-3">
          <label for="discount-title" class="form-label">Title</label>
          <input
            type="text"
            class="form-control"
            id="discount-title"
            v-model="discount.title"
            required
          />
        </div>
  
        <div class="mb-3">
          <label for="discount-products" class="form-label">Products</label>
          <multiselect
            v-model="selectedProducts"
            :options="products"
            :multiple="true"
            :close-on-select="false"
            :clear-on-select="false"
            :preserve-search="true"
            placeholder="Select products"
            label="name"
            track-by="id"
          >
          </multiselect>
        </div>
  
        <div class="mb-3">
          <label for="discount-amount" class="form-label">Discount Amount</label>
          <input
            type="number"
            step="0.01"
            class="form-control"
            id="discount-amount"
            v-model="discount.discount"
            required
          />
        </div>
  
        <button type="submit" class="btn btn-primary">Create Discount</button>
      </form>
    </div>
  </template>
  
  <script>
  import axios from "axios";
  import Multiselect from "vue-multiselect";
  
  export default {
    name: "CreateDiscount",
    components: { Multiselect },
    data() {
      return {
        discount: {
          title: "",
          product_id: [],
          discount: null
        },
        products: [],
        selectedProducts: []
      };
    },
    mounted() {
      this.fetchProducts();
    },
    methods: {
      async fetchProducts() {
        try {
          const response = await axios.get("http://127.0.0.1:8000/api/product/list");
          if (response.data.success) {
            this.products = response.data.data;
          }
        } catch (error) {
          console.error("Error fetching products:", error);
        }
      },
      async createDiscount() {
        // Format the data according to the API requirement
        const requestData = {
          title: this.discount.title,
          product_id: this.selectedProducts.map(product => product.id),
          discount: parseFloat(this.discount.discount)
        };
        console.log(requestData);
        try {
          const response = await axios.post(
            "http://127.0.0.1:8000/api/discount/create",
            requestData
          );
        //   console.log(this.discount);
          if (response.data.success) {
            // Reset form fields
            console.log(1);
            this.discount.title = "";
            this.selectedProducts = [];
            this.discount.discount = null;
  
            // Redirect to the discount list route
            this.$router.push({ name: "discounts" });
          }
        } catch (error) {
          console.error("Error creating discount:", error);
        }
      }
    }
  };
  </script>
  
  <style>
  @import 'vue-multiselect/dist/vue-multiselect.css';
  /* Add your custom styles here */
  </style>
  