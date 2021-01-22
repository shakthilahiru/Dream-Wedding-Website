<?php
require '../constants/config.php';
require '../constants/check-login.php';
require 'constants/fetch-my-info.php';

if ($logged == "1") {
       if ($myrole == "admin") {

       }else{

        header("location:../");

       }

    }else{

        header("location:../");

    }


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $site_title; ?> - Admin Dashboard</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="../assets/icon/favicon.ico">


</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a target="_blank" class="navbar-brand" href="../"><?php echo $site_title; ?></a>
            </div>
        

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $myusername; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="account"><i class="fa fa-gear fa-fw"></i> Account Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>

                </li>

            </ul>
           

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="./"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="pub-ads"><i class="fa fa-edit fa-fw"></i> Published Ads</a>
                        </li>
                        <li>
                            <a href="active-ads"><i class="fa fa-check-circle-o fa-fw"></i> Active Ads</a>
                        </li>
                        <li>
                            <a href="pending-ads"><i class="fa fa-spinner fa-fw"></i> Pending Ads</a>
                        </li>
                        <li>
                            <a href="featured-ads"><i class="fa fa-star-o fa-fw"></i> Featured Ads</a>
                        </li>
                        <li>
                            <a href="users"><i class="fa fa-users fa-fw"></i> Users</a>
                        </li>
                        <li>
                            <a href="account"><i class="fa fa-cog fa-fw"></i> Account Settings</a>
                        </li>
                        
                        <li>
                            <a href="about"><i class="fa fa-info-circle fa-fw"></i> About</a>
                        </li>
                         <li>
                            <a href="../logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>

                    </ul>
                </div>
              
            </div>
        
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>

            </div>
         
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-edit fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo number_format($total_ads); ?></div>
                                    <div>Published Ads</div>
                                </div>
                            </div>
                        </div>
                        <a href="pub-ads.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-check-circle-o fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo number_format($active_ads); ?></div>
                                    <div>Active Ads</div>
                                </div>
                            </div>
                        </div>
                        <a href="active-ads">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-spinner fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo number_format($pending_ads); ?></div>
                                    <div>Pending Ads</div>
                                </div>
                            </div>
                        </div>
                        <a href="pending-ads">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-star-o fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo number_format($featured_ads); ?></div>
                                    <div>Featured Ads</div>
                                </div>
                            </div>
                        </div>
                        <a href="featured-ads">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
