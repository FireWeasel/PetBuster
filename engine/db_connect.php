<?php
	include "../entities/post.php";

	class DBConnection {

		public $servername;
		public $username;
		public $password;
		public $dbname;
		public $conn;

		function __construct() {
			$this->servername = "studmysql01.fhict.local";
			$this->username = "dbi356722";
			$this->password = "dbi356722";
			$this->dbname = "dbi356722";
			$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			if ($this->conn->connect_error) {
			    die("Connection failed: " . $this->conn->connect_error);
			}
		}

		function getConnection() {
			return $this->conn;
		}

		function getAllPosts() {
			$sql = "SELECT * FROM POST;";
			$result = $this->conn->query($sql);
			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
							$posts[] = new Post($row["title"], $row["description"], $row["author"]);
			    }
			}
			return $posts;
		}

		function getPost($id) {
			$sql = "SELECT * FROM POST WHERE id= " . $id . ";";
			return $this->conn->query($sql);
		}

		function userSignUp($username, $email, $password) {
			$sql = "INSERT INTO USER(USERNAME, EMAIL, PASSWORD) VALUES (\"$username\",\"$email\",\"$password\");";
			return $this->conn->query($sql);
		}

		function getUser($id) {
			$sql = "SELECT * FROM USER WHERE id= " . $id . ";";
			return $this->conn->query($sql);
		}

		function __destruct() {
			$conn->close();
		}
	}
?>
