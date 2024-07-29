<template>
  <div class="container mt-4">
    <h1 class="mb-4">Create Category</h1>
    <Form @submit="submitForm" v-slot="{ errors }">
      <div class="mb-3">
        <label for="category-name" class="form-label">Name</label>
        <Field name="name" id="category-name" class="form-control" v-model="category.name" rules="required|minMax:3,15"
          type="text" :style="{ borderColor: errors && errors['name'] ? 'red' : '' }" validateOnInput />
        <!-- <span class="text-danger">{{ errors['name'] }}</span> -->
        <ErrorMessage name="name" class="text-danger" />
      </div>
      <div class="mb-3">
        <label for="category-description" class="form-label">Description</label>
        <Field as="textarea" name="description" id="category-description" class="form-control"
          v-model="category.description" rules="required|minMax:3,50"
          :style="{ borderColor: errors && errors['description'] ? 'red' : '' }" validateOnInput />
        <!-- <span class="text-danger">{{ errors['description'] }}</span> -->
        <ErrorMessage name="description" class="text-danger" />
      </div>
      <button type="submit" class="btn btn-primary">Create Category</button>
    </Form>
  </div>
</template>

<script>
import { Form, Field, defineRule, ErrorMessage } from "vee-validate";
import axios from "axios";

defineRule('required', value => {
  if (!value || !value.length) {
    return 'This field is required';
  }
  return true;
});

defineRule('minMax', (value, [min, max]) => {
  // The field is empty so it should pass
  if (!value || !value.length) {
    return true;
  }
  if (value.length < min) {
    return `This field must be at least ${min} characters`;
  }
  if (value.length > max) {
    return `This field must be less than ${max} characters`;
  }
  return true;
});


export default {
  name: "create-category",
  components: {
    Form,
    Field,
    ErrorMessage,
  },
  data() {
    return {
      category: {
        name: "",
        description: "",
      },
    };
  },
  methods: {
    async submitForm(values) {
      try {
        const response = await axios.post(
          "http://127.0.0.1:8000/api/category/create",
          values
        );
        if (response.data.success) {
          this.$router.push("/categories");
        }
      } catch (error) {
        console.error("Error creating category:", error);
      }
    },
  },
};
</script>