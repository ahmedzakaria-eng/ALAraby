<?php
	session_start();
	
	if(isset($_SESSION['Username']))
	{
		$pageTitle = 'AL-Araby';
	
		include 'int.php';

		/* Start Dashboard Page*/

		$PL = $_SESSION['ProdLine'];

		?>

		<div class="container home-stats text-center">
			<h1>رقم خط الانتاج: <?php echo $_SESSION['ProdLine']; ?></h1><br>
			<h3 style="direction: rtl;">اسم العامل: <?php echo $_SESSION['Username']; ?></h3>

			<br><br>
			<div class="container">



					<form class="form-horizontal" action="?do=Insert" method="post">
						<!-- Start username field-->

						<div class="form-group form-group-lg">
							<label class="col-sm-2 control-label">اسم الموديول</label>
							<div class="col-sm-10 col-md-4">
								
								<input type="text" name="serial">
									
										&nbsp;&nbsp;
								
							</div>

						<div class="form-group form-group-lg">
							<label class="col-sm-2 control-label">المرحلة</label>
							<div class="col-sm-10 col-md-4">
								
								<input type="radio" name="process"> <lable style = "font-size: 25px;">fat</lable><br><br>
									
										&nbsp;&nbsp;
								
								<input type="radio" name="process"> <lable style = "font-size: 25px;">LCM</lable>
							</div>
						</div><br>
						<!-- End Username Field -->
						
						<!-- Start Password field-->
						<div class="form-group form-group-lg">
							<label class="col-sm-2 control-label">الاخطاء</label>
							<div class="col-sm-10 col-md-4">
								<form>
							<input list="error">
							<datalist id="error">
								<option>error1</option>
								<option>error2</option>
								<option>error3</option>
								<option>error4</option>
								<option>error5</option>
								<option>error6</option>
								<option>error7</option>

							</datalist>
						</form>
							</div>
						</div>
						<br><br>
						<div class="form-group">
							
							<div class="col-sm-10">
								<input type="submit" value = "ارسال" class="btn btn-primary btn-lg" />
							</div>
						</div>
						<!-- End submit Field -->
					</form>


		<?php
	

		include 'footer.php';
	}
	else
	{
		header('location: index.php');
		exit();
	}



?>