<?php
include 'connection.php';
$uid=$_REQUEST['yy'];
$sql="select * from information where id='$uid'";
$res=mysqli_query($conn,$sql);
$arr=mysqli_fetch_array($res);
?>
<form method="post" action="edit_cs.php" enctype="multipart/form-data">
<input type="hidden" name="zz" value="<?php echo $arr['id']; ?>">
<table align="center">
<tr>
<td>name</td>
<td><input type="text" name="t1" value="<?php echo $arr['name']; ?>"/></td>
</tr>
<tr>
<td>email</td>
<td><input type="text" name="t2" value="<?php echo $arr['email'];?>"/></td>
</tr>
<tr>
<td>mobileno</td>
<td><input type="text" name="t3" value="<?php echo $arr['mobile'];?>"/></td>
</tr>
<tr>
<td>image</td>
<td><input type="file" name="t4" value=""/></td><td><img src="upload/<?php echo $arr['image']; ?>" height="150" width="150"/></td>
</tr>
<tr>
<td>country</td>
<td><input type="text" name="t5" value="<?php echo $arr['country'];?>"/></td>
</tr>
<tr>
<td>address</td>
<td><input type="text" name="t6" value="<?php echo $arr['address'];?>"/></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="sub" value="save modification">
</td>
</tr>
</table>
</form>
