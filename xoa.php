<?php 
	$serial=$_GET['serial'];
	mysql_connect('localhost','root','');
	mysql_select_db('infdata');
	$sql="DELETE FROM products WHERE serial='".$serial."'";
	$qr=mysql_query($sql);
	header('location:index.php');
?>