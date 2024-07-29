<template>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6">
        <h1 class="mb-4">Student Information Form</h1>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" id="name" v-model="name" class="form-control" />
        </div>
        <div class="mb-3">
          <label for="gender" class="form-label">Gender</label>
          <select id="gender" v-model="gender" class="form-select">
            <option value="" disabled>Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="dob" class="form-label">Date of Birth</label>
          <input type="date" id="dob" v-model="dob" class="form-control" />
        </div>
        <div class="mb-3">
          <label for="subject" class="form-label">Subject</label>
          <input
            type="text"
            id="subject"
            v-model="subject"
            class="form-control"
          />
        </div>
        <div class="mb-3">
          <label for="score" class="form-label">Score</label>
          <input
            type="number"
            id="score"
            v-model="score"
            class="form-control"
          />
        </div>
      </div>
      <div class="col-md-6">
        <div class="mt-4">
          <h2>Student Information</h2>
          <p>Name: {{ name }}</p>
          <p>Gender: {{ gender }}</p>
          <p>Date of Birth: {{ dob }}</p>
          <p>Subject: {{ subject }}</p>
          <p>Score: {{ score }}</p>
          <p :style="colorStatus">Status: {{ statusScore }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "App",
  data() {
    return {
      name: "",
      gender: "",
      dob: "",
      subject: "",
      score: "",
      status: "",
    };
  },
  computed: {
    statusScore() {
      if (!this.score) {
        return "";
      } else if (this.score >= 50) {
        return "Pass";
      } else {
        return "Fail";
      }
    },
    colorStatus() {
      if (!this.score) {
        return "";
      } else if (this.score >= 50) {
        return {
          color: "green",
        };
      } else {
        return {
          color: "red",
        };
      }
    },
  },
};
</script>

<style>
body {
  margin-top: 50px;
}
</style>
