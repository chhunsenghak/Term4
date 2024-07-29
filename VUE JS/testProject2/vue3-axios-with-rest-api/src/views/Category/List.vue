<template>
  <div class="container mt-4">
    <h1 class="mb-4">Category List</h1>
    <router-link to="/categories/create" class="btn btn-primary mb-4">New Category</router-link>
    <ul class="list-group mt-4">
      <li v-for="category in categories" :key="category.id" class="list-group-item">
        <h4>{{ category.name }}</h4>
        <p>{{ category.description }}</p>
        <router-link :to="{ name: 'show-category', params: { id: category.id } }"
          class="btn btn-info btn-sm">Show</router-link>
        <router-link :to="{ name: 'edit-category', params: { id: category.id } }"
          class="btn btn-secondary btn-sm">Edit</router-link>
        <button class="btn btn-danger btn-sm" @click="deleteCategory(category.id)">Delete</button>
      </li>
    </ul>
    <button class="btn btn-success" @click="increment">+</button>
    <button class="btn btn-primary" @click="randomizeCounter">randomize</button>
    <button class="btn btn-danger" @click="decrement">-</button>
    <div class="">{{ store.doubleCount }}</div>
    <div class="">{{ store.count }}</div>
    <div class="">{{ store.countStatus }}</div>
    
  </div>
</template>

<script>
import axios from 'axios';
import { userStore } from "@/store/index";
export default {
  name: 'list-category',
  data() {
    return {
      categories: [],
      store: userStore()
    };
  },
  mounted() {
    this.fetchCategories();
  },
  methods: {
    increment() {
      this.store.increment();
    },
    randomizeCounter() {
      this.store.randomizeCounter();
    },
    decrement() {
      this.store.decrement();
    },
    async fetchCategories() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/category/list');
        console.log(response.status);
        if (response.status == 200) {
          this.categories = response.data.data;
        }
        if (response.data.success) {
          this.categories = response.data.data;
        }
      } catch (error) {
        console.error('Error fetching categories:', error);
      }
    },
    async deleteCategory(categoryId) {
      try {
        const response = await axios.delete(`http://127.0.0.1:8000/api/category/delete/${categoryId}`);
        if (response.data.success) {
          this.fetchCategories();
        }
      } catch (error) {
        console.error('Error deleting category:', error);
      }
    },
  },
};
</script>