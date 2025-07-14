<?php
require_once 'LibraryItem.php';

class Magazine extends LibraryItem {
    private $issueNumber;

    public function setIssueNumber($issueNumber) {
        $this->issueNumber = $issueNumber;
    }

    public function getDetails() {
        return "Magazine: {$this->title}, Author: {$this->author}, Issue: {$this->issueNumber}";
    }

    public function borrowItem() {
        echo "Magazines cannot be borrowed.\n";
    }

    public function returnItem() {
        echo "Magazines do not support return.\n";
    }
}
