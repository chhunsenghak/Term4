<template>
    <div class="container mt-4">
      <h1 class="mb-4">Discount Details</h1>
      <div v-if="discount" class="card">
        <div class="card-body">
          <h5 class="card-title">{{ discount.title }}</h5>
          <p class="card-text">Discount: {{ discount.discount }}</p>
          <h6>Products:</h6>
          <ul>
            <li v-for="product in discount.products" :key="product.id">
              {{ product.name }} (Category: {{ product.category }})
            </li>
          </ul>
          <router-link :to="{ name: 'edit-discount', params: { id: discount.id } }" class="btn btn-secondary">Edit</router-link>
          <router-link to="/discounts" class="btn btn-primary">Back to Discounts</router-link>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    name: 'ShowDiscount',
    data() {
      return {
        discount: null,
      };
    },
    mounted() {
      this.fetchDiscountDetails();
    },
    methods: {
      async fetchDiscountDetails() {
        try {
          const response = await axios.get(`http://127.0.0.1:8000/api/discount/show/${this.$route.params.id}`);
          if (response.data.success) {
            this.discount = response.data.data;
          }
        } catch (error) {
          console.error('Error fetching discount details:', error);
        }
      },
    },
  };
  </script>
  
  <style>
  /* Add your custom styles here */
  </style>
  