<?php
include "connection.php";
$id=$_REQUEST['zz'];
$nm=$_REQUEST['t1'];
$em=$_REQUEST['t2'];
$mob=$_REQUEST['t3'];
$im=$_FILES['t4'] ['name'];
$con=$_REQUEST['t5'];
$ad=$_REQUEST['t6'];

move_uploaded_file($_FILES['t4']['tmp_name'],"upload/".$im);
 $sql="update information set name='$nm',email='$em',mobile='$mob',image='$im',country='$con',address='$ad' where id='$id'";
 $res=mysqli_query($conn,$sql);
header("location:form1.php");
?>