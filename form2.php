<?php
include "connection.php";
$nm=$_REQUEST['t1'];
$em=$_REQUEST['t2'];
$mob=$_REQUEST['t3'];
$im=$_FILES['t4'] ['name'];
$con=$_REQUEST['t5'];
$ad=$_REQUEST['t6'];

move_uploaded_file($_FILES['t4']['tmp_name'],"upload/".$im);
 $sql="insert into information (name,email,mobile,image,country,address) values ('$nm','$em','$mob','$im','$con','$ad')";
mysqli_query($conn,$sql);
header("location:form1.php");
?>