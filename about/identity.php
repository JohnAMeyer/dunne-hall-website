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
			<div class="col-md-10 col-md-offset-1" style="background-color: #fff">
				<div class="row-fluid">
					<div class="col-md-10 col-md-offset-1">
						<h1 class="text-center">Identity</h1>
						<?php
							$arr = file("../cache/identity.txt");
							foreach ($arr as $line):
							?>
							<p class="indented">
								<?php echo $line; ?> 
							</p>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require "../includes/footer.php" ?>
</body>
</html>