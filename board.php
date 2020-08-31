<?php

$id = $_REQUEST['id'];

$object = array(
	'name' => 'User',
	'status' => '',
	'scheduled_calls' => '',
	'call_notes' => '',
	'sessions' => '', 
	'session_notes' => '',
);

$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

//Create a connection
$connection = new mysqli($servername, $username, $password);

//Check if connection is successful
if($connection->connect_error){
	echo 'Connection failed: '.$connection->connect_error;
	exit;
}

echo 'Connection successful';

//Connect to database
$connection->select_db('fitl');

//Create a query
$sql = 'SELECT * FROM board WHERE id = ' .$id;

//Execute the query
$result = $connection->query($sql);

//Check if the result of the query is a valid object(with values) and then retrieve that object
if($result->num_rows>0){
	$object = $result->fetch_assoc();
}

/*
if($id == 1) {
	$object = array(
		'name' => 'Sona',
		'status' => 'Online',
		'scheduled_calls' => '12:00pm to 2:30pm',
		'call_notes' => 'Implementation',
		'sessions' => '4:00pm to 6:00pm', 
		'session_notes' => 'Training',
	);
}

elseif($id == 2) {
	$object = array(
		'name' => 'Subro',
		'status' => 'Online',
		'scheduled_calls' => '1:00pm to 2:00pm',
		'call_notes' => 'Onboarding',
		'sessions' => '3:30pm to 4:00pm', 
		'session_notes' => 'Process Management',
	);
}

else {
	$object = array(
		'name' => 'User',
		'status' => '',
		'scheduled_calls' => '',
		'call_notes' => '',
		'sessions' => '', 
		'session_notes' => '',
	);
}
*/

?>

<!DOCTYPE html>
<html>
	<head>
		<title>My Dashboard</title>
	</head>
	<body>
		<h1><?php echo $object['name']; ?></h1>
		<h3>Status: <?php echo $object['status']; ?></h3>
		<h3>Scheduled calls: <?php echo $object['scheduled_calls']; ?></h3>
			<p>Notes: <?php echo $object['call_notes']; ?></p>
		<h3>Sessions: <?php echo $object['sessions']; ?></h3>
			<p>Notes: <?php echo $object['session_notes']; ?></p>
	</body>
</html>