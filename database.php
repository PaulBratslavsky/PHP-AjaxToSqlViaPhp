<?php 

  $host     = 'localhost';
  $user     = 'root';
  $password = 'root';
  $db_name  = 'jsonfromsql';

  $db = new mysqli( $host, $user, $password, $db_name );

  //Check connection was successful
  if ($db->connect_errno) {
    printf("Failed to connect to database");
    exit();
 }


?>