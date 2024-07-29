<template>
    <div class="container mt-4">
      <h1 class="mb-4">Discount List</h1>
      <router-link :to="{ name: 'create-discount' }" class="btn btn-primary mb-3">Create Discount</router-link>
      
      <div v-if="discounts.length === 0" class="alert alert-info" role="alert">
        No discounts found.
      </div>
  
      <div v-else>
        <table class="table">
          <thead>
            <tr>
              <th>Title</th>
              <th>Discount</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="discount in discounts" :key="discount.id">
              <td>{{ discount.title }}</td>
              <td>{{ discount.discount }}</td>
              <td>
                <router-link :to="{ name: 'edit-discount', params: { id: discount.id } }" class="btn btn-secondary">Edit</router-link>
                <router-link :to="{ name: 'show-discount', params: { id: discount.id } }" class="btn btn-primary">Show</router-link>
                <button @click="deleteDiscount(discount.id)" class="btn btn-danger">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    name: 'DiscountList',
    data() {
      return {
        discounts: [],
      };
    },
    mounted() {
      this.fetchDiscounts();
    },
    methods: {
      async fetchDiscounts() {
        try {
          const response = await axios.get('http://127.0.0.1:8000/api/discount/list');
          console.log(response.data);
          if (response.data.success) {
            this.discounts = response.data.data;
          }
        } catch (error) {
          console.error('Error fetching discounts:', error);
        }
      },
      async deleteDiscount(id) {
        if (confirm('Are you sure you want to delete this discount?')) {
          try {
            const response = await axios.delete(`http://127.0.0.1:8000/api/discount/delete/${id}`);
            if (response.data.success) {
              // Remove the deleted discount from the list
              this.discounts = this.discounts.filter(discount => discount.id !== id);
            }
          } catch (error) {
            console.error('Error deleting discount:', error);
          }
        }
      },
    },
  };
  </script>
  
  <style>
  /* Add your custom styles here */
  </style>
  