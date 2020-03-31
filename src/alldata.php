<?php
  $Airline="";
  $ArrivalAirport="";
  $DestinationAirpot="";

  if(isset($_POST)['Find']))
  {
    $hostname="localhost";
    $dbname="csv_db";
    $username="root";
    $password="y@c3iU6GhIY?";

    $conn=new PDO("mysql:$hostname;dbname=$dbname", $username,$password);
    $Airline=$_POST['Airline'];
    $sqlquery="SELECT * FROM employee where AIRLINE=:AIRLINE";
    $result=$conn->prepare($sqlquery);
    $executerecord=$result->execute(array(":Airline"=$Airline));
    if($executerecord)
    {
      if($result->rowCount()>0)
      {
        foreach($result as $row)
        {
          $Airline=$row['AIRLINE'];
          $ArrivalAirport=$row['ORIGIN_AIRPORT'];
          $DestinationAirport=$row['DEPARTURE_AIRPORT'];

        }
      else {
        echo "sorry nothing found";
      }
      }
    }
  }


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.html" method="post">
    <center>
      <h1> Searching the records </h1>
      <h2> mysql </h2>
      Enter Airline Name: <input type='text' name='Airline'>
      <input type='submit' name='Find' value='Search Airline'>
      <hr/>
      <table border='1's>
        <tr>
          <td> Airline Name : <b><?php echo $Airline; ?></b></t>
          <td> Origin Airport : <b><?php echo $ArrivalAirport; ?></b></t>
          <td> Destination Airport : <b><?php echo $DestinationAirport; ?></b></t>
    </center>
    </form>

  </body>
</html>
