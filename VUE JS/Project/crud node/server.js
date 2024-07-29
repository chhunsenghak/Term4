const express = require('express');
const app = express();
const { writeFileSync, readFileSync, write } = require('fs');
const { v4: uuidv4 } = require('uuid');
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(express.static('public'));
let students = JSON.parse(readFileSync("database.json"));
function save(data) {
    writeFileSync('database.json', JSON.stringify(data));
}

app.listen(3000, () => console.log('http://localhost:3000'));

app.get('/', (req, res) => {
    res.send('Welcome to the University');
});

app.get('/user', (req, res) => {
    res.send({ 'message': 'get all users', "data": students });
});
app.get('/user/:id', (req, res) => {
    const id = req.params.id;
    const index = students.findIndex(student => student.id === id);
    res.send({ 'message': 'request success', "data": students[index] });
});


app.post('/user', (req, res) => {
    const newStudent = {
        id: uuidv4(),
        name: req.body.name,
        age: req.body.age,
        gender: req.body.gender,
    };
    students.push(newStudent);
    save(students);
    res.send({ 'msg': 'successfully to create', 'data': newStudent });
});

app.put('/user/:id', (req, res) => {
    const id = req.params.id;
    const name = req.body.name;
    const age = req.body.age;
    const gender = req.body.gender;
    const index = students.findIndex(student => student.id === id);
    students[index].name = name;
    students[index].age = age;
    students[index].gender = gender;
    save(students);
    res.send({ 'msg': 'successfully to update', 'data': students[index] });
})

app.delete('/user/:id', (req, res) => {
    const id = req.params.id;
    const index = students.findIndex(student => student.id === id);
    students.splice(index, 1);
    save(students);
    res.send({ 'msg': 'success to delete student' });
});