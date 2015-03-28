<?php 
	   echo '<h1 style="color:red" > <p align="center">Profil</p> </h1>'; 
	  echo '<hr style="height:3;border-bottom: 5px;color:black; background-color:black; height:5px;" />'; 
	
    foreach($test as $a)
	{
		echo "<p> Pseudo :".$a['User']['username']; echo $this->Html->image('modif.jpg');echo'</p>'; 
		echo "<p> Email :".$a['User']['email']; echo $this->Html->image('modif.jpg'); echo'</p>'; 
		echo "<p> Age :".$a['User']['age'];echo $this->Html->image('modif.jpg'); echo'</p>'; 
	}
	
?>
