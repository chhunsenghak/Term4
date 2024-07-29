// TODO
import { Book } from "./Book";
import { Author } from "./Author";
export class Library {
    private name: string;
    private address: string;
    private books: Book[] = [];
    constructor(name: string, address: string) {
        this.name = name;
        this.address = address;
    }
    public addBook(abook) {
        this.books.push(abook)
    }
    public getbook(author: Author) {
        this.books.forEach(element => {
            element['authours'].forEach(authorBook => {
                if (authorBook['name'] == author['name']){
                    console.log(element)
                }
            });
        });
    }
    public getBooks(apublishPulblish) {
        this.books.forEach(element => {
            element['authours'].forEach(authorBook => {
                if (authorBook['name'] == apublishPulblish['name']){
                    console.log(element)
                }
            });
        });
    }
}
