<?php include("header.php");

$host='localhost';
$user='root';
$pass='';
$db='adams';

$con=mysql_connect($host,$user,$pass);
mysql_select_db($db, $con);

$Type = $_POST['Type'];
$Month = $_POST['Month'];
$Date =$_POST['Date'];
$Title = $_POST['Title'];


$Type = $_POST['Type'];
$Month = stripslashes($Month);
$Date = stripslashes($Date);
$Title = stripslashes($Title);

$Type = mysql_real_escape_string($Type);
$Month = mysql_real_escape_string($Month);
$Date = mysql_real_escape_string($Date);
$Title = mysql_real_escape_string($Title);

$sql="insert into funtions (Type,Month,Date,Title) VALUES ('$Type', $Month', '$Date', '$Title')";

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


// $result = mysql_query("select * from admin_submit where Name= '$Name', Events_type = 'Events_Type', Description_Paid ='Amount_Paid' and Date = '$Date') 
// 					or die("failed to query database "mysql_error());



// $query=mysqli_query($con,$sql);
// if($query)
// 	echo 'data inserted successfully';
	
				
	include("footer.php"); 
?>