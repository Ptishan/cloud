<?php 
session_start();
include 'connection.php';?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Cloud</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Cloud" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb" >
    <link href="css/plugins.css" rel="stylesheet" type="text/css" >
    <link href="css/style.css" rel="stylesheet" type="text/css" >
    <link href="css/coloring.css" rel="stylesheet" type="text/css" >
    <!-- color scheme -->
    <style type="text/css">
        #error{
            color:red;
        }
    </style>
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" >
</head>

<body>
    <div id="wrapper">
        
        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->
        <!-- header begin -->
        <header class="header-light transparent has-topbar">
            <div id="topbar">
                <div class="container">
                    <div class="topbar-left xs-hide">
                        <span class="topbar-widget">
                            <a href="#">Get Free Shared Cloud!</a>
                        </span>
                    </div>
                
                    <div class="topbar-right">
                        <div class="topbar-widget"><a href="#"><i class="fa fa-phone"></i>+91 8178828576</a></div>
                        <div class="topbar-widget"><a href="#"><i class="fa fa-envelope"></i>lakshyachaurasia02@gmail.com</a></div>
                    </div>  
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="index.php">
                                            <img class="logo-main" src="images/logo.png" alt="" >
                                            <img class="logo-mobile" src="images/logo-mobile.png" alt="" >
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                           <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="index.php">Home</a></li>
                                    <?php if(isset($_SESSION['email'])) { ?>
                                        <li><a class="menu-item" href="dashboard.php">Dashboard</a></li>
                                        <li><a class="menu-item" href="add-file.php">Project</a></li>
                                        <li><a class="menu-item" href="review.php">Review</a></li>
                                        <li><a class="menu-item" href="logout.php">Logout</a></li>
                                    <?php } else { ?>
                                        <li><a class="menu-item" href="login.php">Login</a></li>
                                        <li><a class="menu-item" href="register.php">Register</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <?php if(isset($_SESSION['email'])){ ?>
                                        <a href="dashboard.php" class="btn-main"><?php echo $_SESSION['email']; ?></a>
                                    <?php } else{ ?>
                                    <span id="menu-btn"></span>
                                <?php } ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->