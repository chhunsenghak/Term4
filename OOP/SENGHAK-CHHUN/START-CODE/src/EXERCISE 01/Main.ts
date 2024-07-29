//import class Student, class Class, class School
import { Student } from "./Student";
import { Class } from "./Class";
import { School } from "./School";

//create student
let student1 = new Student("Him", 18, "0963955091");
let student2 = new Student("Yon", 17, "0716629129");
let student3 = new Student("Heang", 16, "0964601501");

//create class
let class1 = new Class("B13");
let class2 = new Class("B12");
let class3 = new Class("B14");

//create school
let mySchool = new School("PNC");

//add class to school
mySchool.addClass(class1)
mySchool.addClass(class2)
mySchool.addClass(class3)

//add classMonitor to class
class1.addClassMonitor(student1)
class1.addClassMonitor(student2)

//add student to class
class1.addStudent(student3)
