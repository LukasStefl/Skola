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
  protected $forename;
  protected $surname;
  protected $description;
  function __construct($forename, $surname, $description) {
    $this->forname = $forename;
    $this->surname = $surname;
    $this->description = $description;
  }
  function get_forname() {
    return $this->forename;
  }
  function get_surname() {
    return $this->surname;
  }
  function get_description(){
    return $this->description;
  }
}



class Book {
  protected $name;
  protected $description;
  protected $ISBN;
  protected $pagesCount;
  //$author = new Author("Jan", "Jiří", "Je moc hodný");


}
 
    ?>
</body>
</html>