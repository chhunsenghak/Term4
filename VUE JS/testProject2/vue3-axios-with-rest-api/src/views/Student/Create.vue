<template>
  <div class="container mt-4">
    <h1 class="mb-4">Add Student</h1>
    <form @submit.prevent="createStudent">
      <div class="mb-3">
        <label for="student-name" class="form-label">Name</label>
        <input type="text" class="form-control" id="student-name" v-model="student.name" required />
      </div>
      <div class="mb-3">
        <label for="student-age" class="form-label">Age</label>
        <input type="number" class="form-control" id="student-age" v-model="student.age" required>
      </div>
      <div class="mb-3">
        <label for="student-province" class="form-label">Province</label>
        <input  type="text" class="form-control" id="student-province" v-model="student.province" required>
      </div>
      <div class="mb-3">
        <label for="student-score" class="form-label">Score</label>
        <input type="number" class="form-control" id="student-score" v-model="student.score" required>
      </div>
      <div class="mb-3">
        <label for="student-phone" class="form-label">Phone Number</label>
        <input type="text" class="form-control" id="student-phone" v-model="student.phone_number" required>
      </div>
      <button type="submit" class="btn btn-primary">Create student</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'create-student',
  data() {
    return {
      student: {
        name: '',
        age: '',
        province: '',
        score: '',
        phone_number: '',
      },
    };
  },
  methods: {
    async createStudent() {
      try {
        const response = await axios.post('http://127.0.0.1:8000/api/student/create', this.student);
        if (response.data.success) {
          this.$router.push('/students');
        }
      } catch (error) {
        console.error('Error creating student:', error);
      }
    },
  },
};
</script>