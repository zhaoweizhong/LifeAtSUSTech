<!doctype html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php echo $pageTitle; ?>南科导航 - SUSTech Navigation</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.proxy.ustclug.org/icon?family=Material+Icons" />
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>
	<link href="../assets/css/fontdiao.css" rel="stylesheet"/>
    <link href="../assets/css/style.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="../assets/css/demo.css" rel="stylesheet" />

</head>

<body class="<?php echo $pageType; ?>-page">
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">南科导航</span>
	    	</button>
	    	<a href="https://sustech.net">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="../assets/img/logo.png" alt="南科导航" rel="tooltip" title="<b>南科导航</b>" data-placement="bottom" data-html="true">
	                </div>
	                <div class="brand">
	                    南科导航<br>SUSTech Navigation
	                </div>


				</div>
	      	</a>
	    </div>


        <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:void()" onclick="setHome(this, window.location)" class="navShadow"><i class="material-icons">home</i>设为首页</a></li>
                <li><a href="../sponsor.php"  target="_blank" class="navShadow"><i class="fa fa-money" aria-hidden="true"></i> 赞助本站</a></li>
                <li><a href="http://old.sustech.net"  target="_blank" class="navShadow"><i class="material-icons">restore</i>返回旧版</a></li>
            </ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->