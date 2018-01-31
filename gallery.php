<!DOCTYPE html>
<html>
<head>
	<?php require "includes/head.php"; ?>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
					<div class="col-md-10 col-md-offset-1">
						<h1 class="text-center">Gallery</h1>


						<?php
						$arr = file("cache/gallery.txt");
						$first = preg_split("/\s?:\s?/",$arr[0], 3);
						?>

						<div id="dunne-photos" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#dunne-photos" data-slide-to="0" class="active"></li>
								<?php
								$x = 0;
								$splice = array_splice($arr, 1);
								foreach ($splice as $i) :
									$x++;
									?>
									<li data-target="#dunne-photos" data-slide-to="<?php echo $x; ?>"></li>
								<?php endforeach; ?>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<img src="cache/<?php echo preg_replace("/[^a-zA-Z0-9_\-]/","",$first[0]); ?>.jpg" alt="<?php echo $first[1]; ?>">
									<div class="carousel-caption">
										<h3><?php echo $first[1]; ?></h3>
										<?php if(count($first)==3): ?><p><?php echo $first[2]; ?></p><?php endif; ?>
									</div>
								</div>
								<?php
								foreach ($splice as $i) :
									$i = preg_split("/\s?:\s?/",$i, 3);
									?>
									<div class="item">
										<img src="cache/<?php echo $i[0]; ?>.jpg" alt="<?php echo $i[1]; ?>"/>
										<div class="carousel-caption">
											<h3><?php echo $i[1]; ?></h3>
											<?php if(count($i)==3): ?><p><?php echo $i[2]; ?></p><?php endif; ?>
										</div>
									</div>
								<?php endforeach; ?>
							</div>

							<!-- Controls -->
							<a class="left carousel-control" href="#dunne-photos" role="button" data-slide="prev">
								<div class="carousel-control-background"></div>
								<div class="align-middle text-center">
									<i class="fa fa-chevron-left"></i>
									<span class="sr-only">Previous</span>
								</div>
							</a>
							<a class="right carousel-control" href="#dunne-photos" role="button" data-slide="next">
								<div class="carousel-control-background"></div>
								<div class="align-middle text-center">
									<i class="fa fa-chevron-right"></i>
									<span class="sr-only">Next</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require "includes/footer.php" ?>
</body>
</html>