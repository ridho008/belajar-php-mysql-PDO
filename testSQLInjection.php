<?php

require __DIR__ . '/getConnection.php';

$conn = getConnection();

// mengatasi SQL Injection, agar inputan yang di masukan user sembarangan (huruf uniq akan di filter)
$username = $conn->quote("surya'; #");
$password = $conn->quote("surya");

$sql = $conn->prepare("SELECT * FROM users WHERE username = $username AND password = $password");
// echo $sql;
$statement = $conn->query($sql);

$success = false;
$findUser = null;
foreach($statement as $row) {
   $success = true;
   $findUser = $row['username'];
}

if($success) {
   echo "Success login." . $findUser . PHP_EOL;
} else {
   echo "Fail Login.";
}

$conn = null;