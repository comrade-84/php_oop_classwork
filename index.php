<?php
require 'classes/Library.php';
require 'classes/libraryItem.php';
require 'classes/Book.php';
require 'classes/Magazine.php';
require 'classes/Member.php';

$library = new Library();

// Book
$book1 = new Book();
$book1->setTitle("The Alchemist");
$book1->setAuthor("Paulo Coelho");
$book1->setIsbn("123456");
$book1->setCopies(2);

$book2 = new Book();
$book2 -> setTitle("the legendary ring");
$book2 -> setAuthor("jane paul");
$book2 -> setIsbn("123452");
$book2->setCopies(3);

// Magazine
$mag1 = new Magazine();
$mag1->setTitle("National Geographic");
$mag1->setAuthor("NatGeo Team");
$mag1->setIssueNumber(44);

$mag2 = new Magazine();
$mag2->setTitle("beniben jhon");
$mag2->setAuthor("teami Team");
$mag2->setIssueNumber(34);


// Member
$member1 = new Member();
$member1->setMember(1, "Alice", "alice@example.com");

$member2 = new Member();
$member2->setMember(2, "jhon", "jhon@example.com");
// Add to Library
$library->addBook($book1);
$library->addBook($mag1);
$library->addMember($member1);

$library->addBook($book2);
$library->addBook($mag2);
$library->addMember($member2);


// Display
echo "\n--- Library Books ---\n";
$library->listBooks();

echo "\n--- Library Members ---\n";
$library->listMembers();

echo "\n--- Borrow Book ---\n";
$member1->borrowBook($book1);

echo "\n--- Return Book ---\n";
$member1->returnBook($book1);

echo "\n--- Try to Borrow Magazine ---\n";
$mag1->borrowItem();



?>

