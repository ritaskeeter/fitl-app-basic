<?php

$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

//Creating a connection
$connection = new mysqli ($servername, $username, $password);

//Check for an error
if($connection->connect_error){
	echo 'Connection failed: ' .$connection->connect_error;
	exit;
}

$connection->select_db('fitl');

$sql = 'SELECT * FROM questions WHERE id = '.$id;

//Execute the query
$result = $connection->query($sql);

//Check if object exists(has values) and then retrieve it
if($result->num_rows>0){
	$object = $result->fetch_assoc(); //returns values of the object
}

?>