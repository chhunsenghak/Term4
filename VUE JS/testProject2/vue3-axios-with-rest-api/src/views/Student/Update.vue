<template>
  <div class="container mt-4">
    <h1 class="mb-4">Edit Student</h1>
    <form @submit.prevent="updateStudent">
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
        <input type="text" class="form-control" id="student-province" v-model="student.province" required>
      </div>
      <div class="mb-3">
        <label for="student-score" class="form-label">Score</label>
        <input type="number" class="form-control" id="student-score" v-model="student.score" required>
      </div>
      <div class="mb-3">
        <label for="student-phone" class="form-label">Phone Number</label>
        <input type="text" class="form-control" id="student-phone" v-model="student.phone_number" required>
      </div>
      <button type="submit" class="btn btn-primary">Update student</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'edit-student',
  props: ['id'],
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
        console.error('Error fetching Student details:', error);
      }
    },
    async updateStudent() {
      try {
        const response = await axios.put(`http://127.0.0.1:8000/api/student/update/${this.id}`, this.student);
        if (response.data.success) {
          this.$router.push('/students');
        }
      } catch (error) {
        console.error('Error updating Student:', error);
      }
    },
  },
};
</script>