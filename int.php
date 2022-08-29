<?php

	include 'connect.php';
	// Routes

	$foot = 'footer.php';
	$head = 'header.php';

	// Include The Important Files

	include 'functions.php';
//	include 'members.php';
	include 'en.php';
	include 'header.php';
	

	if(!isset($noNavbar))
	{
		include 'navbar.php';
	}

	//include 'page.php';
	
?>