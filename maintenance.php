<?php include("header.php");

$host='localhost';
$user='root';
$pass='';
$db='adams';

$con=mysql_connect($host,$user,$pass);
mysql_select_db($db, $con);

$sql = "SELECT * FROM maintenance";

$result = mysql_query($sql) or die(mysql_error());

while($row = mysql_fetch_array($result)){
    $ss[] = $row;
}

?>

<!-- page head start-->
<div class="page-head">
    <h3>
        Tables
    </h3>
    <span class="sub-title">Welcome to Genesis tables</span>
    
</div>
<!-- page head end-->

<form action="admin_maintenance.php" method="POST">

<!--body wrapper start-->
<div class="wrapper">

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading ">
                    Stock Table
                </header>
                <table class="table convert-data-table data-table">
					 <div class="panel-body">
                        <div class="form-group">
                                <div class="col-md-3">
                                        <p> Name </p>
                                        <div class="form-group">
							                  <input type="text" class="form-control" name="Name" placeholder=" " />
							                  <div class="help-block with-errors"></div>
						                 </div>
                                    </div>
                                
                                <div class="col-md-3">
                                   <p>Item</p>
                                   <div class="form-group">
							                  <input type="text" class="form-control" name="Item" placeholder=" " />
							                  <div class="help-block with-errors"></div>
						                 </div>
                                </div>
                                        
                                
                                <div class="col-md-3">
                                  <p>Stock Remaining</p>
                                    <div class="form-group">
							                  <input type="text" class="form-control" name="Stock_Remaining" placeholder=" " />
							                  <div class="help-block with-errors"></div>
						                 </div>
                                       
                                 </div>
                                 
                                 <div class="col-md-3">
                                        <p>Description</p>
                                        <div class="form-group">
							                  <select class="form-control" name="Description" palceholder="Date">
                                                  <option></option>
                                                  <option>Available</option>
                                                  <option>Not Available</option>
                                                </select>
												<div class="help-block with-errors"></div>
						                 </div>
                                 </div>
                                 
                                 
                             <br />
                             <br />
                             <br />
                             <br />
                         &nbsp; &nbsp;&nbsp;<button type="submit" class="btn btn-info">Submit</button>
                        
                    </div>
                </section>
            </div>
				</table>
                </section>
            </div>

        </div>


    </div>
    <!--body wrapper end-->
</form>

    <?php include("footer.php"); ?>
