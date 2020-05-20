<?php
$conn=new mysqli("localhost","root","","root");

if(isset($_POST['submit']))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$Websitetype=$_POST['Websitetype'];
	$WebpageRequired=$_POST['WebpageRequired'];
	$Contentwriting=$_POST['Contentwriting'];
	$developmenttime=$_POST['developmenttime'];
	$HostingServices=$_POST['HostingServices'];
	$DomainName=$_POST['DomainName'];


	$sql="insert into tbl_conv values('$firstname','$lastname','$email','$phone','$Websitetype','$WebpageRequired','$Contentwriting','$developmenttime','$HostingServices','$DomainName')";
	if(mysqli_query($conn,$sql)==True)
	{
		echo "<script> alert('Inserted Successfully') </script>";
	 header("Location:index2.php");
	}
	else
	{  
		echo "<script> alert('Not inserted Successfully') </script>";
	}
 	
}
else echo "error_log";
mysqli_close($conn);

?>