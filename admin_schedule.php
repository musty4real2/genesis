<?php include("header.php");

$host='localhost';
$user='root';
$pass='';
$db='adams';

$con=mysql_connect($host,$user,$pass);
mysql_select_db($db, $con);


$Month = $_POST['Month'];
$Date =$_POST['Date'];
$Time = $_POST['Time'];
$Title = $_POST['Title'];
$Venue = $_POST['Venue'];
$Description = $_POST['Description'];



$Month = stripslashes($Month);
$Date = stripslashes($Date);
$Time= stripslashes($Time);
$Title = stripslashes($Title);
$Venue = stripslashes($Venue);
$Description = stripslashes($Description);


$Month = mysql_real_escape_string($Month);
$Date = mysql_real_escape_string($Date);
$Time = mysql_real_escape_string($Time);
$Title = mysql_real_escape_string($Title);
$Venue = mysql_real_escape_string($Venue);
$Description = mysql_real_escape_string($Description);

$sql="insert into schedule (Month,Date,Time,Title,Venue,Description) VALUES ('$Month', '$Date', '$Time', '$Title', '$Venue', '$Description')";

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