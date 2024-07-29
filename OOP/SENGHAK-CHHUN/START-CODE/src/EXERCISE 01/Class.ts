import { Student } from "./Student";
export class Class {
    private name: string;
    private classMonitor: Student[] = [];
    private students: Student[] = [];
    constructor(name: string) {
        this.name = name;
    }
    addClassMonitor(student: Student) {
        this.classMonitor.push(student)
    }
    addStudent(student: Student) {
        this.students.push(student);
    }
}