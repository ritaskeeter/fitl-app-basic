<?php

$title = 'My Programming Question #2';

$question = 'My HTML list code does not display correctly';

$description = 'I\'m trying to display a list but I\'m not sure if it is correct. Can you help?';

$code = '&lt;ul&gt;
			item 1
			item 2
			item 3
		&lt;/ul&gt;';

$date = 'August 1st, 2020';

?>

<!DOCTYPE html>
<html>

	<head>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<h1><?php echo $question; ?></h1>
		<p><?php echo $description; ?></p>
			<pre>
				<?php echo $code; ?>
			</pre>
		<p>Question Date: <?php echo $date; ?></p>
	</body>
</html>