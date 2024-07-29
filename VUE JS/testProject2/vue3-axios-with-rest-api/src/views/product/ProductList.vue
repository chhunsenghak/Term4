<template>
    <div class="container mt-4">
        <h1 class="mb-4">Product List</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Color</th>
                    <th scope="col">Capacity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Generation</th>
                    <th scope="col">Screen Size</th>
                    <th scope="col">Year</th>
                    <th scope="col">CPU Model</th>
                    <th scope="col">Hard Disk Size</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="product in products" :key="product.id">
                    <td> {{ product._id? product._id : "N/A" }}</td>
                    <td>{{ product.title? product.title : "N/A" }}</td>
                    <td>{{ product.color? product.color : "N/A" }}</td>
                    <td>{{ product.capacity? product.capacity : "N/A" }}</td>
                    <td>{{ product.price? product.price : "N/A" }}</td>
                    <td>{{ product.generation? product.generation : "N/A" }}</td>
                    <td>{{ product.screenSize? product.screenSize : "N/A" }}</td>
                    <td>{{ product.year? product.year : "N/A" }}</td>
                    <td>{{ product.year? product.cpu : "N/A" }}</td>
                    <td>{{ product.hardDisk? product.hardDisk : "N/A" }}</td>
                    <td>{{ product.description }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>



<script>
import axios from "axios";
export default {
    name: "product_api",
    data() {
        return {
            products: []
        }
    },
    mounted() {
        this.fetchProducts();
    },
    methods: {
        async fetchProducts() {
            try {
                const response = await axios.get("https://fakestoreapiserver.reactbd.com/products");
                this.products = response.data;
                // console.log(response.data);
            } catch (e) {
                console.log(e);
            }
        }
    }
}
</script>

<style></style>