<?php

	session_start();
	$noNavbar = '';
	$pageTitle = 'Login';
	if(isset($_SESSION['Username']))
	{
		header('location: dashboard.php'); // Redirect To Dashboard Page
	}
	
	include 'int.php'; 
		
	// Check user is coming from HTTP Post Request
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$username = $_POST['user'];
		$prodline = $_POST['PL'];
		$hashedPass = sha1($prodline);

		// Check if user is exist in database

		$stmt = $con->prepare("SELECT
									UserID, Username,prodline
								FROM
									users 
								WHERE 
									Username = ? 
								AND 
									prodline = ? 
								AND 
									GroupID = 1
								LIMIT 1");
		$stmt->execute(array($username,$hashedPass));
		$row = $stmt->fetch();
		$count = $stmt->rowCount();
		
		
		// if count > 0 this main database contain record about this username

		if($count > 0)
		{
			$_SESSION['ID'] = $row['UserID'];
			$_SESSION['Username'] = $username;
			$_SESSION['ProdLine'] = $prodline; // Register Sessoin Name
			header('location: dashboard.php');
			exit();
		}

	}

?>

	<form class="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
		<h4 class="text-center">Al-Araby</h4>
		<input class="form-control input-lg" type="text" name="user" placeholder="Username" autocomplete="off" />
		<input class="form-control input-lg" type="PL" name="PL" placeholder="Production Line" autocomplete="new-password" />
		<input class="btn btn-primary btn-block" type="submit" value = "login" />


	</form>
<?php include 'footer.php';?>

