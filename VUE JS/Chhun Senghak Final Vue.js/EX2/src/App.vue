<template>
  <div class="container mt-5">
    <!-- Add User Form -->
    <div class="row">
      <div class="col-md-6 mx-auto">
        <form @submit.prevent="addUser" class="mb-3">
          <div class="input-group">
            <input
              type="text"
              class="form-control"
              placeholder="Name"
              v-model="newUser.name"
            />
            <input
              type="email"
              class="form-control"
              placeholder="Email"
              v-model="newUser.email"
            />
            <button type="submit" class="btn btn-primary">Add User</button>
          </div>
        </form>
      </div>
    </div>
    <!-- User List -->
    <div class="row">
      <div class="col-md-6 mx-auto">
        <ul class="list-group">
          <li class="list-group-item" v-for="user in users" :key="user.id">
            <div v-if="!user.editMode">
              <span>{{ user.name }}</span> - <span>{{ user.email }}</span>
              <button
                @click="removeUser(user)"
                class="btn btn-danger btn-sm float-end"
              >
                Remove
              </button>
              <button
                @click="toggleEditMode(user)"
                class="btn btn-primary btn-sm float-end me-2"
              >
                Edit
              </button>
            </div>
            <div v-else-if="user.editMode">
              <div class="input-group">
                <input type="text" v-model="user.name" class="form-control" />
                <input type="email" v-model="user.email" class="form-control" />
                <button
                  @click="saveUserEdit(user)"
                  class="btn btn-success btn-sm"
                >
                  Save
                </button>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      users: [
        { name: "Alice", email: "alice@example.com", editMode: false },
        { name: "Bob", email: "bob@example.com", editMode: false },
        { name: "Charlie", email: "charlie@example.com", editMode: false },
      ],
      newUser: { name: "", email: "" },
    };
  },
  methods: {
    addUser() {
      this.users.push(this.newUser);
      this.newUser = { name: "", email: "" };
    },
    removeUser(user) {
      this.users.splice(this.users.indexOf(user), 1);
    },
    toggleEditMode(user) {
      user.editMode = true;
    },
    saveUserEdit(user) {
      user.editMode = false;
    },
  },
};
</script>

<style>
</style>
