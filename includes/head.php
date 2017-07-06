<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="/<?php if(strpos(dirname(__FILE__),'DunneHallWebsite')!== false) echo 'dunne'; ?>/styles/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	@media (min-width: 768px) {
		.nav  li {
			width:25%
		}
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
	@media (max-width: 990px) and (min-width: 768px) {
		nav.navbar{
			border-radius: 0px;
		}
		div.nav-parent {
			padding-left: 0px;
			padding-right: 0px;
		}
	}
	.row-fluid > h1 {
		margin-top: 10px;
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
</style>