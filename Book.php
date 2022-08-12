<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Book {
        protected $name;
        protected $description;
        protected $ISBN;
        protected $pagesCount;
        protected $author;
        function __construct($name, $description, $ISBN, $pagesCount) {
          $this->name = $name;
          $this->description = $description;
          $this->ISBN = $ISBN;
          $this->pagesCount = $pagesCount;
        }
          function getName() {
            return $this->name;
          }
          function getDescription() {
            return $this->description;
          }
          function getISBN() {
            return $this->ISBN;
          }
          function getPagesCount() {
            return $this->pagesCount;
          }
        }
    $book = new Book("Proti Všem", "Kniha", "978-80-907799-0-7", "195");
    echo $book->getName();
    echo "<br>";
    echo $book->getDescription();
    echo "<br>";
    echo $book->getISBN();
    echo "<br>";
    echo $book->getPagesCount();
    echo "<br>";
    ?>

</body>
</html>