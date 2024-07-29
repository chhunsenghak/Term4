<template>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="user in users" :key="user.id">
                <td>{{ user.name }}</td>
                <td> {{ user.email }}</td>
                <td>{{ user.age }}</td>
                <td>
                    <button @click="userDetail(user)" class="btn btn-info btn-sm">Details</button>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>

export default {
    name: 'UserTable',
    props: ["users"],
    methods: {
        userDetail(user) {
            this.$emit("user-detail", user);
        }
    },
};
</script>

<style>
.table {
    width: 100%;
    margin-top: 20px;
}
</style>