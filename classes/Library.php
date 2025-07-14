<?php
class LibraryItem {
    protected $title;
    protected $author;

    public function setTitle($title) {
        $this->title = $title;
    }
    public function setAuthor($author) {
        $this->author = $author;
    }
    public function getDetails() {
        return "Title: {$this->title}, Author: {$this->author}";
    }

    public function borrowItem() {
        echo "This item cannot be borrowed.\n";
    }

    public function returnItem() {
        echo "This item cannot be returned.\n";
    }
}
