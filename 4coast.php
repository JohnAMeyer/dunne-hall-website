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
	.menu {
		background-color: #77c152;
		padding: 15px;
		border-radius: 15px;
	}
	.panel-group .panel {
		border-radius: 0px;
	}
	.panel-group .panel + .panel {
		margin-top: -1px;
	}
	.panel-group .panel:first-child {
		border-top-left-radius: 4px;
		border-top-right-radius: 4px;
	}
	.panel-group .panel:last-child {
		border-bottom-left-radius: 4px;
		border-bottom-right-radius: 4px;
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
	<div class="container-fluid" style="min-height:600px">
		<div class="row-fluid">
			<div class="col-md-10 col-md-offset-1" style="background-color: #fff">
				<div class="row-fluid">
					<div class="col-md-10 col-md-offset-1">
						<h1 class="text-center">4 Coast Waffles and Floats</h1>
					</div>
					<div class="menu col-md-7 col-md-offset-1">
						<h3 style="margin-top:5px;" class="text-center">Our Menu</h3>
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<?php
							$split_menu = array_slice(file("cache/menu.csv"), 1);

							foreach ($split_menu as $key => $line):
								$split_line = str_getcsv($line);//item, price, description/addt'l info, options
								?>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="menuHeading<?php echo $key; ?>">
										<h4 class="panel-title">
											<?php if(count(array_filter(array_slice($split_line, 3)))): ?>
												<a <?php if(strtolower($split_line[2]) == "true") echo 'class="sold-out"';?> role="button" data-toggle="collapse" data-parent="#accordion" href="#menuCollapse<?php echo $key; ?>" aria-expanded="true" aria-controls="menuCollapse<?php echo $key; ?>">
												<?php else: ?>
													<span>
													<?php endif; ?>
													<?php echo $split_line[0]; ?>
													<span class="badge"><?php echo $split_line[1]; ?></span>
													<?php if(strtolower($split_line[2]) == "true"):?>
														<span class="badge badge-warning">Sold out</span>
													<?php endif; ?>
													<?php if(count(array_filter(array_slice($split_line, 3)))): ?>
													</a>
												<?php else: ?>
												</span>
											<?php endif; ?>
										</h4>
									</div>
									<?php if(count(array_filter(array_slice($split_line, 3)))): ?>
										<div id="menuCollapse<?php echo $key; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="menuHeading<?php echo $key; ?>">
											<div class="panel-body">
												<?php if($split_line[5] && strlen($split_line[5]) > 0): ?>

													<div class="media">
														<div class="media-body media-middle">
															<!--h4 class="media-heading">Media heading</h4-->
															<?php if($split_line[3]): ?>
																<p><?php echo $split_line[3]; ?></p>
															<?php endif; ?>
															<?php if($split_line[4]): ?>
																Options:
																<ul>
																	<?php
																	$option_list = explode(",",$split_line[4]);
																	foreach ($option_list as $value):
																		?>
																		<li><?php echo $value; ?></li>
																	<?php endforeach; ?>
																</ul>
															<?php endif; ?>
														</div>
														<div class="media-right media-middle">
															<a href="#">
																<img class="img-thumbnail media-object" style="height: 15vh;" src="<?php echo $split_line[5]; ?>" alt=""></img>

															</a>
														</div>
													</div>



												<?php else: if($split_line[3]): ?>
													<p><?php echo $split_line[3]; ?></p>
												<?php endif; ?>
												<?php if($split_line[4]): ?>
													Options:
													<ul>
														<?php
														$option_list = explode(",",$split_line[4]);
														foreach ($option_list as $value):
															?>
															<li><?php echo $value; ?></li>
														<?php endforeach; ?>
													</ul>
												<?php endif; endif; ?>
											</div>
										</div>
									<?php endif; ?>
								</div>
							<?php endforeach; ?>

						</div>
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