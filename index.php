<?php
require 'vendor/autoload.php';

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




$authors[] = new Author("Alois", "Jirásek", "Spisovatel");
$authors[] = new Author("Jo", "Nesbø", "Spisovatel");
$authors[] = new Author("Karel", "Čapek", "Spisovatel");

$books[] = new Book("Proti Všem", "Kniha", "978-80-907799-0-7", "195", $authors[0]);
$books[] = new Book("Sněhulák", "Pohádka", "978-80-87497-45-6", "520", $authors[1]);
$books[] = new Book("Povídky z Jedné Kapsy", "Povídka", "145-99-87564-55-8", "304", $authors[2]);
$books[] = new Book("Bratrstvo", "Kniha", "978-80-907799-0-7", "195", $authors[0]);
$books[] = new Book("Povídky z Druhé Kapsy", "Povídka", "165-45-87114-75-2", "345", $authors[2]);

for ($i=0; $i < count($books); $i++) { 
    echo $i + 1;
    echo "<br>";
    echo $books[$i]->getName();
    echo "<br>";
    echo $books[$i]->getISBN();
    echo "<br>";
    echo $books[$i]->getPagesCount();
    echo "<br>";
    echo $books[$i]->getAuthor()->getForname();
    echo " ";
    echo $books[$i]->getAuthor()->getSurname();
    echo "<br>";
    echo "<br>";
    
}

?>
    
</body>
</html>