<?php
	mysql_connect('localhost','root','');
	$bd = mysql_select_db('mujahid');
	?>
	<?php
$select = mysql_query("select * from khan");
while($data=mysql_fetch_array($select))
{
	?>
	<?php echo $data['email']; ?>
	<?php
}
?>