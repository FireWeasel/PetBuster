<?php
  class Post {
    private $id;
    private $title;
    private $description;
    private $author;
    private $type;
    private $calendar;
	private $image_location;

    function __construct($id, $title, $description, $author, $type, $calendar, $image_location) {
      $this -> id = $id;
      $this -> title = $title;
      $this -> description = $description;
      $this -> author = $author;
      $this -> type = $type;
      $this -> calendar = $calendar;
	    $this -> image_location = $image_location;
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
	function getImage(){
      return $this -> image_location;
    }
  }
?>
