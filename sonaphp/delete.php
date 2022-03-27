<?php
include'connect.php';
$id=$_GET['id'];
$conn =mysqli_connect('localhost','root','','datflair');
$query="DELETE FROM `student_details` WHERE id=$id";
$querywalk=mysqli_query($conn,$query);
if($querywalk){
    header('location:table.php');
}
else{
    echo"delete";
}

?>