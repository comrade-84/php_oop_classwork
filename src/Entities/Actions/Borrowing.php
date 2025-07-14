<?php
namespace LibrarySystem\Actions;

use LibrarySystem\Entities\Book;
use LibrarySystem\Entities\Member;

class Borrowing {
    private $book;
    private $member;
    private $borrowDate;
    private $returnDate;

    public function __construct(Book $book, Member $member) {
        $this->book = $book;
        $this->member = $member;
        $this->borrowDate = date('Y-m-d');
    }

    public function returnBook() {
        $this->returnDate = date('Y-m-d');
        $this->member->returnBook($this->book);
    }

    public function getInfo() {
        return "{$this->member->getProfile()} borrowed '{$this->book->getDetails()}' on {$this->borrowDate}" .
               ($this->returnDate ? ", returned on {$this->returnDate}" : "");
    }
}
