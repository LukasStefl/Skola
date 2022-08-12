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
    class Author {
        public $forname;
        public $surname;
        public $descriptionA;
        function __construct($forname, $surname, $descriptionA) {
          $this->forname = $forname;
          $this->surname = $surname;
          $this->descriptionA = $descriptionA;
        }
        function getForname() {
          return $this->forname;
        }
        function getSurname() {
          return $this->surname;
        }
        function getDescriptionA(){
          return $this->descriptionA;
        }
      }
      $author = new Author("Alois", "Jirásek", "Spisovatel");
echo $author->getForname();
echo "<br>";
echo $author->getSurname();
echo "<br>";
echo $author->getDescriptionA();
echo "<br>";
echo "<br>";

    
    ?>
</body>
</html>