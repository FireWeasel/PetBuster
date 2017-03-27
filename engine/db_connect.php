<?php
	include "../entities/post.php";
	include_once "../entities/user.php";

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

		function getAllPosts($type) {
			$sql = "SELECT * FROM POST;";
			if($type === "Lost")
			{
				$sql = "SELECT * FROM POST WHERE type=" ."\"$type\"".";";
			} elseif ($type === "Found") {
				$sql = "SELECT * FROM POST WHERE type=" ."\"$type\" ". ";";
			}
			$result = $this->conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$posts[] = new Post($row["id"],$row["title"], $row["description"], $row["author"], $row["type"], $row["calendar"]);
				}
			}
			return $posts;
		}

		function getPost($id) {
			$sql = "SELECT * FROM POST WHERE id= " . $id . ";";
			return $this->conn->query($sql);
		}

		function getUserPost($username) {
			$sql = "SELECT * FROM POST WHERE author=" ."\"$username\"".";";
      $result = $this->conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$posts[] = new Post($row["id"],$row["title"], $row["description"], $row["author"], $row["type"], $row["calendar"]);
				}
			}
			return $posts;

		}

		function addingPost($title, $description, $author,$type,$date) {
			$sql = "INSERT INTO POST(TITLE,DESCRIPTION,AUTHOR,TYPE,CALENDAR) VALUES (\"$title\",\"$description\",\"$author\",\"$type\",\"$date\");";
			return $this->conn->query($sql);
		}

		function userSignUp($username, $email, $password) {
			$sql = "INSERT INTO USER(USERNAME, EMAIL, PASSWORD) VALUES (\"$username\",\"$email\",\"$password\");";
			return $this->conn->query($sql);
		}

		function getUser($id) {
        $sql = "SELECT * FROM USER WHERE id= " . $id . ";";
        return $this->conn->query($sql)->fetch_assoc();
    }

    function getUserByUsername($username) {
        $sql = 'SELECT * FROM USER WHERE username = \''.$username.'\';';
        return $this->conn->query($sql)->fetch_assoc();
    }

		function getUsers() {
			$sql = "SELECT * FROM USER;";
			$result = $this->conn->query($sql);
				if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
							$users[] = new User($row["id"],$row["username"], $row["email"], $row["password"]);
			    }
			}
			return $users;
		}

		function getUserHashedPassword($username) {
			$sql = 'SELECT password FROM USER WHERE username = \''.$username.'\';';
			return $this->conn->query($sql)->fetch_assoc()["password"];
		}

		function __destruct() {
			$this -> conn->close();
		}
	}
?>
