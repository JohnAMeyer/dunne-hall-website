<?php
$root = '/';
if(strpos(dirname(__FILE__),'DunneHallWebsite')!== false)
$root = '/dunne/';
header('Content-Type: text/css');
?>
@media (min-width: 768px) {
	.navbar-header {
		width: 20%;
	}
	.nav > li {
		width:20%
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
	padding: 25px;
	margin-bottom: 0px;
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
a.navbar-brand {
	font-size:18pt;
}
.col-md-10.col-md-offset-1[style="background-color: #fff"]{
	padding-bottom: 15px;
}
a .badge, span .badge {
	float: right;
	margin-left: 5px;
}
.badge, .badge-warning, .panel-default>.panel-heading .badge {
	background-color: #777;	
}
.badge-warning, .panel-heading a > span.badge.badge-warning {
	background-color: #77c152;
}
a > h4, #accordion h4.panel-title {
	margin-top: 0px;
	margin-bottom: 0px;
	font-size: 18px;
}
a > h4 {
	display: inline-block;
}
img.img-thumbnail {
	cursor: default;
}
.align-middle {
    display: flex;
    align-items: center;
    height:100%;
}
.align-middle i {
	margin: auto;
	z-index: 50;
}
.carousel-control {
	width: 10%;
}
.carousel-inner > .item > img {
    margin: 0 auto;
    height: 35vw;
}
.carousel {
    height: 35vw;
    background-color: #003a79;
    position: relative;
}
.carousel * {
    opacity: 1 !important;
}
a.carousel-control[role=button] {
	background-image: none;
}
a.carousel-control[role=button]:hover {
	background-image: none;
}
a.carousel-control .carousel-control-background {
	background-color: rgba(119,119,119,1);
	position: absolute;
	width: 100%;
	height: 100%;
}
a.carousel-control .carousel-control-background:hover {
	background-color: rgba(85,85,85,1);
}

.navbar .navbar-collapse li {
	text-align: left;
}

@media(max-width: 500px){
	#accordion > div > .panel-heading {
		height: 60px;
	}
	#accordion > div > .panel-heading .badge {
		margin-top: 5px;
	}
}
p {
    font-size: 15px;
}
