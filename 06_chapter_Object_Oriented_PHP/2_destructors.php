<?php
class Book
{
    private $title;
    private $isbn;
    private $copies;

    public function __construct($isbn)
    {
        echo "<p>Book Class instance created</p>";
    }

    function __destruct()
    {
                echo "<p>Book Class instance destoryed.</p>";
 
    }
}

$book = new Book("0615303889");