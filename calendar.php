<?php include("header.php"); 

$host='localhost';
$user='root';
$pass='';
$db='adams';

$con=mysql_connect($host,$user,$pass);
mysql_select_db($db, $con);

$sql = "SELECT * FROM finance";

$result = mysql_query($sql) or die(mysql_error());

while($row = mysql_fetch_array($result)){
    $ss[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="slick, flat, dashboard, bootstrap, admin, template, theme, responsive, fluid, retina">
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>themelock.com - Calendar</title>

    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">

    <!--switchery-->
    <link href="js/switchery/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />

    <!--jquery-ui-->
    <link href="js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet" />

    <!--calendar-->
    <link href="js/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <!--common style-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>


 <div class="wrapper">

                <!-- page start-->
                <div class="row">
                    <aside class="col-lg-3">
                        <h4 class="drg-event-title"> Add Roster</h4>

                        <form role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%">Add New Event</button>
                        </form>

                        <div id='external-events' class="m-t-30 m-b-30">
                            <h4 class="drg-event-title"> Draggable Roster</h4>

                            <p class="border-top drp-rmv m-b-30">
                                <input type='checkbox' id='drop-remove' />
                                Remove after drop
                            </p>

                            <div class='external-event label label-primary'>Lunch</div>
                            <div class='external-event label label-success'>Meeting</div>
                            <div class='external-event label label-info'>Holiday</div>
                            <div class='external-event label label-default'>Go Home</div>
                            <div class='external-event label label-warning'>Work on UI Design</div>
                            <div class='external-event label label-danger'>Workshop & Training</div>
                        </div>
                    </aside>
                    <aside class="col-lg-9">
                        <section class="panel">
                            <div class="panel-body">
                                <div id="calendar" class="has-toolbar"></div>
                            </div>
                        </section>
                    </aside>
                </div>
                <!-- page end-->

        </div>




<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>

<!--jquery-ui-->
<script src="js/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>

<script src="js/jquery-migrate.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>

<!--Nice Scroll-->
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>

<!--right slidebar-->
<script src="js/slidebars.min.js"></script>

<!--switchery-->
<script src="js/switchery/switchery.min.js"></script>
<script src="js/switchery/switchery-init.js"></script>

<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<script src="js/sparkline/sparkline-init.js"></script>

<!--calendar-->
<script src="js/fullcalendar/fullcalendar.min.js"></script>

<!--dragging calendar event-->
<script src="js/dragging-calendar-event-init.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>


<?php include("footer.php"); ?>