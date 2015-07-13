<?php include('config.php'); //<-- Change site options before going live! ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo pageTitle(); ?></title>
	<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
	<link rel="icon" href="images/favicon.png" type="image/ico"/>
	<style>
	@-o-viewport{width:device-width;}
	@-ms-viewport{width:device-width;}
	@viewport{width:device-width;}
	*{margin:0;padding:0;-webkit-text-size-adjust:100%;-webkit-appearance:none;}
	*,*:before,*:after{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;}
	body,html{margin:0;padding:0;}
	body{position:relative;font-size:12pt;font-family:sans-serif;}
	.container{width:1120px;margin:0 auto;position:relative;}
	.cf:before,.cf:after{content:"";display:table;}
	.cf:after{clear:both;}
	.cf{zoom:1;}
	p,ul,ol{margin-bottom:20px;}
	img,iframe{max-width:100%;height:auto;}
	</style>
</head>
<body>
<header></header>