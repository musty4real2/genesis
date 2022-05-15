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



<!-- page head start-->
<div class="page-head">
    <h3>
        Tables
    </h3>
    <span class="sub-title">Welcome to Genesis tables</span>
    
</div>
<!-- page head end-->

<form action="admin_finance.php" method="POST">

<!--body wrapper start-->
<div class="wrapper">

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading ">
                    Data Table
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
                                
                                <div class="col-md-2">
                                        <p>Date</p>
                                        <div class="form-group">
							                  <select class="form-control" name="Date" palceholder="Date">Select Date</option>
														<option value='Date'></option>
														<option value='01'>01</option>
														<option value='02'>02</option>
														<option value='03'>03</option>
														<option value='04'>04</option>
														<option value='05'>05</option>
														<option value='06'>06</option>
														<option value='07'>07</option>
														<option value='08'>08</option>
														<option value='09'>09</option>
														<option value='10'>10</option>
														<option value='11'>11</option>
														<option value='12'>12</option>
														<option value='13'>13</option>
														<option value='14'>14</option>
														<option value='15'>15</option>
														<option value='16'>16</option>
														<option value='17'>17</option>
														<option value='18'>18</option>
														<option value='19'>19</option>
														<option value='20'>20</option>
														<option value='21'>21</option>
														<option value='22'>22</option>
														<option value='23'>23</option>
														<option value='24'>24</option>
														<option value='25'>25</option>
														<option value='26'>26</option>
														<option value='27'>27</option>
														<option value='28'>28</option>
														<option value='29'>29</option>
														<option value='30'>30</option>
														<option value='31'>31</option>
														</select>
                                           <div class="help-block with-errors"></div>
						                 </div>
                                </div>
                                
                                <div class="col-md-2">
                                        <p>Month</p>
                                        <div class="form-group">
							                <select class="form-control" name="Month" placeholder="Month">Select Month</option>
                                                    <option value='Month'></option>
													<option value='January'>January</option>
													<option value='Febuary'>February</option>
													<option value='March'>March</option>
													<option value='April'>April</option>
													<option value='May'>May</option>
													<option value='June'>June</option>
													<option value='July'>July</option>
													<option value='August'>August</option>
													<option value='September'>September</option>
													<option value='October'>October</option>
													<option value='November'>November</option>
													<option value='December'>December</option>
													</select>
                                            <div class="help-block with-errors"></div>
						                 </div>
                                 </div>
                                 
                                 <div class="col-md-2">
                                        <p>Description</p>
                                        <div class="form-group">
							                  <select class="form-control" name="Description" palceholder="Date">
                                                  <option></option>
                                                  <option>Paid</option>
                                                  <option>Not Paid</option>
                                                  <option>Balance</option>
                                              </select>
												<div class="help-block with-errors"></div>
						                 </div>
                                 </div>
                                 
                                 <div class="col-md-2">
                                        <p>Amount</p>
                                        <div class="form-group">
							                  <input type="text" class="form-control" name="Amount" placeholder=" " />
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
