<?php 

$host = "localhost";
$port = 3306;
$database = "belajar_php_database_mysql";
$username = "root";
$password = "";


try {
   $conn = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
   echo "success to connection";

   // menutup koneksi
   $conn = null;
} catch(PDOException $e) {
   echo "Fail to connection database " . $e->getMessage();
}