<?php
  require './connect.php';

	function loadAuthors() {
		$db = new DbConnect;
		$conn = $db->connect();

    $sql = "SELECT DISTINCT AIRLINE FROM flights1";

		$airline = $conn->query($sql);
		return $airline;
	}

  function getDelay(){
    if($_POST['authors'] != null) {
      $db1 = new DbConnect;
      $conn1 = $db1->connect();
      $airline = $_POST['authors'];

      $sql1 = "SELECT DEPARTURE_DELAY FROM flights1 where AIRLINE=$airline";

  		$airline1 = $conn1->query($sql1);
  		return $airline1;
    }
  }
