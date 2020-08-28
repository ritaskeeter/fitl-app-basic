<?php

$type = $_REQUEST['type'];

if($type == 'car'){
	$object= array(
		'title' => 'Car',
		'make' => 'Toyota',
		'model'=> 'Corolla',
		'year' => '2018',
	);
}

elseif($type == 'truck'){
	$object = array(
		'title'=> 'Truck',
		'make' => 'Ford',
		'model' => 'F-150',
		'year' => '2014',
	);
}

else{
	$object = array(
		'title' => '',
		'make' => '',
		'model' => '',
		'year' => '',
	);
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object['title']; ?></title>
	</head>
	<body>
		<h1><?php echo $object['make']; ?></h1>
		<p><?php echo $object['model']; ?></p>
		<p><?php echo $object['year']; ?></p>
	</body>
</html>