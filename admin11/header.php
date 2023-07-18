<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Janki Travels</title>
    
    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> 
                <span>Janki Travels</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> Admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            
        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Admin Side</li>
                        <li>
							<a class="ajax-link" href="home.php"><i class="glyphicon glyphicon-home"></i><span>   Home</span></a>
                        </li>
                        
						<li>
							<a class="ajax-link"><i></i><span> Tables</span></a>
						</li>
                        
						<li>
							<a class="ajax-link" href="category.php">
							<i class="glyphicon glyphicon-th"></i><span> Category</span></a>
                        </li>
                        
						<li>
							<a class="ajax-link" href="subcategory.php">
							<i class="glyphicon glyphicon-th"></i><span> Sub - Category</span></a>
                        </li>
                        
						<li>
							<a class="ajax-link" href="product.php">
							<i class="glyphicon glyphicon-th"></i><span> Product</span></a>
                        </li>
						
						
								
						<li>
							<a class="ajax-link" href="customer.php">
							<i class="glyphicon glyphicon-lock"></i><span> Customer</span></a>
                        </li>
						
						<li>
							<a class="ajax-link" href="feedback.php">
							<i class="glyphicon glyphicon-edit"></i><span> Feedback</span></a>
                        </li>
						
						<li>
							<a class="ajax-link" href="gallery.php">
							<i class="glyphicon glyphicon-th"></i><span> Gallery</span></a>
                        </li>
						
						<li>
							<a class="ajax-link" href="booking.php">
							<i class="glyphicon glyphicon-list-alt"></i><span> Booking</span></a>
                        </li>
						
						<li>
							<a class="ajax-link" href="payment.php">
							<i class="glyphicon glyphicon-book"></i><span> Payment</span></a>
                        </li>
						
						<li>
							<a class="ajax-link" href="bill.php">
							<i class="glyphicon glyphicon-book"></i><span> Bill</span></a>
                        </li>
						
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">