

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

class Author {
  public $forname;
  public $surname;
  public $descriptionA;
  function __construct($forname, $surname, $descriptionA) {
    $this->forname = $forname;
    $this->surname = $surname;
    $this->descriptionA = $descriptionA;
  }
  function get_forname() {
    return $this->forname;
  }
  function get_surname() {
    return $this->surname;
  }
  function get_descriptionA(){
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
    function get_name() {
      return $this->name;
    }
    function get_description() {
      return $this->description;
    }
    function get_ISBN() {
      return $this->ISBN;
    }
    function get_pagesCount() {
      return $this->pagesCount;
    }
  }

$author = new Author("Alois", "Jirásek", "Spisovatel");
echo $author->get_forname();
echo "<br>";
echo $author->get_surname();
echo "<br>";
echo $author->get_descriptionA();
echo "<br>";
echo "<br>";

$book = new Book("Proti Všem", "Kniha", "978-80-907799-0-7", "195");
echo $book->get_name();
echo "<br>";
echo $book->get_description();
echo "<br>";
echo $book->get_ISBN();
echo "<br>";
echo $book->get_pagesCount();
echo "<br>";



    ?>
    
</body>
</html>