<?php
namespace LibrarySystem\Entities;

class Member {
    private $memberId;
    private $name;
    private $email;
    private $borrowedBooks = [];

    public function setMember($id, $name, $email) {
        $this->memberId = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function borrowBook($book) {
        $book->borrowItem();
        $this->borrowedBooks[] = $book;
    }

    public function returnBook($book) {
        $book->returnItem();
    }

    public function getProfile() {
        return "Member: {$this->name}, Email: {$this->email}";
    }
}
