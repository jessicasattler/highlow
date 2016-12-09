<?php 
//php script to recieve http requests and fetch data from the database

$_ENV = require_once __DIR__ . '/../.env.php';

$dbc = new PDO('mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$name = $_GET['name'];
$retrievePics = $dbc->query("SELECT * FROM characters WHERE character_name = '$name' ");
$retrieved = $retrievePics->fetch(PDO::FETCH_NUM);

echo json_encode($retrieved);



 ?>

