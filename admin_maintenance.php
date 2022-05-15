<?php include("header.php");

$host='localhost';
$user='root';
$pass='';
$db='adams';

$con=mysql_connect($host,$user,$pass);
mysql_select_db($db, $con);


$Name = $_POST['Name'];
$Item = $_POST['Item'];
$Stock_Remaining =$_POST['Stock_Remaining'];
$Description = $_POST['Description'];



$Name = stripslashes($Name);
$Item = stripslashes($Item);
$Stock_Remaining = stripslashes($Stock_Remaining);
$Description = stripslashes($Description);


$Name = mysql_real_escape_string($Name);
$Item = mysql_real_escape_string($Item);
$Stock_Remaining = mysql_real_escape_string($Stock_Remaining);
$Description = mysql_real_escape_string($Description);

$sql="insert into maintenance (Name,Item,Stock_Remaining,Description) VALUES ('$Name', '$Item', '$Stock_Remaining', '$Description')";

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