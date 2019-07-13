<?php 
include 'database.php';

//Fetch rows from actor table
$result = $db->query("SELECT * FROM users");

//Initialize array variable
 $dbdata = array();

//Fetch into associative array
 while ( $row = $result->fetch_assoc())  {
 $dbdata[]=$row;
 }

//Print array in JSON format
echo json_encode($dbdata);


?>

