<?php
    class Book {
        var $title;
        var $author;
        var $pages;
    }

    $book1 = new Book;

    $book1->title = "Harry Potter";
    $book1->author = "JK Rowling";
    $book1->pages = 400;

    echo "<br>";
    echo $book1->title;

    $book2 = new Book;

    $book2->title = "Load of the Rings";
    $book2->author = "Tolkien";
    $book2->pages = 700;

    echo "<br>";
    echo $book2->pages;
?>