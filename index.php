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


require_once('Author.php');
echo "<br>";
require_once('Book.php');

$authors = new Author("Alois", "Jirásek", "Spisovatel");
echo $authors->getForname();
echo "<br>";
echo $authors->getSurname();
echo "<br>";
echo $authors->getDescriptionA();
echo "<br>";
echo "<br>";
$books = new Book("Proti Všem", "Kniha", "978-80-907799-0-7", "195", "František");
    echo $books->getName();
    echo "<br>";
    echo $books->getDescription();
    echo "<br>";
    echo $books->getISBN();
    echo "<br>";
    echo $books->getPagesCount();
    echo "<br>";
    echo $books->getAuthor();
?>
    
</body>
</html>