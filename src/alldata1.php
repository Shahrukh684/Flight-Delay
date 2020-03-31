<?php

mysql_connect('localhost', 'root','y@c3iU6GhIY?','csv_db');


mysql_select_db('csv_db');

$sql='SELECT * FROM flights';

$records=mysql_query($sql);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>All Datas</title>
  </head>
  <body>
    <table width='600' border='1' cellpadding='1' cellspacing='1'>
      <tr>
        <th>Date</th>
        <th>Airline</th>
        <th>Origin Aiport</th>
        <th>Destination Airport</th>

        <?php
          while ($flights=$records->mysql_fetch_assoc()){
            echo "<tr>";
            echo "<td>".$flights['AIRLINE']."</td>";
            echo "</tr>";
          }
        ?>
      </tr>
    </table>
  </body>
</html>
