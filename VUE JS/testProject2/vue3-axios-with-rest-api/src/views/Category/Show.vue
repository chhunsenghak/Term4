<template>
  <div class="container mt-4">
    <div v-if="category" class="card">
      <div class="card-header">
        <h2 class="card-title">{{ category.name }}</h2>
        <router-link :to="{ name: 'edit-category', params: { id: category.id } }" class="btn btn-secondary float-end">Edit</router-link>
        <router-link to="/categories" class="btn btn-primary float-end me-2">Back to Categories</router-link>
      </div>
      <div class="card-body">
        <p class="card-text"><strong>Description:</strong> {{ category.description }}</p>
        <p class="card-text"><strong>Total Products:</strong> {{ category.total_products }}</p>

        <div v-if="category.products && category.products.length" class="mt-4">
          <h3>Products</h3>
          <div class="row">
            <div class="col-md-4" v-for="product in category.products" :key="product.id">
              <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title">{{ product.name }}</h5>
                  <p class="card-text"><strong>Category:</strong> {{ product.category }}</p>
                  <router-link :to="{ name: 'show-product', params: { id: product.id } }" class="btn btn-info btn-sm">View</router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div v-else>
      <p>Loading...</p>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
export default {
  name: 'ShowCategory',
  props: ['id'],
  data() {
    return {
      category: [],
    };
  },
  mounted() {
    this.fetchCategoryDetails();
  },
  methods: {
    async fetchCategoryDetails() {
      try {
        const response = await axios.get(`http://127.0.0.1:8000/api/category/show/${this.id}`);
        if (response.data.success) {
          this.category = response.data.data;
        }
      } catch (error) {
        console.error('Error fetching category details:', error);
      }
    },
  },
};
</script>

