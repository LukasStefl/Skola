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
        function __construct($name, $description, $ISBN, $pagesCount, $author) {
          $this->name = $name;
          $this->description = $description;
          $this->ISBN = $ISBN;
          $this->pagesCount = $pagesCount;
          $this->author = $author;
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
          function getAuthor() {
            return $this->author;
          }
        }
    ?>

</body>
</html>