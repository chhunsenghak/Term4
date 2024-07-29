// TODO
import { Publisher } from "./Publisher";
import { Author } from "./Author";
export class Book {
    private title: string;
    private year: string;
    private publisher: Publisher[] = [];
    private authours : Author[] = [];
    constructor(title: string, year: string) {
        this.title = title;
        this.year = year;
    }
    public addAuthor(author: Author) {
        this.authours.push(author);
    }
    public setPublisher(publisher: Publisher) {
        this.publisher.push(publisher)
    }
}