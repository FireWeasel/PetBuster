<?php
	include "../entities/post.php";

	class DBConnection {

		public $servername;
		public $username;
		public $password;
		public $dbname;
		public $conn;

		function __construct() {
			$this->servername = "localhost";
			$this->username = "admin";
			$this->password = "admin";
			$this->dbname = "testDB";
			$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			if ($this->conn->connect_error) {
			    die("Connection failed: " . $this->conn->connect_error);
			}
		}

		function getConnection() {
			return $this->conn;
		}

		function getAllPosts() {
			$sql = "SELECT * FROM POSTS;";
			$result = $this->conn->query($sql);
			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
							$posts[] = new Post($row["title"], $row["description"], $row["author"]);
			    }
			}
			return $posts;
		}

		function getPost($id) {
			$sql = "SELECT * FROM POSTS WHERE id= " . $id . ";";
			return $this->conn->query($sql);
		}

		function __destruct() {
			$conn->close();
		}
	}
?>
