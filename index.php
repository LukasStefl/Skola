

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
/*

    class Human {
        public $name;
        public $nationality;
        public $gender;
        public $height;
        public $weight;
      
        function __construct($name, $nationality, $gender, $height, $weight) {
          $this->name = $name;
          $this->nationality = $nationality;
          $this->gender = $gender;
          $this->height = $height;
          $this->weight = $weight;

        }
        function __destruct() {
          echo "The Human is named {$this->name} and he is {$this->nationality} and his gender is {$this->gender}. He is {$this->height} tall and he weights {$this->weight}.";
        }
      }
      
      $Honza = new Human("Honza", "Czech", "Male", "185cm", "67kg");
*/
require 'vendor/autoload.php';
class Author {
  public $forname;
  public $surname;
  public $descriptionA;
  function __construct($forname, $surname, $descriptionA) {
    $this->forname = $forname;
    $this->surname = $surname;
    $this->descriptionA = $descriptionA;
  }
  function getforname() {
    return $this->forname;
  }
  function getsurname() {
    return $this->surname;
  }
  function getdescriptionA(){
    return $this->descriptionA;
  }
}



class Book {
  protected $name;
  protected $description;
  protected $ISBN;
  protected $pagesCount;
  function __construct($name, $description, $ISBN, $pagesCount) {
    $this->name = $name;
    $this->description = $description;
    $this->ISBN = $ISBN;
    $this->pagesCount = $pagesCount;
  }
    function getname() {
      return $this->name;
    }
    function getdescription() {
      return $this->description;
    }
    function getISBN() {
      return $this->ISBN;
    }
    function getpagesCount() {
      return $this->pagesCount;
    }
  }

$author = new Author("Alois", "Jirásek", "Spisovatel");
echo $author->getforname();
echo "<br>";
echo $author->getsurname();
echo "<br>";
echo $author->getdescriptionA();
echo "<br>";
echo "<br>";

$book = new Book("Proti Všem", "Kniha", "978-80-907799-0-7", "195");
echo $book->getname();
echo "<br>";
echo $book->getdescription();
echo "<br>";
echo $book->getISBN();
echo "<br>";
echo $book->getpagesCount();
echo "<br>";



    ?>
    
</body>
</html>