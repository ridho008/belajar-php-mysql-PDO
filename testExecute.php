

<?php 
require __DIR__  . '/getConnection.php';

$conn = getConnection();

// string multiline
$sql = <<<SQL
   INSERT INTO customers(id, name, email) VALUES(null, 'Harun', 'harun@gmail.com');
SQL;

$conn->exec($sql);

// menutup koneksi
$conn = null;