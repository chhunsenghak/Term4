<template>
    <div class="container mt-4">
      <h1 class="mb-4">Edit Product</h1>
      <form @submit.prevent="updateProduct">
        <div class="mb-3">
          <label for="product-name" class="form-label">Name</label>
          <input type="text" class="form-control" id="product-name" v-model="product.name" required />
        </div>
        <div class="mb-3">
          <label for="product-category" class="form-label">Category</label>
          <select class="form-control" id="product-category" v-model="product.category_id" required>
            <option v-for="category in categories" :key="category.id" :value="category.id">
              {{ category.name }}
            </option>
          </select>
        </div>
        <div class="mb-3">
          <label for="product-description" class="form-label">Description</label>
          <textarea class="form-control" id="product-description" v-model="product.description" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
      </form>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    name:'edit-product',
    props: ['id'],
    data() {
      return {
        product: {
          name: '',
          category_id: '',
          description: '',
        },
        categories: [],
      };
    },
    mounted() {
      this.fetchProductDetails();
      this.fetchCategories();
    },
    methods: {
      async fetchProductDetails() {
        try {
          const response = await axios.get(`http://127.0.0.1:8000/api/product/show/${this.id}`);
          if (response.data.success) {
            this.product = response.data.data;
          }
        } catch (error) {
          console.error('Error fetching product details:', error);
        }
      },
      async fetchCategories() {
        try {
          const response = await axios.get('http://127.0.0.1:8000/api/category/list');
          if (response.data.success) {
            this.categories = response.data.data;
          }
        } catch (error) {
          console.error('Error fetching categories:', error);
        }
      },
      async updateProduct() {
        try {
          const response = await axios.put(`http://127.0.0.1:8000/api/product/update/${this.id}`, this.product);
          if (response.data.success) {
            this.$router.push({ name: 'products' });
          }
        } catch (error) {
          console.error('Error updating product:', error);
        }
      },
    },
  };
  </script>
  