<?php
include("../../db/connect_database.php");

//Finds a product based on the ID.
$name = $_GET['id'];

$query = "SELECT * FROM contactForm WHERE id = '$name'";

$result = $database->query($query) OR die("Failed query $query");
echo $database->error;

$output = array();
while($row = mysqli_fetch_assoc($result))
{
  $contactInfo = array  (	"id" => $row['id'],
  "fullname" => $row['fullname'],
  "email" => $row['email'],
  "telephone" => $row['telephone'],
  "comment" => $row['comment'],
  "currentDate" => $row['currentDate'],

);
array_push($output,$contactInfo);
}

$json_ouput = json_encode($output);
echo $json_ouput;
?>
