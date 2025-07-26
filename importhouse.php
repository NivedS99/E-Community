<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "e-community";

$conn = mysqli_connect($servername, $username, $password) or die('Connection Failed');
mysqli_select_db($conn,$dbname) or die('No database found');

echo $uploadfile=$_FILES['uploadfile']['tmp_name'];
require 'Classes/PHPExcel-1.8.1.php';
require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet)
{
  $highestrow=$woksheet->getHighestRow();
  for($row=0;$row<$highestrow;$row++)
  {
    $house_no=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
     $house_name=$worksheet->getCellByColumnAndRow(1,$row)->getValue();
     $vacancy=$worksheet->getCellByColumnAndRow(2,$row)->getValue();
   if($house_no!='')
   {
    $insertqry="INSERT INTO houses_tb (house_no,house_name,vacancy)VALUES('$house_no','$house_name','$vacancy')";
    $res=mysqli_query($conn,$insertqry);

   }

    
  }
}
header('location:addhouse.php');
?>


