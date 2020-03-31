<?php
	class DbConnect {

			public function connect() {
			$conn = new mysqli("mysql", "root", ".sweetpwd.", "my_db");
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			return $conn;
		}
	}
