<?php
	$keyword = strval($_POST['query']);
	$search_param = "{$keyword}%";
	$conn =new mysqli('localhost','root','y@c3iU6GhIY?','csv_db');

	$sql = $conn->prepare("SELECT DISTINCT AIRLINE FROM flights WHERE AIRLINE LIKE ?");
	$sql->bind_param("s",$search_param);
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$countryResult[] = $row["AIRLINE"];
		}
		echo json_encode($countryResult);
	}
	$conn->close();
?>
