<?php

$page = $_REQUEST['page'];

if($page == "about"){
	about();
}

function about(){
	include 'page-about-view.php';
}

?>