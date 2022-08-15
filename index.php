<?php
//require 'vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekt</title>
</head>
<body>
    <h1>Projekt</h1>
    <br>
    <?php
    //php -S localhost:8080

//require 'vendor/autoload.php';
$authors = array();
$books = array();

require_once('Author.php');
require_once('Book.php');

$author = new Author("Alois", "Jirásek", "Spisovatel");
echo $author->getForname();
echo "<br>";
echo $author->getSurname();
echo "<br>";
echo $author->getDescriptionA();
echo "<br>";

$book = new Book("Proti Všem", "Kniha", "978-80-907799-0-7", "195", "František");
    echo $book->getName();
    echo "<br>";
    echo $book->getDescription();
    echo "<br>";
    echo $book->getISBN();
    echo "<br>";
    echo $book->getPagesCount();
    echo "<br>";
    echo $book->getAuthor();
?>
    
</body>
</html>