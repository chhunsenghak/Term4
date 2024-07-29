<template>
  <div class="container mt-4">
    <div v-if="Student" class="card">
      <div class="card-header">
        <h2 class="card-title">Student Detail</h2>
        <!-- <router-link :to="{ name: 'edit-Student', params: { id: Student.id } }" class="btn btn-secondary float-end">Edit</router-link> -->
        <!-- <router-link to="/categories" class="btn btn-primary float-end me-2">Back to Categories</router-link> -->
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">{{ Student.name }}</h5>
                <p class="card-text"><strong>Age:</strong> {{ Student.age }}</p>
                <p class="card-text"><strong>Score:</strong> {{ Student.score }}</p>
                <p class="card-text"><strong>Province:</strong> {{ Student.province }}</p>
                <p class="card-text"><strong>Phone number:</strong> {{ Student.phone_number }}</p>
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
  name: 'ShowStudent',
  props: ['id'],
  data() {
    return {
      Student: null,
    };
  },
  mounted() {
    this.fetchStudentDetails();
  },
  methods: {
    async fetchStudentDetails() {
      try {
        const response = await axios.get(`http://127.0.0.1:8000/api/student/show/${this.id}`);
        if (response.data.success) {
          this.Student = response.data.data;
        }
      } catch (error) {
        console.error('Error fetching student details:', error);
      }
    },
  },
};
</script>
