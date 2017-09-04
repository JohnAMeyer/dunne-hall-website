<?php
$root = '/';
if(strpos(dirname(__FILE__),'DunneHallWebsite')!== false)
	$root = '/dunne/';
?>
<nav class="nd-brand nd-grey">
	<div class="nd-row nd-row-container">
		<ul class="nd-column">
			<li class="nd-dept-nd"><a href="https://www.nd.edu/">University <i>of</i> Notre Dame</a></li>
			<li class="nd-dept nd-dept-staf"><a href="http://studentaffairs.nd.edu/">Division <i>of</i> Student Affairs</a></li>
		</ul>
	</div>
</nav>
<div class="container-fluid" style="position: absolute;z-index: 100; width: 100%">
	<div class="row">
		<div class="nav-parent col-xs-12 col-lg-8 col-lg-offset-2">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!--img class="navbar-brand home-link" src="<?php echo $root; ?>img/dunne-bar.png" alt="Dunne Hall"></img--> <a class="navbar-brand home-link hudson" style="font-size:20pt;color:#282646">Dunne <span style="color:#77c152">Hall</span></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav text-center">
						<!--li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li-->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo $root ?>about/leaders.php">Leadership</a></li>
								<!--li><a href="<?php echo $root ?>/about/dunne.php">J. Dunne</a></li-->
								<li><a href="<?php echo $root ?>about/identity.php">Identity</a></li>
								<li><a href="<?php echo $root ?>about/newsletter.php">Newsletter</a></li>
							</ul>
						</li>
						<!--li><a href="#">Alumni</a></li-->
						<li><a href="<?php echo $root ?>freshmen.php">Freshmen</a></li>
						<li><a href="<?php echo $root ?>events.php">Events</a></li>
						<li><a href="<?php echo $root ?>food.php">Food</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>