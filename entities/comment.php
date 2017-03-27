<?php
  class Comment {
    private $id;
    private $body;
    private $time;
    private $author;

    function __construct($id, $body, $time, $author) {
      $this -> id = $id;
      $this -> body = $body;
      $this -> time = $time;
      $this -> author = $author;
    }

    function getID() {
      return $this -> id;
    }

    function getBody() {
      return $this -> body;
    }

    function getTime() {
      return $this -> time;
    }

    function getAuthor() {
      return $this -> author;
    }
  }
?>
