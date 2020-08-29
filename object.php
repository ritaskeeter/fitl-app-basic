<?php
//The Request allows us to define a variable(ID for example) and display the data specific to 
//the ID value(or user/object) since the variable will be included in the URL

//For example: https://fitl-app-basic/local.php?id=value
$id_value = $_REQUEST['id'];

//To display empty values when the URL contains an ID variable with a value other than
//the ones specified in the code condition below.

//For example https://fitl-app-basic.local/object.php?id=4
$object = array(
	'title' =>'',
	'question' =>'',
	'description' =>'',
	'code' =>'',
	'date' =>'',
);

//We will use the IDs in the URL to differentiate the users
//and display the page with data specific to each user/object

//For this we will use if and elseif
if ($id_value == 1) {
	$object = array(
		'title' =>'My Programming Question #1',
		'question' => 'I have a question on displaying an alert',
		'description' => 'I\'m trying to display an alert box but it does not work. This is what I have managed to do till now. Can you help?',
		'code' => 'Alert(My message)',
		'date' => 'July 1st, 2020',
	);
}

elseif ($id_value == 2) {
	$object = array(
		'title' => 'My Programming Question #2',
		'question' => 'My HTML list code does not display correctly',
		'description' => 'I\'m trying to display a list using HTML but I\'m not sure if it is correct. Can you help?',
		'code' => '&lt;ul&gt;
					item 1
					item 2
					item 3
				&lt;/ul&gt;',
		'date' => 'August 1st, 2020',
	);
}
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
		<p>Question Date: <?php echo $object['date']; ?></p>
	</body>
</html>