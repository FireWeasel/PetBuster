<?php
  class User {
    public $id;
    public $username;
    public $email;
    public $password;

    function __construct($id, $username, $email, $password) {
      $this -> id = $id;
      $this -> username = $username;
      $this -> email = $email;
      $this -> password = $password;
    }

    function getId() {
      return $this -> id;
    }
    
    function getUsername() {
      return $this -> username;
    }

    function getEmail() {
      return $this -> email;
    }

    function getPassword() {
      return $this -> password;
    }
  }
?>
