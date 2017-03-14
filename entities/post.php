<?php
  class Post {
    private $title;
    private $description;
    private $author;

    function __construct($title, $description, $author) {
      $this -> title = $title;
      $this -> description = $description;
      $this -> author = $author;
    }

    function getTitle() {
      return $this -> title;
    }

    function getDescription() {
      return $this -> description;
    }

    function getAuthor() {
      return $this -> author;
    }
  }
?>
