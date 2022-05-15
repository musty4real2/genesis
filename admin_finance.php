<?php include("header.php");

$host='localhost';
$user='root';
$pass='';
$db='adams';

$con=mysql_connect($host,$user,$pass);
mysql_select_db($db, $con);


$Name = $_POST['Name'];
$Month = $_POST['Month'];
$Date =$_POST['Date'];
$Description = $_POST['Description'];
$Amount = $_POST['Amount'];



$Name = stripslashes($Name);
$Month = stripslashes($Month);
$Date = stripslashes($Date);
$Description = stripslashes($Description);
$Amount= stripslashes($Amount);


$Name = mysql_real_escape_string($Name);
$Month = mysql_real_escape_string($Month);
$Date = mysql_real_escape_string($Date);
$Description = mysql_real_escape_string($Description);
$Amount = mysql_real_escape_string($Amount);

$sql="insert into finance (Name,Month,Date,Description,Amount) VALUES ('$Name', '$Month', '$Date', '$Description', '$Amount')";

$query=mysql_query($sql) or die(mysql_error());
if($query){
	?>
	
	<div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Successfully Added!</strong> 
</div>
	
	<?php
}
	

// //connect to the server and select database
// mysql_connect("localhost", "root", "");
// mysq;_select_db("login");


// $result = mysql_query("select * from admin_submit where Name= '$Name', Events_type = 'Events_Type', Amount_Paid ='Amount_Paid' and Date = '$Date') 
// 					or die("failed to query database "mysql_error());



// $query=mysqli_query($con,$sql);
// if($query)
// 	echo 'data inserted successfully';
	
				
	include("footer.php"); 
?>