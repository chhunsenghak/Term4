// TODO
//import all file here
import { Author } from "./Author";
import { Book } from "./Book";
import { Library } from "./Library";
import { Publisher } from "./Publisher";

// create 3 authors
let author1 = new Author("Him");
let author2 = new Author("Yon");
let author3 = new Author("Meangheang");

//crate 3 publisher
let publisher1 = new Publisher("Leap", "borea sola");
let publisher2 = new Publisher("Roth", "borea vimean nak tah thmey");
let publisher3 = new Publisher("Rith", "borea srey jren");

//create 3 book
let book1 = new Book("Tiger on the mountain", "1930");
let book2 = new Book("How to win friend and influnence people", "2000");
let book3 = new Book("How to cook food khmer", "2024");

//add authors to book
book1.addAuthor(author1);
book2.addAuthor(author2);
book3.addAuthor(author3);

//add publisher to book
book1.setPublisher(publisher1)
book2.setPublisher(publisher2)
book3.setPublisher(publisher3)

//create one library
let triel = new Library("Trial Library", "Borea sora");

//add books to triel
triel.addBook(book1)
triel.addBook(book2)
triel.addBook(book3)

triel.getbook(author1)
triel.getBooks(publisher1)