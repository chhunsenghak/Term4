let tbody = document.querySelector('tbody');
let submitbtn = document.querySelector('#submit');
let container = document.querySelector('.container')
let url = "http://localhost:3000";
let store = "";
function displayUser() {
    axios.get(url + '/user').then((res, req) => {
        res.data.data.forEach(element => {
            let tr = document.createElement("tr");
            tr.innerHTML =
                `
            <td>${element.name}</td>
            <td>${element.age}</td>
            <td>${element.gender}</td>
            <td>
            <button onclick="viewUser('${element.id}')" class="btn btn-primary">View</button>
            <button onclick="editUser('${element.id}')" class="btn btn-warning">Edit</button>
            <button onclick="deleteUser('${element.id}')" class="btn btn-danger">Delete</button>
            </td> 
            `
            tbody.appendChild(tr);
        });
    })
}
function deleteUser(id) {
    axios.delete(url + '/user/' + id).then(
        location.reload()
    )
}
function viewUser(id) {
    axios.get(url + '/user/' + id).then((res, req) => {
        store = res.data.data;
        container.innerHTML += `
        <button type="button" class="edit btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#Update" style="display: none">
            Create User
        </button>
        <!-- Modal -->
        <div class="modal fade" id="Update" tabindex="-1" aria-labelledby="UpdateLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="UpdateLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username : </label>
                                <button class='btn mb-1' type="text"​ id="nameUpdate" name="username"></button>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <button class="btn mb-1" id="ageUpdate" name="age"></button>
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <button​ class="btn mb-1" id="genderUpdate" name="genderUpdate"></button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>`
        document.querySelector('.edit').click();
        document.querySelector('#nameUpdate').textContent = store.name;
        document.querySelector('#ageUpdate').textContent = store.age;
        document.querySelector('#genderUpdate').textContent = store.gender;
    })
}
function editUser(id) {
    axios.get(url + '/user/' + id).then((res, req) => {
        store = res.data.data;
        container.innerHTML += `
        <button type="button" class="edit btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#Update" style="display: none">
            Create User
        </button>
        <!-- Modal -->
        <div class="modal fade" id="Update" tabindex="-1" aria-labelledby="UpdateLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="UpdateLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text"​ class="form-control" id="nameUpdate" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="ageUpdate" name="age">
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="genderUpdate" name="genderUpdate">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="update" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>`
        document.querySelector('.edit').click();

        document.querySelector('#nameUpdate').value = store.name;
        document.querySelector('#ageUpdate').value = store.age;
        document.querySelector('#genderUpdate').value = store.gender;


        document.querySelector('#update').addEventListener('click', function (e) {
            let name = document.querySelector('#nameUpdate').value;
            let age = document.querySelector('#ageUpdate').value;
            let gender = document.querySelector('#genderUpdate').value;
            axios.put(url + '/user/' + id, { name: name, age: age, gender: gender }).then((res, req) => {
                console.log(res);
                console.log(req);
                location.reload();
            });
        });
    })

}

displayUser();

submitbtn.addEventListener('click', (e) => {
    e.preventDefault();
    let name = document.querySelector('#name').value;
    let age = document.querySelector('#age').value;
    let gender = document.querySelector('#gender').value;
    axios.post(url + '/user', { name: name, age: age, gender: gender }).then((res, req) => {
        console.log(res);
        console.log(req);
        location.reload();
    });
});