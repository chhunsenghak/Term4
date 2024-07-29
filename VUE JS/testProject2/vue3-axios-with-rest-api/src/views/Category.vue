<template>
  <div class="container mt-4">
    <h1 class="mb-4">Category List</h1>

    <!-- Form to create a new category -->
    <form @submit.prevent="createCategory">
      <div class="mb-3">
        <label for="category-name" class="form-label">Name</label>
        <input
          type="text"
          class="form-control"
          id="category-name"
          v-model="newCategory.name"
          required
        />
      </div>

      <div class="mb-3">
        <label for="category-description" class="form-label">Description</label>
        <textarea
          class="form-control"
          id="category-description"
          v-model="newCategory.description"
          required
        ></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Create Category</button>
    </form>

    <!-- Category list -->
    <ul class="list-group mt-4">
      <li
        v-for="category in categories"
        :key="category.id"
        class="list-group-item"
      >
        <h4>{{ category.name }}</h4>
        <p>{{ category.description }}</p>
        <button
          class="btn btn-info btn-sm"
          @click="showCategoryDetails(category.id)"
        >
          Show Details
        </button>
        <button
          class="btn btn-secondary btn-sm"
          @click="editCategory(category)"
        >
          Edit
        </button>
        <button
          class="btn btn-danger btn-sm"
          @click="deleteCategory(category.id)"
        >
          Delete
        </button>
      </li>
    </ul>

    <!-- Selected Category Details -->
    <div v-if="selectedCategory" class="card mt-4">
      <div class="card-body">
        <h5 class="card-title">{{ selectedCategory.name }}</h5>
        <p class="card-text">{{ selectedCategory.description }}</p>
      </div>
    </div>

    <!-- Edit Category Modal -->
    <div
      v-if="editingCategory"
      class="modal"
      tabindex="-1"
      style="display: block"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Category</h5>
            <button
              type="button"
              class="btn-close"
              @click="cancelEdit"
            ></button>
          </div>
          <div class="modal-body">
            <form @submit.prevent="updateCategory">
              <div class="mb-3">
                <label for="edit-category-name" class="form-label">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="edit-category-name"
                  v-model="editingCategory.name"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="edit-category-description" class="form-label"
                  >Description</label
                >
                <textarea
                  class="form-control"
                  id="edit-category-description"
                  v-model="editingCategory.description"
                  required
                ></textarea>
              </div>
              <button type="submit" class="btn btn-primary">
                Update Category
              </button>
              <button
                type="button"
                class="btn btn-secondary"
                @click="cancelEdit"
              >
                Cancel
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "CategoryList",
  data() {
    return {
      categories: [],
      newCategory: {
        name: "",
        description: "",
      },
      selectedCategory: null,
      editingCategory: null,
    };
  },
  created() {
    this.fetchCategories();
  },
  methods: {
    async fetchCategories() {
      try {
        const response = await axios.get(
          "http://127.0.0.1:8000/api/category/list"
        );
        if (response.data.success) {
          this.categories = response.data.data;
        }
      } catch (error) {
        console.error("Error fetching categories:", error);
      }
    },

    async createCategory() {
      try {
        const response = await axios.post(
          "http://127.0.0.1:8000/api/category/create",
          this.newCategory
        );
        if (response.data.success) {
          await this.fetchCategories();
          this.newCategory.name = "";
          this.newCategory.description = "";
        }
      } catch (error) {
        console.error("Error creating category:", error);
      }
    },

    async showCategoryDetails(categoryId) {
      try {
        const response = await axios.get(
          `http://127.0.0.1:8000/api/category/show/${categoryId}`
        );

        if (response.data.success) {
          this.selectedCategory = response.data.data;
        }
      } catch (error) {
        console.error("Error fetching category details:", error);
      }
    },

    editCategory(category) {
      this.editingCategory = { ...category };
    },
    cancelEdit() {
      this.editingCategory = null;
    },
    async updateCategory() {
      try {
        const response = await axios.put(
          `http://127.0.0.1:8000/api/category/update/${this.editingCategory.id}`,
          this.editingCategory
        );
        if (response.data.success) {
          // Fetch the updated category list after updating the category
          await this.fetchCategories();
          this.editingCategory = null;
        }
      } catch (error) {
        console.error("Error updating category:", error);
      }
    },

    async deleteCategory(categoryId) {
      console.log(categoryId);
      try {
        const response = await axios.delete(
          `http://127.0.0.1:8000/api/category/delete/${categoryId}`
        );
        if (response.data.success) {
          await this.fetchCategories();
        }
      } catch (error) {
        console.error("Error deleting category:", error);
      }
    },
  },
};
</script>

<style scoped>
h1 {
  font-size: 2em;
  margin-bottom: 0.5em;
}
.modal {
  background: rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>
