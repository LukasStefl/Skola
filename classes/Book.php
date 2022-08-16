    <?php
    class Book {
        private string $name;
        private string $description;
        private string $ISBN;
        private int $pagesCount;
        private Author $author;
        public function __construct(string $name, string $description, string $ISBN, int $pagesCount, Author $author) {
          $this->name = $name;
          $this->description = $description;
          $this->ISBN = $ISBN;
          $this->pagesCount = $pagesCount;
          $this->author = $author;
        }
          public function getName() {
            return $this->name;
          }
          public function getDescription() {
            return $this->description;
          }
          public function getISBN() {
            return $this->ISBN;
          }
          public function getPagesCount() {
            return $this->pagesCount;
          }
          public function getAuthor() {
            return $this->author;
          }
        }
    ?>
