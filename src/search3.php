<?php
 $hostname ="localhost";
 $username ="root";
 $dbname ="csv_db";
 $password ="y@c3iU6GhIY?";
 $table ="flights";
 $columnname ="AIRLINE";

 mysqli_connect ($hostname, $username, $password) OR () die ("Unable to connect to db");
 mysqli_select_db($dbname);
 $query="SELECT * FROM $table";
 $result = mysqli_query($query);

 ?>

<!DOCTYPE html>
<html>
<head>
<center>
	<h1>Dropdown Menu</h1>
	<h2>MySQL Server</h2>
<title></title>
<hr/>
</head>
<body>
	<select>
	<option> Select  Airline</option>
	<?php
				if($result)
				{
					while($row = mysqli_fetch_array($result))
					{
						$AIRLINE=$row["columnname"];
						echo "<option>$AIRLINE<br></option>";
					}
				}
	 ?>
	</select>
</center>
</body>
</html>
