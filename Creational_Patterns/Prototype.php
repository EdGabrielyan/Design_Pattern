<?php

interface Prototype
{
    public function clone(): Prototype;
}

class Book implements Prototype
{
    public string $title;
    public string $author;

    public function __construct(string $title, string $author)
    {
        $this->title  = $title;
        $this->author = $author;
    }

    public function clone(): Prototype
    {
        return clone $this;
    }

    public function display(): void
    {
        echo "Book: {$this->title}, Author: {$this->author}\n";
    }
}

$originalBook = new Book("Design Patterns", "Erich Gamma");
$originalBook->display();

$clonedBook = $originalBook->clone();
$clonedBook->title = "Prototype Pattern in Action";
$clonedBook->display();

