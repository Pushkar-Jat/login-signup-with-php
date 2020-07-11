<?php
include 'connection.php';
$uid=$_REQUEST['xx'];
$sql="delete from information where id='$uid'";
mysqli_query($conn,$sql);
header("location:form1.php");
?>