<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

  <title>E-Community</title>
 
<style>

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.top-container {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

.header {
  padding: 10px 16px;
  background: black;
  color: #f1f1f1;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
table {

  width: 70%;
  color: #d64d27;
  font-family: serif;
  font-size: 25px;
  text-align: left;
  background-color: white;
  border-color: white;
 }
tr:nth-child(1)
{
  background-color:#d64d27;
  color:white; 
}
.button{
  position:absolute;
  top:50%;
  background-color: #d64d27;
  color:white;
}
h1{
  color:black;
}
 input[type=submit]{
    background-color: #eb4c34;
  }
 
</style>
</head>
<body bgcolor="#ffffff">
<div class="header" id="myHeader">
  <h2>E-Community</h2>
</div>
<table align="center">
  <h1 align="center"><u>Resident Details</u></h1>
  <tr>
    <th>Resident Name</th>
    <th>Contact No</th>
    <th>Email</th>
    <th>House No</th>
    <th>Username</th>
  </tr>
  <?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "e-community";

$conn = mysqli_connect($servername, $username, $password) or die('Connection Failed');
mysqli_select_db($conn,$dbname) or die('No database found');

$sql="SELECT rname,number1,eid,house_no,uname FROM residenttemp_tb";
$run = mysqli_query($conn,$sql);
if($run-> num_rows > 0)
{
  while ($row = $run-> fetch_assoc()){
    echo "<tr><td>".$row["rname"]."</td><td>".$row["number1"]."</td><td>".$row["eid"]."</td><td>".$row["house_no"]."</td><td>".$row["uname"]."</td></tr>";
      }
      echo "</table>";
    }
    else
    {
      echo "0 result";
    }
    $conn-> close();
?>
</table>
<br><br><br>
<center>
  <div class="container box">

<a href="upordel_res.php"><input type="submit" name="update" class="btn btn-info" value="Update/Delete"></a>

<a href="trialadmin.php"><input type="submit" name="goback" class="btn btn-info" value="Go Back"  /></a>

</div>

</center>
</body>
</html>
