<?php
namespace LibrarySystem\Entities;

require_once 'LibraryItem.php';

class Book extends LibraryItem {
    private $isbn;
    private $availableCopies;

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    public function setCopies($copies) {
        $this->availableCopies = $copies;
    }

    public function getDetails() {
        return "Book: {$this->title}, Author: {$this->author}, ISBN: {$this->isbn}, Copies: {$this->availableCopies}";
    }

    public function borrowItem() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            echo "Book borrowed successfully.\n";
        } else {
            echo "No copies available.\n";
        }
    }

    public function returnItem() {
        $this->availableCopies++;
        echo "Book returned successfully.\n";
    }
}
