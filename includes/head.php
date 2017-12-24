<?php
$root = '/';
$imgroot = 'http://whaleoftime.com:49152/';
if(strpos(dirname(__FILE__),'DunneHallWebsite')!== false){
	$root = '/dunne/';
	$imgroot = "localhost/dunne/";
}
if(!isset($description))
	$description = "Dunne Hall is Notre Dame's newest all-male dorm, located on Mod/East Quad.";
if(!isset($title))
	$title = "Dunne Hall";
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="author" content="John Meyer">
<meta name="description" content="<?php echo $description; ?>">
<meta name="apple-mobile-web-app-title" content="<?php echo $title; ?>">
<meta name="application-name" content="Dunne Hall">
<meta name="twitter:card" content="summary">
<!--meta name="twitter:site" content="@notredame"-->
<!--meta name="twitter:creator" content="@ndwebteam"-->
<meta property="og:site_name" content="Dunne Hall">
<meta property="og:title" content="Dunne Hall"> <!-- set to h1 content? -->
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo $imgroot; ?>img/favicon/apple-touch-icon-180x180.png">
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

<link rel="stylesheet" type="text/css" href="<?php echo $root ?>styles/override.css.php"/>
<link rel="stylesheet" type="text/css" href="<?php echo $root ?>styles/ndbrand.css"/>