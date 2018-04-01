<!DOCTYPE html>
<html>
<head>
	<?php require "includes/head.php"; ?>
	<title></title>
	<style type="text/css">
		p.indented {
			text-indent:25px;
		}
	</style>
</head>
<body>
	<?php require "includes/body.php" ?>
	<?php require "includes/menugallery.php" ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-md-10 col-md-offset-1" style="background-color: #fff">
				<div class="row-fluid">
					<h1 class="text-center">
						We are Dunne Men!
					</h1>
					<div class="col-md-4 col-md-push-7">
						<img class="img-responsive center-block" src="img/dunneair.jpg"></img>
					</div>
					<div class="col-md-6 col-md-offset-1 col-md-pull-4">
						<div class="well">
							<?php
							$arr = file("cache/home.txt");
							foreach ($arr as $line){
								if ($line[0] == '$'):
								?>
								<h3> <?php echo substr($line, 1); ?> </h3>
								<?php else: ?>
								<p class="indented">
									<?php echo $line; ?> 
								</p>
								<?php endif;
							}
							?>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					&nbsp;<hr />
				</div>
				<div class="row-fluid">
					<div class="col-lg-7 col-md-9 col-lg-offset-1">
						<div class="well">
							<h2 style="margin-top: 0px;">Dunne Hall Calendar</h2>
							<iframe id="calendar" src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=nd.edu_f4ui4q2m7uu6rch648rgegf580%40group.calendar.google.com&amp;color=%236B3304&amp;ctz=America%2FNew_York" style="border-width:0;width:100%;height:600px" frameborder="0" scrolling="no"></iframe>
							<p>If not logged in with your ND email account, calendar may fail to show.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="well">
							<h2>Newsfeed</h2>
							<p>Coming soon</p>
							<!-- draws in stuff from json or something -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require "includes/footer.php" ?>
</body>
</html>
