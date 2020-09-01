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