<?php
  class Post {
    private $id;
    private $title;
    private $description;
    private $author;
    private $type;
    private $calendar;

    function __construct($id, $title, $description, $author) {
      $this -> id = $id;
      $this -> title = $title;
      $this -> description = $description;
      $this -> author = $author;
    }

    function getID() {
      return $this -> id;
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

    function getType() {
      return $this -> type;
    }

    function getDate()
    {
      return $this -> calendar;
    }
  }
?>
