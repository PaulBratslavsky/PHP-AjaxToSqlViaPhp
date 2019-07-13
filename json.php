<?php 
include 'database.php';

header('Content-type: application/json');

$myArray = array(
  "uesr1"=>[
    "firstName"=>"Paul",
    "lastName"=>"Brats",
    "age"=>39
  ],
  "uesr2"=>[
    "firstName"=>"Marissa",
    "lastName"=>"Brats",
    "age"=>19
  ]
);

echo json_encode($myArray);

?>

