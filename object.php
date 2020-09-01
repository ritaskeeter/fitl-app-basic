<?php
//The Request allows us to define a variable(ID for example) and display the data specific to 
//the ID value(or user/object) since the variable will be included in the URL

//For example: https://fitl-app-basic/local.php?id=value
$id_value = $_REQUEST['id'];

//To display empty values when the URL contains an ID variable with a value other than
//the ones specified in the code condition below.

//For example https://fitl-app-basic.local/object.php?id=4

//CONNECTING TO THE DATABASE
//Database Credentials
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

//If no error, then display success message
//echo 'Connected successfully';

//Connect to the specific database
$connection->select_db('fitl');

//Query to select the object from the database
$sql = 'SELECT * FROM questions WHERE id = '.$id_value;

//Execute the query
$result = $connection->query($sql);

//Check if object exists(has values) and then retrieve it
if($result->num_rows>0){
	$object = $result->fetch_assoc(); //returns values of the object
	/*
	echo '<pre>';
	print_r($object);
	echo '</pre>';
	*/
}

//We will use the IDs in the URL to differentiate the users
//and display the page with data specific to each user/object

//For this we will use if and elseif
?>
<!DOCTYPE html>
<html>

	<head>
		<title><?php echo $object['title']; ?></title>
	</head>
	<body>
		<!--This displays the value specified in the URL in the webpage
			For example: if URL is https://fitl-app-basic.local/object.php?variable=myValue,
			it will display "myValue" in the webpage
			<?php echo $_REQUEST['variable']; ?>
		-->
		<h1><?php echo $object['question']; ?></h1>
		<p><?php echo $object['description']; ?></p>
			<pre>
				<?php echo $object['code']; ?>
			</pre>
		<p>Question Date: <?php echo $object['submitted_at']; ?></p>
	</body>
</html>