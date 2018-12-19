<?php
mysql_connect("localhost","root","");
mysql_select_db("mujahid");

if(isset($_POST['done'])){
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$insert= mysql_query("insert into khan(name,email,pass) values ('$name','$email','$pass')");

if(!$insert)
{
	echo mysql_error();
}
else
{
	echo "Data Inserted";
}
}
?>
<form method="POST">
	<table border="2px" align="center" cellspacing="0px">
	<tr>
		<td colspan="2" bgcolor="yellow"><h1>Student Registration form</h1><td>
		</td></td>
	</tr>
	<tr>
		<td>Student Name</td>
		<td>
	<input type="text" name="name" placeholder="name">
		</td>
		</tr>
	<tr>
		<td>Email</td>
		<td>
	<input type="email" name="email" placeholder="email">
		</td>
	</tr>
	<tr>
		<td>Student password</td>
		<td>
	<input type="password" name="pass" placeholder="pass">
		</td>
	</tr>
	<tr>
		<td colspan="2">
	<input type="submit" name="done" height="100%" width="100%">
		</td>
		</tr>
	</form>
	</table>
	<tabel border="2px">
	<?php
	mysql_connect('localhost','root','');
	$bd = mysql_select_db('mujahid');
	?>
	<table border="2px">
		<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Edit</th>
		<th>Delete</th>
		</tr>
	<?php
$select = mysql_query("select * from khan");
while($data=mysql_fetch_array($select))
{
	?>
	<tr>
	<td><?php echo $data['email']; ?></td>
	</tr>
	<?php
}
?>

</table>