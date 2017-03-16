<?php
  class User {
    public $username;
    public $email;
    public $password;

    function __construct($username, $email, $password) {
      $this -> username = $username;
      $this -> email = $email;
      $this -> password = $password;
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
