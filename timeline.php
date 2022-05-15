<?php include("header.php"); 


$host='localhost';
$user='root';
$pass='';
$db='adams';

$con=mysql_connect($host,$user,$pass);
mysql_select_db($db, $con);

$sql = "SELECT * FROM schedule";

$result = mysql_query($sql) or die(mysql_error());

while($row = mysql_fetch_array($result)){
    $ss[] = $row;
}

?>

            <!-- page head start-->
            <div class="page-head">
                <h3>
                    Timeline
                </h3>
                <span class="sub-title">Welcome to timeline</span>
                
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <!--timeline start-->
                
                <section class="panel-timeline">
                    <div class="fb-timeliner">
                        <ul>
                            <li class="active"><a href="#">Today</a></li>
                            <li><a href="#">Yesterday</a></li>
                            <li><a href="#">1 Week Ago</a></li>
                            <li><a href="#">1 month Ago</a></li>
                            
                        </ul>
                    </div>
                    <div class="time-line-wrapper">
                        <div class="time-line-caption">
                            <h3 class="time-line-title">Today</h3>
                        </div>
                        
                    <?php foreach($ss as $s){ ?>                        
                        <article class="time-line-row">
                            <div class="time-line-info">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow"></span>
                                        <span class="time-line-ico-box green"></span>
                                        <span class="time-line-subject green"> <i class="fa fa-clock-o"></i> <?php echo UCFirst($s['Type']) ?></span>
                                        <div class="title">
                                            <h1><?php echo $s['Date'] ?> <?php echo UCFirst($s['Month']) ?></h1>
                                            <small class="text-muted"> <?php echo $s['Year'] ?>, <?php echo $s['Time'] ?></small>
                                        </div>
                                        <p><?php echo $s['Title'] ?>
                                            <br/> Venue : <?php echo $s['Venue'] ?>
                                        </p>
                                        <p><?php echo $s['Description'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php } ?>
                        
                        <?php foreach($ss as $s){ ?>
                        <article class="time-line-row alt">
                            <div class="time-line-info">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow-alt"></span>
                                        <span class="time-line-ico-box purple"></span>
                                        <span class="time-line-subject purple"> <i class="fa fa-users"></i> <?php echo UCFirst($s['Type']) ?></span>
                                        <div class="title">
                                            <h1><?php echo $s['Date'] ?> <?php echo UCFirst($s['Month']) ?></h1>
                                            <small class="text-muted"><?php echo $s['Year'] ?>, <?php echo $s['Time'] ?></small>
                                        </div>
                                        <p>
                                          <?php echo $s['Title'] ?>
                                            <br/> Venue : <?php echo $s['Venue'] ?>  
                                       </p>
                                        <p><?php echo $s['Description'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php } ?>
                        
                        
                        <?php foreach($ss as $s){ ?>
                        <article class="time-line-row">
                            <div class="time-line-info">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow"></span>
                                        <span class="time-line-ico-box blue"></span>
                                        <span class="time-line-subject blue"><i class="fa fa-ping"></i><?php echo UCFirst($s['Type']) ?></span>
                                        <div class="title">
                                            <h1><?php echo $s['Date'] ?> <?php echo UCFirst($s['Month']) ?></h1>
                                            <small class="text-muted"><?php echo $s['Year'] ?>, <?php echo $s['Time'] ?></small>
                                        </div>
                                        <p><?php echo $s['Title'] ?>
                                            <br/> Venue : <?php echo $s['Venue'] ?></a></span></p>
                                        <p><?php echo $s['Description'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php } ?>
                        
                        
                        <?php foreach($ss as $s){ ?>
                        <article class="time-line-row alt">
                            <div class="time-line-info">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow-alt"></span>
                                        <span class="time-line-ico-box red"></span>
                                        <span class="time-line-subject red"><i class="fa fa-paw"></i><?php echo UCFirst($s['Type']) ?></span>
                                        <div class="title">
                                            <h1><?php echo $s['Date'] ?> <?php echo UCFirst($s['Month']) ?></h1>
                                            <small class="text-muted"><?php echo $s['Year'] ?>, <?php echo $s['Time'] ?></small>
                                        </div>
                                        <p><?php echo $s['Title'] ?>
                                            <br/> Venue : <?php echo $s['Venue'] ?></p>
                                            <p><?php echo $s['Description'] ?></p>
                                        </div>
                                </div>
                            </div>
                        </article>
                        <?php } ?>
                        
                    </div>
                </section>
                <section class="panel-timeline">
                    <div class="time-line-wrapper">
                        <div class="time-line-caption">
                            <h3 class="time-line-title">Yesterday</h3>
                        </div>
                        <article class="time-line-row alt">
                            <div class="time-line-info">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow-alt"></span>
                                        <span class="time-line-ico-box purple"></span>
                                        <span class="time-line-subject purple"> <i class="fa fa-users"></i> Meeting</span>
                                        <div class="title">
                                            <h1>22 June</h1>
                                            <small class="text-muted">Sunday 2014, 12:00 pm</small>
                                        </div>
                                        <p>
                                            Monthly Evulution meeting with <a href="#" class="green-color"> John Doe </a> , <a href="#" class="green-color"> Adam Smith</a> and <a href="#" class="green-color"> Pett Huu</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="time-line-row">
                            <div class="time-line-info">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow"></span>
                                        <span class="time-line-ico-box blue"></span>
                                        <span class="time-line-subject blue"><i class="fa fa-cloud-upload"></i>Task</span>
                                        <div class="title">
                                            <h1>22 June</h1>
                                            <small class="text-muted">Sunday 2014, 10:00 pm</small>
                                        </div>
                                        <p>Setup and configured full cloud server for the new project  <a href="#" class="blue-color">SlickLab</a></span></p>

                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="time-line-row alt">
                            <div class="time-line-info">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow-alt"></span>
                                        <span class="time-line-ico-box red"></span>
                                        <span class="time-line-subject red"><i class="fa fa-paw"></i> Activity</span>
                                        <div class="title">
                                            <h1>22 June</h1>
                                            <small class="text-muted">Sunday 2014, 10:00 pm</small>
                                        </div>
                                        <p><a href="#" class="red-color">Anthony Jones</a> Visited new project location and added 3 photo
                                            of the project current status</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>
                <!--timeline end-->
            </div>
            <!--body wrapper end-->


            <!--footer section start-->
            <footer>
                2015 &copy; SlickLab by VectorLab.
            </footer>
            <!--footer section end-->


            <!-- Right Slidebar start -->
            <div class="sb-slidebar sb-right sb-style-overlay">
            <div class="right-bar">

            <span class="r-close-btn sb-close"><i class="fa fa-times"></i></span>

            <ul class="nav nav-tabs nav-justified-">
                <li class="active">
                    <a href="#chat" data-toggle="tab">Chat</a>
                </li>
                <li class="">
                    <a href="#info" data-toggle="tab">Info</a>
                </li>
                <li class="">
                    <a href="#settings" data-toggle="tab">Settings</a>
                </li>
            </ul>
            <div class="tab-content">
            <div role="tabpanel" class="tab-pane active " id="chat">
                <div class="online-chat">
                    <div class="online-chat-container">
                        <div class="chat-list">
                            <h3>Chat list</h3>
                            <h5>34 Friends Online, 80 Offline</h5>
                            <a href="#" class="add-people tooltips" data-original-title="Add People" data-toggle="tooltip" data-placement="left">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="side-title">
                            <h2>online</h2>
                            <div class="title-border-row">
                                <div class="title-border"></div>
                            </div>
                        </div>

                        <ul class="team-list chat-list-side">
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img2.jpg" alt="">
                                <i class="online dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Alison Jones
                                </span>
                                        <small class="text-muted">Start exploring</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img3.jpg" alt="">
                                <i class="online dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jonathan Smith
                                </span>
                                        <small class="text-muted">Alien Inside</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img1.jpg" alt="">
                                <i class="away dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Anjelina Doe
                                </span>
                                        <small class="text-muted">Screaming...</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img3.jpg" alt="">
                                <i class="busy dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Franklin Adam
                                </span>
                                        <small class="text-muted">Don't lose the hope</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img2.jpg" alt="">
                                <i class="online dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jeff Crowford
                                </span>
                                        <small class="text-muted">Just flying</small>
                                    </div>
                                </a>
                            </li>

                        </ul>

                        <div class="side-title">
                            <h2>Offline</h2>
                            <div class="title-border-row">
                                <div class="title-border"></div>
                            </div>
                        </div>
                        <ul class="team-list chat-list-side">
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img2.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Alison Jones
                                </span>
                                        <small class="text-muted">Start exploring</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img3.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jonathan Smith
                                </span>
                                        <small class="text-muted">Alien Inside</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img1.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Anjelina Doe
                                </span>
                                        <small class="text-muted">Screaming...</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img3.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Franklin Adam
                                </span>
                                        <small class="text-muted">Don't lose the hope</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img2.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jeff Crowford
                                </span>
                                        <small class="text-muted">Just flying</small>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>


                </div>


            </div>

            <div role="tabpanel" class="tab-pane " id="info">
            <div class="chat-list info">
                <h3>Latest Information</h3>
                <a href="#" class="add-people tooltips" data-original-title="Refresh" data-toggle="tooltip" data-placement="left">
                    <i class="fa fa-repeat"></i>
                </a>
            </div>
            <div class="aside-widget">
                <div class="side-title-alt">
                    <h2>Revenue</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info">
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle green-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Received Money from John Doe
                            </span>
                            <span class="value green-color">$12300</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle purple-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Total Admin Template Sales
                            </span>
                            <span class="value purple-color">$40100</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle red-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Monty Revenue
                            </span>
                            <span class="value red-color">$322300</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle blue-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Received Money from John Doe
                            </span>
                            <span class="value blue-color">$1520</span>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="aside-widget">

                <div class="side-title-alt">
                    <h2>Statistics</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info statistics border-less-list">
                    <li>
                        <div class="inline">
                                    <span class="name">
                                         Foreign Visit
                                    </span>
                            <small class="text-muted">25% Increase</small>
                        </div>
                                <span class="thumb-small">
                                    <span id="foreign-visit" class="chart"></span>
                                </span>
                    </li>
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Montly Visit
                            </span>
                            <small class="text-muted">Average visit 12% Increase</small>
                        </div>
                                <span class="thumb-small">
                                    <span id="monthly-visit" class="chart"></span>
                                </span>
                    </li>
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Unique Visit
                            </span>
                            <small class="text-muted">35% unique visitor </small>
                        </div>
                                <span class="thumb-small">
                                    <span id="unique-visit" class="chart"></span>
                                </span>
                    </li>
                </ul>
            </div>

            <div class="aside-widget">
                <div class="side-title-alt">
                    <h2>Notification</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info border-less-list">
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-bell green-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Meeting with John Doe at
                            </span>
                            <span class="value text-muted">11.30 am</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-users green-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                3 membership request pending
                            </span>
                            <span class="value text-muted">John, Smith, Lira</span>
                        </div>
                    </li>
                </ul>

            </div>


            <div class="aside-widget">


                <div class="side-title-alt">
                    <h2>System</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info border-less-list">
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Received database error report from hosting provider
                            </span>
                            <span class="value text-muted">11.30 am</span>
                        </div>
                    </li>
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Hosting Renew notification
                            </span>
                            <span class="value text-muted">12.00 pm</span>
                        </div>
                    </li>

                </ul>
            </div>


            <div class="aside-widget">
                <div class="side-title-alt">
                    <h2>Work Progress</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info border-less-list sale-monitor">
                    <li>
                        <div class="states">
                            <div class="info">
                                <div class="desc pull-left">Server Setup and Configuration</div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                            </div>
                            <div class="info">
                                <small class="percent pull-left text-muted">50% completed</small>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="states">
                            <div class="info">
                                <div class="desc pull-left">Website Design & Development</div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                            </div>
                            <div class="info">
                                <small class="percent pull-left text-muted">85% completed</small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            </div>

            <div role="tabpanel" class="tab-pane " id="settings">
                <div class="chat-list bottom-border settings-head">
                    <h3>Account Setting</h3>
                    <h5>Configure your account as per your need.</h5>
                </div>
                <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                    <li>
                        <div class="inline">
                                <span class="name">
                                Make my feature post public?
                            </span>
                            <small class="text-muted">Everyone will be able to see, like, comment
                                and share your feature post.</small>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small" checked/>
                        </span>
                    </li>
                    <li>
                        <div class="inline">
                                <span class="name">
                                Show offline Contacts
                            </span>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit.</small>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small2" checked/>
                        </span>
                    </li>

                    <li>
                        <div class="inline">
                                <span class="name">
                                Everyone will see my stuff
                            </span>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit.</small>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small3"/>
                        </span>
                    </li>

                </ul>

                <div class="chat-list bottom-border settings-head">
                    <h3>General Setting</h3>
                    <h5>Configure your account as per your need.</h5>
                </div>
                <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                    <li>
                        <div class="inline">
                                <span class="name">
                                Show me Online
                            </span>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small4" checked/>
                        </span>
                    </li>
                    <li>
                        <div class="inline">
                                <span class="name">
                                Status visible to all
                            </span>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small5" />
                        </span>
                    </li>

                    <li>
                        <div class="inline">
                                <span class="name">
                                Show my work progess to all
                            </span>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small6" checked/>
                        </span>
                    </li>

                </ul>

            </div>

            </div>
            </div>
            </div>
            <!-- Right Slidebar end -->

        </div>
        <!-- body content end-->
    </section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
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


<!--common scripts for all pages-->
<script src="js/scripts.js"></script>


</body>
</html>
