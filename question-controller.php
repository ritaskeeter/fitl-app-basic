<?php
//Moving $id = $_REQUEST['id']; to inside the function since there would an undefined error as id would be expected in the URL
$page = $_REQUEST['page'];

//Query to select the object from the database
if ($page == "show"){
	$id = $_REQUEST['id']; //ID moved here to make it non-mandatory in for other pages like "create"
	show($id);
}

elseif($page == "create"){
	//include 'question-create-view.php'; We will include this in a separate "create" function
	create();
}

function show($id){
	//global $connection; //If it is not included, error will be displayed since connection exists outside the function

	$object = array(
		'title' =>'',
		'question' =>'',
		'description' =>'',
		'code' =>'',
		'submitted_at' =>'',
	);
	include 'db-connection.php'; //Including the DB connection and SQL query file
	include 'question-show-view.php'; //Including the PHP HTML file to display the "user question data" view
}

function create(){
	include 'question-create-view.php'; //Including the PHP HTML file to display a "create question" view
}

?>