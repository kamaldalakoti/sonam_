<?php
include 'connect.php';

if(isset($_POST['submit']))
{


$name=$_POST['NAME'];
$email=$_POST['EMAIL'];
$course=$_POST['COURSE'];

$mobile=$_POST['MOBILE'];
$pass=$_POST['MESSAGE'];
$conn =mysqli_connect('localhost','root','','datflair');

$query = "INSERT INTO `student_details`( `NAME`, `EMAIL`, `COURSE`, `MOBILE`, `MESSAGE` ) VALUES ('$name','$email','$course','$mobile','$pass')";
$querywalk = mysqli_query($conn,$query);
if($querywalk){
    header('location:table.php');

}
else{
    echo "why not";
}

}

?>