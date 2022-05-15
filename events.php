<?php include("header.php") ?>

    <!-- page head start-->
    <div class="page-head">
        <h3>
            Dashboard
        </h3>
        <span class="sub-title">Welcome to Genesis dashboard</span>
        <div class="state-information">

        </div>
    </div>
    <!-- page head end-->

    <!--body wrapper start-->
    <div class="wrapper">

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                      <b>  Events Registration </b>
                    </header>
                    
                    <form action="admin_submit.php" method="POST">
                    
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <div class="col-lg-3">
                                        <p> Name </p>
                                        <div class="form-group">
							                  <input type="text" class="form-control"  placeholder=" " />
							                  <div class="help-block with-errors"></div>
						                 </div>
                                    </div>
                                
                                <div class="col-lg-3">
                                        <p> phone Number </p>
                                        <div class="form-group">
							                  <input type="text" class="form-control"  placeholder=" " />
							                  <div class="help-block with-errors"></div>
						                 </div>
                                </div>
                                
                                <div class="col-lg-3">
                                        <p> Address </p>
                                        <div class="form-group">
							                  <input type="text" class="form-control"  placeholder=" " />
							                  <div class="help-block with-errors"></div>
						                 </div>
                                 </div>
                                 
                                 <div class="col-lg-3">
                                        <p> Awareness </p>
                                        <div class="form-group">
							                  <input type="text" class="form-control"  placeholder=" " />
							                  <div class="help-block with-errors"></div>
						                 </div>
                                 </div>
                              </div>
                               
                               <br />
                               <br />
                         &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;   <button type="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>
                </section>
            </div>
         
        </div>

    </div>
    <!--body wrapper end-->
    
    	<?php
		$host='localhost';
		$user='root';
		$pass='';
		$db='adams';

		$con=mysql_connect($host,$user,$pass);
		mysql_select_db($db, $con);
		
		$sql="SELECT * FROM events";		
		$result = mysql_query($sql) or die(mysql_error());
		
		while($row = mysql_fetch_array($result)){
			$fs[] = $row;
		}
		
		?>


<?php include("footer.php"); ?>
