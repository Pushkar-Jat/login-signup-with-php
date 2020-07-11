<form method="post" action="form2.php" enctype="multipart/form-data">
<table align="center">
<tr>
<td>name</td>
<td><input type="text" name="t1" value=""/></td>
</tr>
<tr>
<td>email</td>
<td><input type="text" name="t2" value=""/></td>
</tr>
<tr>
<td>mobileno</td>
<td><input type="text" name="t3" value=""/></td>
</tr>
<tr>
<td>image</td>
<td><input type="file" name="t4" value=""/></td>
</tr>
<tr>
<td>select country</td><td>
<select name="t5">
<option value="india">india</option>
<option value="us">us</option>
<option value="bhutan">butan</option></select></td>
</tr>
<tr>
<td>address</td>
<td><input type="text" name="t6" value=""/></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="sub" value="send">
<input type="button" name="sub1" value="cancle">
</td>
</tr>
</table>
</form>
<br />
<br />
<hr/>
<br />
<br/>
<table align="center" width="800" border="2" cellpadding="10" cellspacing="0">
<tr>
<th>S.No.</th>
<th>Name</th>
<th>Email id</th>
<th>Mobile no.</th>
<th>Image</th>
<th>Country</th>
<th>Address</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
include "connection.php";
$sql="select * from information";
$res=mysqli_query($conn,$sql);
while($arr=mysqli_fetch_array($res))
{

?>
<tr>
<td><?php echo $arr['id']; ?></td>
<td><?php echo $arr['name']; ?></td>
<td><?php echo $arr['email']; ?></td>
<td><?php echo $arr['mobile']; ?></td>
<td><img src="upload/<?php echo $arr['image']; ?>" height="150" width="150"/></td>
<td><?php echo $arr['country']; ?></td>
<td><?php echo $arr['address']; ?></td>
<td><a href="edit.php?yy=<?php echo $arr['id']; ?>">Edit</a></td>
<td><a href="delete.php?xx=<?php echo $arr['id']; ?>">Delete</a></td>
</tr>
<?php
}
?>
</table>