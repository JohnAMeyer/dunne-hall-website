<!DOCTYPE html>
<html>
<head>
	<?php $title = "Dunne Hall // 4 Coast Waffles and Floats"; //$description = ""; ?>
	<?php require "includes/head.php"; ?>
	<title></title>
	<style type="text/css">
		p.indented {
			text-indent:25px;
		}
	</style>
</head>
<body>
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<?php require "includes/body.php" ?>
	<?php require "includes/menugallery.php" ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-md-10 col-md-offset-1" style="background-color: #fff">
				<div class="row-fluid">
					<div class="col-md-10 col-md-offset-1">
						<h1 class="text-center">4 Coast Waffles and Floats</h1>
					</div>
					<div class="col-md-7 col-md-offset-1 text-center">
						<p class="indented">
							About us
						</p>
						<img src="https://drive.google.com/uc?id=1KYqc_SGC7ddAM2vYKazNlOyszPn8PqbF&export=download" width="80%"></img>
					</div>
					<div class="col-md-3 text-center">
						<h4>Order Online and Like Our Page!</h4>
						<div class="fb-page" data-href="https://www.facebook.com/pg/4CoastDunneHall" data-width="500" data-height="500" data-tabs="messages, timeline"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require "includes/footer.php" ?>
</body>
</html>