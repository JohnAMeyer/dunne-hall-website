<!DOCTYPE html>
<html>
<head>
	<?php require "../includes/head.php"; ?>
	<title></title>
	<style type="text/css">
		p.indented {
			text-indent:25px;
		}
		div.container-fluid div.underline {
			text-decoration: underline;
		}
		#bios img {
			max-height: 250px;
		}
		#bios .media:nth-of-type(1n+9) img {
			max-height: 175px;
		}
		#bios img.img-responsive {
			display: initial;
		}
	</style>
</head>
<body>
	<?php require "../includes/body.php" ?>
	<?php require "../includes/menugallery.php" ?>
	<div id="bios" class="container-fluid">
		<div class="row-fluid">
			<div class="col-md-10 col-md-offset-1" style="background-color: #fff">
				<div class="col-md-10 col-md-offset-1">
					<div class="row-fluid">
						<h1 class="text-center">Leaders</h1>
						<?php require "../cache/leaders.html"; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require "../includes/footer.php" ?>
</body>
</html>