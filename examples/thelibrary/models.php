<?php
  abstract class BaseLibraryModel
  {
    public $title;
    public $genre;
    public $isBorrowed = false;

    public function borrow() {
      if(!$this->isBorrowed) {
        $this->isBorrowed = true;
      }
    }
  }

  class BookModel extends BaseLibraryModel
  {
    public $author;
    public $pageCount;

    public function __construct($title, $author, $genre, $pageCount, $isBorrowed) {
      $this->title = $title;
      $this->author = $author;
      $this->genre = $genre;
      $this->pageCount = $pageCount;
      $this->isBorrowed = $isBorrowed;
    }
  }

  class CDModel extends BaseLibraryModel
  {
    public $artist;
    public $length;

    public function __construct($title, $artist, $genre, $length, $isBorrowed) {
      $this->title = $title;
      $this->artist = $artist;
      $this->genre = $genre;
      $this->length = $length;
      $this->isBorrowed = $isBorrowed;
    }
  }

  class MovieModel extends BaseLibraryModel
  {
    public $director;
    public $actors;
    public $length;

    public function __construct($title, $director, $actors, $genre, $length, $isBorrowed) {
      $this->title = $title;
      $this->director = $director;
      $this->actors = $actors;
      $this->genre = $genre;
      $this->length = $length;
      $this->isBorrowed = $isBorrowed;
    }
  }

?>