<?php if($base = getenv('DUNNE_HALL_BASE')): //include base tag only if defined in environment
?>
<base href="<?php echo $base; ?>">
<?php else : ?>
<base href="/">
<?php endif; ?>
<?php
if(!isset($description))
	$description = "Dunne Hall is Notre Dame's newest all-male dorm, located on Mod/East Quad and founded in 2016.";
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
<meta property="og:site_name" content="<?php echo $title; ?>">
<meta property="og:title" content="Dunne Hall"> <!-- set to h1 content? -->
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="img/favicon/apple-touch-icon-180x180.png">
<meta property="og:locale" content="en_US">

<title><?php echo $title; ?></title>

<!-- Icons -->
<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
<link rel="manifest" href="img/favicon/manifest.json">
<link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="img/favicon/favicon.ico">
<meta name="msapplication-config" content="img/favicon/browserconfig.xml">
<meta name="theme-color" content="#78c351">

<link href="styles/bootstrap.min.css" rel="stylesheet">

<script type="text/javascript" async="" id="ndalertbarscript" src="//emergency.nd.edu/api/alert/"></script>

<link rel="stylesheet" type="text/css" href="styles/override.css.php"/>
<link rel="stylesheet" type="text/css" href="styles/ndbrand.css"/>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112910517-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112910517-1');
</script>