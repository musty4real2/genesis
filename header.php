<?php include("session.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="slick, flat, dashboard, bootstrap, admin, template, theme, responsive, fluid, retina">
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>Genesis</title>

    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">

    <!--switchery-->
    <link href="js/switchery/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />

    <!--Data Table-->
    <link href="js/data-table/css/jquery.dataTables.css" rel="stylesheet">
    <link href="js/data-table/css/dataTables.tableTools.css" rel="stylesheet">
    <link href="js/data-table/css/dataTables.colVis.min.css" rel="stylesheet">
    <link href="js/data-table/css/dataTables.responsive.css" rel="stylesheet">
    <link href="js/data-table/css/dataTables.scroller.css" rel="stylesheet">
    <!-- Base Styles -->

    <!--common style-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="sticky-header">

    <section>
        <!-- sidebar left start-->
        <div class="sidebar-left">
            <!--responsive view logo start-->
            <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
                <a href="index.html">
                    <img src=" " alt="">
                    <!--<i class="fa fa-maxcdn"></i>-->
                    <span class="brand-name">Genesis</span>
                </a>
            </div>
            <!--responsive view logo end-->

            <div class="sidebar-left-info">
                <!-- visible small devices start-->
                <!-- <div class=" search-field">  </div> -->
                <!-- visible small devices end-->

                <?php include("sidenav.php"); ?>

            </div>
        </div>
        <!-- sidebar left end-->

        <?php include("topnav.php") ?>
