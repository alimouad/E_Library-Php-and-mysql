<?php

namespace Models;

class Book {
    public int $id;
    public string $title;
    public string $author;
    public string $year;
    public string $description;
    public string $status ;

    public function __construct($id, $title, $author,$year, $description,$status) {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->description = $description;
        $this->status = $status;
    }
}