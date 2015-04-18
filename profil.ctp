<?php   


echo '<table>';
    foreach($test as $champs)
	echo '<h3> Profil - '.$champs['User']['username'].' </h3>';
	{
		echo '<tr height="50px">
		<td></td>
		<td><b> Pseudo : </b></td>
		<td>'.$champs['User']['username'].' </td>
		<td><button type="button" class="btn btn-default">
				<span class="glyphicon glyphicon-pencil"></span>
			</button>
			</td>
	</tr>'; 
		echo '<tr height="50px">
		<td></td>
		<td><b> Email : </b></td>
		<td>'.$champs['User']['email'].' </td>
		<td><button type="button" class="btn btn-default">
				<span class="glyphicon glyphicon-pencil"></span>
			</button>
			</td>
	</tr>'; 
		echo '<tr height="50px">
		<td width="10%"></td>
		<td width="30%"><b> Age : </b></td>
		<td align="left">'.$champs['User']['age'].' </td>
		<td align="left" width="10%"><button type="button" class="btn btn-default">
				<span class="glyphicon glyphicon-pencil"></span>
			</button>
			</td>
	</tr>'; 
	}
	
echo'</table>';
?>
