<?php   
echo '
<h1 style="color:red" align="center"> Profil </h1>
<hr style="height:3;border-bottom: 5px;color:black; background-color:black; height:5px;" />
<h3> Profil - Toto23 </h3>		
'; 

echo '<table>';
    foreach($test as $champs)
	{
		echo '<tr>
		<td></td>
		<td> Pseudo : '.$champs['User']['username'].' </td>
		<td align="right">'.$this->Html->image("modif.jpg").'</td>
	</tr>'; 
		echo '<tr>
		<td></td>
		<td> Email : '.$champs['User']['email'].' </td>
		<td align="right">'.$this->Html->image("modif.jpg").'</td>
	</tr>'; 
		echo '<tr>
		<td width="10%"></td>
		<td width="50%"> Age : '.$champs['User']['age'].' </td>
		<td align="right" width="40%">'.$this->Html->image("modif.jpg").'</td>
	</tr>'; 
	}
	
?>
