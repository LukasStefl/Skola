    <?php
    class Author {
        private $forname;
        private $surname;
        private $descriptionA;
        public function __construct(string $forname, string $surname, string $descriptionA) {
          $this->forname = $forname;
          $this->surname = $surname;
          $this->descriptionA = $descriptionA;
        }
        public function getForname() {
          return $this->forname;
        }
        public function getSurname() {
          return $this->surname;
        }
        public function getDescriptionA(){
          return $this->descriptionA;
        }
      }


    
    ?>