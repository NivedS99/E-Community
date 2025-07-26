<?php
session_start();

$servername = "localhost";
$username = "root";
$password="";
$dbname = "e-community";

$conn = mysqli_connect($servername, $username, $password) or die('Connection Failed');
mysqli_select_db($conn,$dbname) or die('No database found');

if(isset($_POST['submit']))
{
$sent_date=$_POST['date'];
  $name = $_POST['name'];
  $feedback = $_POST['message'];
$type='resident';
  

  $sql = "INSERT INTO feedback_tb(sent_date,name,feedback,type) values ('$sent_date','$name','$feedback','$type')";
  $run=mysqli_query($conn,$sql);
if($run)
{
	echo "<script>alert('Feedback sent successfully');</script>";
	
}
else
{
	echo "<script>alert('Feedback could not be sent');</script>";
	header("location:userhome.php");
}
}
?>