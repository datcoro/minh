<?php 
	mysql_connect('localhost','root','');
	mysql_select_db('infdata');
	$qr=mysql_query('select * from products');
?>
<body>
<table border="1">
	<tr>
		<td>ID</td>
		<td>TEN SP</td>
		<td>GIA SP</td>
		<td>ANH</td>
		<td>CHUC NANG</td>
	</tr>
	<?php 
		while($r=mysql_fetch_array($qr)){
			echo '<tr>';
				echo '<td>'.$r['serial'].'</td>';
				echo '<td>'.$r['name'].'</td>';
				echo '<td>'.$r['price'].'</td>';
				echo '<td>'.$r['picture'].'</td>';
				echo '<td>
						<a href="them.php">THEM</a> |
						<a href="sua.php?serial='.$r['serial'].'">SUA</a> |
						<a href="xoa.php?serial='.$r['serial'].'">XOA</a>
				</td>';
			echo '</tr>';
		}
	?>
</table>
</body>