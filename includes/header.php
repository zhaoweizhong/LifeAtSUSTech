<!doctype html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/x-icon" href="https://cache.sustech.net/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php echo $pageTitle; ?>南科导航 - SUSTech Navigation</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="baidu-site-verification" content="Yw5KH73QOt" />

	<!-- Fonts and icons -->
	<link rel="stylesheet" href="https://fonts.proxy.ustclug.org/icon?family=Material+Icons" />
	<link rel="stylesheet" href="https://cache.sustech.net/assets/css/font-awesome.min.css" />

	<!-- CSS Files -->
   	<link href="https://cache.sustech.net/assets/css/bootstrap.min.css" rel="stylesheet" />
   	<link href="https://cache.sustech.net/assets/css/material-kit.css" rel="stylesheet"/>
	<link href="https://cache.sustech.net/assets/css/fontdiao.css" rel="stylesheet"/>
   	<link href="https://cache.sustech.net/assets/css/style.css" rel="stylesheet" />
	<link href="https://cache.sustech.net/assets/css/demo.css" rel="stylesheet" />
	
</head>

<body class="<?php echo $pageType; ?>-page">
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="fa fa-bars navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">南科导航</span>
	    	</button>
	    	<a href="https://sustech.net">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="https://cache.sustech.net/assets/img/logo.png" alt="南科导航" rel="tooltip" title="<b>南科导航</b>" data-placement="bottom" data-html="true">
	                </div>
	                <div class="brand">
	                    南科导航<br>SUSTech Navigation
	                </div>


				</div>
	      	</a>
	    </div>


        <div class="collapse navbar-collapse" id="navigation-index">
            <ul class="nav navbar-nav">
                <li <?php echo $active1; ?>><a href="https://sustech.net/" class="navShadow"><i class="fa fa-home" aria-hidden="true"></i> 首页</a></li>
                <li <?php echo $active2; ?>><a href="../bus.php"  target="_blank" class="navShadow"><i class="fa fa-bus" aria-hidden="true"></i> 校园巴士</a></li>
                <li><a href="https://bbs.sustech.net/"  target="_blank" class="navShadow"><i class="fa fa-comments" aria-hidden="true"></i> BBS论坛</a></li>
            </ul>
	    	<ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:void()" onclick="setHome(this, window.location)" class="navShadow"><i class="fa fa-home" aria-hidden="true"></i> 设为首页</a></li>
                <li><a href="../sponsor.php"  target="_blank" class="navShadow"><i class="fa fa-money" aria-hidden="true"></i> 赞助本站</a></li>
                <li><a href="http://old.sustech.net"  target="_blank" class="navShadow"><i class="fa fa-clock-o" aria-hidden="true"></i> 返回旧版</a></li>
            </ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->
