<?php
$root = '/';
if(strpos(dirname(__FILE__),'DunneHallWebsite')!== false)
	$root = '/dunne/';
$description = "Dunne Hall is Notre Dame's newest all-male dorm, located on Mod/East Quad.";
$title = "Dunne Hall";
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="author" content="Marketing Communications: Web // University of Notre Dame">
<meta name="description" content="<?php echo $description; ?>">
<meta name="apple-mobile-web-app-title" content="<?php echo $title; ?>">
<meta name="application-name" content="Dunne Hall">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@notredame">
<!--meta name="twitter:creator" content="@ndwebteam"-->
<meta property="og:site_name" content="Dunne Hall">
<meta property="og:title" content="Dunne Hall"> <!-- set to h1 content? -->
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="http://onmessage.nd.edu/university-branding/website-requirements/color-requirements/">
<meta property="og:image" content="http://onmessage.nd.edu//images/webclips/nd-webclip-144.png"> <!-- TODO -->
<meta property="og:locale" content="en_US">

<title><?php echo $title; ?></title>

<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $root; ?>img/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $root; ?>img/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $root; ?>img/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $root; ?>img/favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $root; ?>img/favicon/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $root; ?>img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $root; ?>img/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo $root; ?>img/favicon/manifest.json">
<link rel="mask-icon" href="<?php echo $root; ?>img/favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="<?php echo $root; ?>img/favicon/favicon.ico">
<meta name="msapplication-config" content="<?php echo $root; ?>img/favicon/browserconfig.xml">
<meta name="theme-color" content="#78c351">

<link href="<?php echo $root; ?>styles/bootstrap.min.css" rel="stylesheet">

<script type="text/javascript" async="" id="ndalertbarscript" src="//emergency.nd.edu/api/alert/"></script>

<style type="text/css">

	@media (min-width: 768px) {
		.navbar-header {
			width: 20%;
		}
		.nav > li {
			width:25%
		}
	}
	.nav.navbar-nav {
		width: 80%;
	}
	@media (min-width: 990px) {
		#gallery {
			padding: 0 10px;
		}
	}
	@media (max-width: 767px) {
		.nav > .dropdown-menu a::before {
			content: "• ";
		}
	}
	@media (max-width: 1199px) and (min-width: 768px) {
		nav.navbar{
			border-radius: 0px;
		}
		div.nav-parent {
			padding-left: 0px;
			padding-right: 0px;
		}
	}
	.row-fluid > .text-center > img {
		margin-top: 10px;
	}
	a {
		color: #0edd0e;
	}
	.home-link {
		cursor: pointer;
	}
	@media (max-width: 990px){
		#gallery {
			margin-top: 10px;
		}
	}
	body {
		background-color: #003a79;
	}
	@media(max-width:767px){
		.nav-parent{
			padding:0px;
		}
	}
	footer {
		background-color: #fff;
		color:#666;
	}
	footer a:active {
		color: #aa272f;
	}
	footer a:hover {
		color: #002b5b;
	}
	footer a:visited {
		color: #4a3651;
	}
	footer a {
		color: #004da3;
		outline: none;
		-webkit-tap-highlight-color: rgba(0,0,0,0);
	}
	@media(max-width: 990px){
		footer{
			text-align: center;
		}
	}
	h1 {
		margin: 25px;
	}
	.navbar {
		border-radius: 0px;
	}
	body {
		font-family: "Helvetica Neue", Helvetica, Arial, Verdana, sans-serif;
	}
	#float-photo {
		position: absolute;
		z-index: 50;
		width: 17vw;
		left:6.5vw;
		top:10vw;
	}
	@media(max-width: 1800px){
		#float-photo {
			left: 4vw;
			top: 14vw;
		}
	}
	@media(min-width: 1950px){
		#gallery {
			width: 76vw;
		}
	}
	@font-face {
    	font-family: hudsonNY;
    	src: url(<?php echo $root; ?>etc/HudsonNYSerif.ttf);
    	src: url(<?php echo $root; ?>etc/HudsonNYSerif.otf);
	}
	.hudson {
		font-family: hudsonNY;
	}
	.navbar-default .navbar-nav>li>a{
		color:#282646;
		font-weight: bold;
	}
	h1 {
		font-family: hudsonNY;
	}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo $root ?>styles/ndbrand.css""/>