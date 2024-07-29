<template>
    <div v-if="selectedUser" class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">{{ selectedUser.name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ selectedUser.email }}</p>
            <p class="card-text"><strong>Age:</strong> {{ selectedUser.age }} </p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'UserCard',
    props: ["selectedUser"]
};
</script>

<style>
.card {
    margin-top: 1rem;
}
</style>