<?php
  $username = $POST['username']
  $password = $POST['password']

  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);

  mysql_connect("localhost", "root", "y@c3iU6GhIY?");
  mysql_select_db("login");

  $result = mysql_query("select * from users where username = '$username' and password = '$password')
            or die("Failed to connect to query".mysqlerror());
  $row = mysql_fetch_array($result);
  if($row['username'] == $username && $row['password'] == $password){
    echo "Log in Successful! Welcome".$row['username'];
  } else {
    echo "failed to login";
  }
?>
