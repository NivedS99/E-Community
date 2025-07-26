<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "e-community";

$conn = mysqli_connect($servername, $username, $password) or die('Connection Failed');
mysqli_select_db($conn,$dbname) or die('No database found');


if(isset($_POST['delete']))
{
$phone=$_POST['phone'];


$query = "DELETE FROM emergency_tb  WHERE phone='$phone'";
      $run = mysqli_query($conn,$query) or die('Unsuccessful');  
      
      if($run)
      {
        echo "<script> alert('Deleted Contact')</script>";
      }
      else
      {
        echo "<script> alert('Could not delete')</script>";
      }
}
?>
 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="assets/css/upordel_res.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- Body of Form starts -->
    <div class="container">
      <form method="post" autocomplete="on">
        <!--First name-->
        <div class="box">

        </div>
        <div class="box">

        </div>
        <br><br>
        <div class="box">
          <label for="phone" class="fl fontLabel"> Number</label>
              <div class="fr">
              <input type="text" name="phone" placeholder="number"
              class="textBox" autofocus="on" required >
          </div>
          <div class="clr"></div>
        </div>
        <!--First name-->

<br><br>


        
        <!---Submit Button------>
        <div class="box" style="background: #2d3e3f">
           
            
             <input type="Submit" name="delete" class="submit" value="DELETE">
        </div>
        <!---Submit Button----->
      </form>
  </div>
  <!--Body of Form ends--->
  </body>
</html>
