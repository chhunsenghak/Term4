<template>
  <div class="container mt-4">
    <h1 class="mb-4">Edit Category</h1>
    <Form @submit="updateCategory" :validation-schema="categorySchema" v-slot="{ errors }">
      <div class="mb-3">
        <label for="category-name" class="form-label">Name</label>
        <Field type="text" name="name" class="form-control" id="category-name" v-model="category.name" validateOnInput
          :style="{ borderColor: errors && errors['name'] ? 'red' : '' }" />
        <ErrorMessage name="name" class="text-danger" />
      </div>
      <div class="mb-3">
        <label for="category-description" class="form-label">Description</label>
        <textarea as="textarea" class="form-control" name="description" id="category-description"
          v-model="category.description" validateOnInput
          :style="{ borderColor: errors && errors['description'] ? 'red' : '' }"></textarea>
        <ErrorMessage name="description" class="text-danger" />
      </div>
      <button type="submit" class="btn btn-primary">Update Category</button>
    </Form>
  </div>
</template>
<script>
import { Form, Field, ErrorMessage } from "vee-validate";
// import { required } from '@vee-validate/rules';
import { categorySchema } from '@/validation/validation-schema';
import axios from 'axios';


// defineRule('required', value => {
//   if (!value || !value.length) {
//     return 'This field is required';
//   }
//   return true;
// });
// 
// defineRule('minMax', (value, [min, max]) => {
//   // The field is empty so it should pass
//   if (!value || !value.length) {
//     return true;
//   }
//   if (value.length < min) {
//     return `This field must be at least ${min} characters`;
//   }
//   if (value.length > max) {
//     return `This field must be less than ${max} characters`;
//   }
//   return true;
// });

// defineRule('required', required)
// defineRule('min', min)
// defineRule('max', max)
export default {
  name: 'edit-category',
  components: {
    Form,
    Field,
    ErrorMessage,
  },
  props: ['id'],
  data() {
    return {
      category: {
        name: '',
        description: '',
      },
      categorySchema: categorySchema,
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
    async updateCategory() {
      try {
        const response = await axios.put(`http://127.0.0.1:8000/api/category/update/${this.id}`, this.category);
        if (response.data.success) {
          this.$router.push('/categories');
        }
      } catch (error) {
        console.error('Error updating category:', error);
      }
    },
  },
};
</script>