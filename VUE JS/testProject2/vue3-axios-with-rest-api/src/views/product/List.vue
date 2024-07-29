<template>
    <div class="container mt-4">
      <h1 class="mb-4">Product List</h1>
      <router-link to="/products/create" class="btn btn-primary mb-4">Create New Product</router-link>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="product in products" :key="product.id">
            <td>{{ product.id }}</td>
            <td>{{ product.name }}</td>
            <td>{{ product.category }}</td>
            <td>{{ product.description }}</td>
            <td>{{ product.created_at }}</td>
            <td>
              <router-link :to="{ name: 'show-product', params: { id: product.id } }" class="btn btn-info btn-sm">Show</router-link>
              <router-link :to="{ name: 'edit-product', params: { id: product.id } }" class="btn btn-secondary btn-sm">Edit</router-link>
              <button @click="deleteProduct(product.id)" class="btn btn-danger btn-sm">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    name:'list-product',
    data() {
      return {
        products: [],
      };
    },
    mounted() {
      this.fetchProducts();
    },
    methods: {
      async fetchProducts() {
        try {
          const response = await axios.get('http://127.0.0.1:8000/api/product/list');
          if (response.data.success) {
            this.products = response.data.data;
          }
        } catch (error) {
          console.error('Error fetching products:', error);
        }
      },
      async deleteProduct(productId) {
        try {
          const response = await axios.delete(`http://127.0.0.1:8000/api/product/delete/${productId}`);
          if (response.data.success) {
            this.fetchProducts();
          }
        } catch (error) {
          console.error('Error deleting product:', error);
        }
      },
    },
  };
  </script>
  