<!DOCTYPE html>
<html>
<head>
	<title>Table with Database</title>
</head>
<body>
<table>
	<tr>
		<th>DATE</th>
		<th>AIRLINE</th>
		<th>FLIGHT NUMBER</th>
		<th>ORIGIN AIRPORT</th>
		<th>DESTINATION AIRPORT</th>
		<th>DEPARTURE TIME</th>
		<th>DEPARTURE DELAY</th>
		<th>AIRTIME</th>
		<th>DISTANCE</th>
		<th>ARRIVAL TIME</th>
		<th>ARRIVAL DELAY</th>
	</tr>
	<?php
		$conn = mysqli_connect('localhost','root','y@c3iU6GhIY?','csv_db');
		if ($conn-> connect_error){
			die("Connection Failed:". $conn-> connect_error);
		}
	$sql = "SELECT TE, AIRLINE, FLIGHT_NUM, ORIGIN_AIRPORT, DESTINATION_AIRPORT,
			DEPARTURE_TIME, DEPARTURE_DELAY, AIR_TIME
			DISTANCE, ARRIVAL_TIME, ARRIVAL_DELAY from flights";
	$result = $conn-> query($sql);
	
	if ($result-> num_rows > 0){
		while($row = $result-> fetch_assoc()){
			echo "<tr><td>". $row["TE"] .
				 "</td><td>". $row["AIRLINE"] .
				 "</td><td>". $row["FLIGHT_NUM"] .
				 "</td><td>". $row["ORIGIN_AIRPORT"] .
				 "</td><td>". $row["DESTINATION_AIRPORT"] .
				 "</td><td>". $row["DEPARTURE_TIME"] .
				 "</td><td>". $row["DEPARTURE_DELAY"] .
				 "</td><td>". $row["AIR_TIME"] .
				 "</td><td>". $row["DISTANCE"] .
				 "</td><td>". $row["ARRIVAL_TIME"] .
				 "</td><td>". $row["ARRIVAL_DELAY"] .
				 "</td></tr>";
		}
		echo "</table>";
	}
	else{
		echo "0 result";
	}
	$conn-> close();
	?>
</table>
</body>
</html>