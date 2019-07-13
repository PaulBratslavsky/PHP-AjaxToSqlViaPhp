<?php 

  $host     = 'localhost';
  $user     = 'root';
  $password = 'root';
  $db_name  = 'jsonfromsql';

  $db = mysqli_connect( $host, $user, $password, $db_name );

  // Check connection
  if (mysqli_connect_errno()) {
    echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
    die;
  } else { 
    echo 'Success';
  }

  $query = 'SELECT * FROM users';
  
  $result = mysqli_query($db, $query) or die ('error' . mysqli_error($db));

  $myArray = array(); 
  
  while ( $row = mysqli_fetch_object( $result ) ) {
    $myArray[] = $row;
  };

  // echo json_encode($myArray);

?>