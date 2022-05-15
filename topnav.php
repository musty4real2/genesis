
<!-- body content start-->
<div class="body-content" style="min-height: 1200px;">

    <!-- header section start-->
    <div class="header-section">

        <!--logo and logo icon start-->
        <div class="logo dark-logo-bg hidden-xs hidden-sm">
            <a href="index.php">
                <img src=" " alt="">
                <!--<i class="fa fa-maxcdn"></i>-->
                <span class="brand-name">Genesis</span>
            </a>
        </div>

        <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
            <a href="index.php">
                <img src=" " alt="">
                <!-- <i class="fa fa-maxcdn"></i> -->
            </a>
        </div>
        <!--logo and logo icon end-->

        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-outdent"></i></a>
        <!--toggle button end-->

        <div class="notification-wrap">

        <!--right notification start-->
        <div class="right-notification">
            <ul class="notification-menu">

                <li>
                    <a href="javascript:;" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <!--<img src="img/avatar-mini.jpg" alt="">-->
                        <?php echo $loggedUser ?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu purple pull-right">
                        <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!--right notification end-->
        </div>

    </div>
    <!-- header section end-->
