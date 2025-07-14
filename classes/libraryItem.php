<?php
class Library {
    private $books = [];
    private $members = [];

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function addMember($member) {
        $this->members[] = $member;
    }

    public function listBooks() {
        foreach ($this->books as $book) {
            echo $book->getDetails() . "\n";
        }
    }

    public function listMembers() {
        foreach ($this->members as $member) {
            echo $member->getProfile() . "\n";
        }
    }
}
