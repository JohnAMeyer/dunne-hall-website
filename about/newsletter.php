<!DOCTYPE html>
<html>
<head>
	<?php require "../includes/head.php"; ?>
	<title></title>
	<style type="text/css">
		p.indented {
			text-indent:25px;
		}
	</style>
</head>
<body>
	<?php require "../includes/body.php" ?>
	<?php require "../includes/menugallery.php" ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-md-10 col-md-offset-1" style="background-color: #fff; padding:10px">
				<div class="row-fluid">
					<h1 class="text-center">Newsletter</h1>
					<div style="background-color: #001433;padding:10px">
						<div id="mailchimp"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php require "../includes/footer.php" ?>

	<?php include "../mailchimp.js.php"; ?>
</body>
</html>