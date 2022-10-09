<?php 

function getConnection(): PDO
{
   $host = "localhost";
   $port = 3306;
   $database = "belajar_php_database_mysql";
   $username = "root";
   $password = "";

   return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}

// create table users(
//    username varchar(100) not null,
//    password varchar(100) not null,
//    primary key (username)
// ) engine = innodb;

// INSERT INTO users(username, password) VALUES('surya', 'surya');