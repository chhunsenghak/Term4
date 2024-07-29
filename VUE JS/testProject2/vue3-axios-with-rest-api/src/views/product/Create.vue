<template>
  <div class="container mt-4">
    <h1 class="mb-4">Create Product</h1>
    <Form @submit.prevent="createProduct" v-slot="{ errors }">
      <div class="mb-3">
        <label for="product-name" class="form-label">Name</label>
        <Field name="name" type="text" class="form-control" id="product-name" v-model="product.name" validateOnInput
          :style="{ borderColor: errors && errors['name'] ? 'red' : '' }" />
        <ErrorMessage name="name" class="text-danger"></ErrorMessage>
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
      <button type="submit" class="btn btn-primary">Create Product</button>
    </Form>
  </div>  
</template>

<script>
import { Form, Field, ErrorMessage } from "vee-validate";
import axios from 'axios';

export default {
  name: 'create-product',
  components: {
    Form,
    Field,
    ErrorMessage,
  },
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
    this.fetchCategories();
  },
  methods: {
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
    async createProduct() {
      try {
        const response = await axios.post('http://127.0.0.1:8000/api/product/create', this.product);
        if (response.data.success) {
          this.$router.push({ name: 'products' });
        }
      } catch (error) {
        console.error('Error creating product:', error);
      }
    },
  },
};
</script>