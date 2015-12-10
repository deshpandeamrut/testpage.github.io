<?php 
//connecting the database server
  $con = mysql_connect("localhost","amrut","GE1fr]}y@}68");
  
//check if connection is established . if not print an error message
  if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
  
//connecting to the database
  mysql_select_db("IonicApp", $con);
  ?>
  