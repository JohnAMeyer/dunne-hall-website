<!DOCTYPE html>
<html>
<head>
	<?php require "./includes/head.php"; ?>
	<title></title>
	<style type="text/css">
		p.indented {
			text-indent:25px;
		}
	</style>
</head>
<body style="background-color:#0c343d;">
	<?php require "./includes/body.php" ?>
	<?php require "./includes/menugallery.php" ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-md-10 col-md-offset-1" style="background-color: #fff">
				<div class="row-fluid text-center">
					<h1>Freshmen</h1>
					<h3 style="margin-top:5px">
						Welcome to the greatest dorm on campus!
					</h3>
					<a href="etc/welcome_weekend2017.pdf">Info packet</a>
					<br />
					<div class="well col-md-8 col-md-offset-2">
						<video controls="controls" width="800" height="600" name="Welcome Weekend Video" src="etc/welcome_weekend2017.mp4"></video>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require "includes/footer.php" ?>
</body>
</html>