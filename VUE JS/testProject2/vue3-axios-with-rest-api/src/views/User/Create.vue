<template>
    <div class="container mt-4">
        <h1 class="mb-4">Create User</h1>
        <Form :validation-schema="userSchema" @submit="createUser" v-slot="{ errors }">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <Field name="username" type="text" class="form-control" id="username" v-model="user.username"
                    :style="{ borderColor: errors && errors['username'] ? 'red' : '' }" validateOnInput />
                <ErrorMessage name="username" class="text-danger" />
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <Field name="age" type="number" class="form-control" id="age" v-model="user.age"
                    :style="{ borderColor: errors && errors['age'] ? 'red' : '' }" validateOnInput />
                <ErrorMessage name="age" class="text-danger" />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <Field name="email" type="email" class="form-control" id="email" v-model="user.email"
                    :style="{ borderColor: errors && errors['email'] ? 'red' : '' }" validateOnInput />
                <ErrorMessage name="email" class="text-danger" />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <Field name="password" type="password" class="form-control" id="password" v-model="user.password"
                    :style="{ borderColor: errors && errors['password'] ? 'red' : '' }" validateOnInput />
                <ErrorMessage name="password" class="text-danger" />
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <Field name="confirmPassword" type="password" class="form-control" id="confirmPassword"
                    v-model="user.confirmPassword"
                    :style="{ borderColor: errors && errors['confirmPassword'] ? 'red' : '' }" validateOnInput />
                <ErrorMessage name="confirmPassword" class="text-danger" />
            </div>
            <button type="submit" class="btn btn-primary">Create User</button>
        </Form>
    </div>
</template>

<script>
import { Form, Field, ErrorMessage } from "vee-validate";
import { userSchema } from "@/validation/validation-schema";
import axios from "axios";

export default {
    name: "create-user",
    components: {
        Form,
        Field,
        ErrorMessage,
    },
    data() {
        return {
            user: {
                username: "",
                age: "",
                email: "",
                password: "",
                confirmPassword: "",
            },
            userSchema: userSchema,
        };
    },
    methods: {
        async createUser() {
            try {
                const response = await axios.post(
                    "url",
                    this.user
                );
                if (response.data.success) {
                    this.$router.push("/users");
                }
            } catch (error) {
                console.error("Error creating user:", error);
            }
        },
    },
};
</script>