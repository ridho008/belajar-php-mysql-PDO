<?php 

require __DIR__ . "/getConnection.php";

$conn = getConnection();

$sql = "SELECT id, name, email FROM customers";

// return PDOStatement
$statement = $conn->query($sql);

foreach($statement as $row) {
   // var_dump($row);
   $id = $row['id'];
   $name = $row['name'];
   $email = $row['email'];

   echo "ID : " . $id . PHP_EOL;
   echo "Name : " . $name . PHP_EOL;
   echo "Email : " . $email . PHP_EOL;
}

$conn = null;