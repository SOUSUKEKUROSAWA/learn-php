<?php
    class Article {
        var $title;
        var $author;
        var $pages;

        function __construct($cTitle, $cAuthor, $cPages) {
            $this->title = $cTitle;
            $this->author = $cAuthor;
            $this->pages = $cPages;
        }
    }

    $article1 = new Article("Harry Potter", "JK Rowling", 400);
    echo $article1->title;

    $article2 = new Article("Load of the Rings", "Tolkien", 700);
    echo "<br>";
    echo $article2->title;
?>