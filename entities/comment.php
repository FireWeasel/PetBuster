<?php
  class Comment {
    private $id;
    private $body;
    private $time;
    private $author;
    private $post_id;

    function __construct($id, $body, $time, $author, $post_id) {
      $this -> id = $id;
      $this -> body = $body;
      $this -> time = $time;
      $this -> author = $author;
      $this -> post_id = $post_id;
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

    function getPostId() {
      return $this -> post_id;
    }
  }
?>
