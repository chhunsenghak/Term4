<template>
  <div class="text-center m-2">
    <button class="text-center btn btn-warning fs-5">
      Exercise 2 - Vue JS
    </button>
  </div>
  <div class="d-flex justify-content-center align-items-center">
    <div class="p-3 bg-light rounded border border-3 border-warning w-25">
      <form action="">
        <div class="text-center">
          <button class="text-center btn btn-warning fw-bold text-white">
            Register Form
          </button>
        </div>
        <div class="mb-3">
          <label for="first_name" class="fw-bold">First Name</label>
          <input
            type="text"
            class="form-control"
            placeholder="Enter First Name"
            v-model="first_name"
          />
        </div>
        <div class="mb-3">
          <label for="" class="fw-bold">Last Name</label>
          <input
            type="text"
            class="form-control"
            placeholder="Enter Last Name"
            v-model="last_name"
          />
        </div>
        <div class="mb-3">
          <label for="" class="fw-bold">Gender</label>
          <select name="gender" class="form-control" v-model="gender">
            <option value="" class="text-light">Choose gender</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="" class="fw-bold">Age</label>
          <input
            type="number"
            class="form-control"
            placeholder="Enter Age"
            v-model="age"
          />
        </div>
        <div class="mb-3">
          <label for="" class="fw-bold">Score</label>
          <input
            type="number"
            class="form-control"
            placeholder="Score"
            v-model="score"
          />
        </div>
        
      </form>
    </div>
    <div
      class="border border-3 rounded border-warning w-25 bg-light p-3"
      style="height: 470px"
    >
      <div class="text-center">
        <button class="btn btn-warning fw-bold text-white">Information</button>
      </div>
      <div class="row">
        <p class="col-5">First Name :</p>
        <p class="col-7">{{ first_name }}</p>
      </div>
      <div class="row">
        <p class="col-5">Last Name :</p>
        <p class="col-7">{{ last_name }}</p>
      </div>
      <div class="row">
        <p class="col-5">Full Name :</p>
        <p class="col-7">{{ full_name }}</p>
      </div>
      <div class="row">
        <p class="col-5">Gender :</p>
        <p class="col-7">{{ gender }}</p>
      </div>
      <div class="row">
        <p class="col-5">Age :</p>
        <p class="col-7">{{ age }}</p>
      </div>
      <div class="row">
        <p class="col-5">Status of age :</p>
        <p class="col-7">
          <span :style="{ color: colorAge }">{{ statusAge }}</span>
        </p>
      </div>
      <div class="row">
        <p class="col-5">Score :</p>
        <p class="col-7">{{ score }}</p>
      </div>
      <div class="row">
        <p class="col-5">Status of grade:</p>
        <p :style="{ color: colorGrade }" class="col-7">{{ statusGrade }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      first_name: "",
      last_name: "",
      gender: "",
      age: "",
      score: "",
      grade: "",
    };
  },
  computed: {
    full_name() {
      return this.first_name + " " + this.last_name;
    },
    statusAge() {
      if (!this.age) {
        return "";
      } else if (this.age > 17) {
        return "adult";
      } else {
        return "child";
      }
    },
    statusGrade() {
      if (!this.score) {
        return "";
      } else if (this.score >= 90) {
        return "A";
      } else if (this.score >= 80) {
        return "B";
      } else if (this.score >= 70) {
        return "C";
      } else if (this.score >= 60) {
        return "D";
      } else if (this.score >= 50) {
        return "E";
      } else {
        return "F";
      }
    },
    colorAge() {
      if (!this.age) {
        return "";
      } else if (this.age > 17) {
        return "green";
      } else {
        return "red";
      }
    },
    colorGrade() {
      if (!this.score) {
        return "";
      } else if (this.score >= 90) {
        return "pink";
      } else if (this.score >= 80) {
        return "orange";
      } else if (this.score >= 70) {
        return "green";
      } else if (this.score >= 60) {
        return "yellow";
      } else if (this.score >= 50) {
        return "blue";
      } else {
        return "red";
      }
    },
  },
};
</script>

<style>
</style>