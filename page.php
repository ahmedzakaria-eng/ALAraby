<?php

	/*

	Categories

	*/
	$do = '';

	if(isset($_GET['do']))
	{
		$do = $_GET['do'];
	}
	else
	{
		$do = 'Manage';
	}

	if($do == 'Manage')
	{
		echo "Welcome To Manage Page";
	}
	elseif($do == 'Add')
	{
		echo "Welcome To Add Page";
	}
	elseif($do == 'insert')
	{
		echo "Welcome You Are In Add Page";
	}
	else
	{
		echo "Error There's No Page With This Name";
	}

?>