<?php 
require config.inc.php
	  if(isset($_POST['submit'])){ 
	  if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
	  $name=$_GET['name']; 
	  //connect  to the database 
	  $db=mysql_connect  ($db_hostname, $db_username,  $db_password) or die ('I cannot connect to the database  because: ' . mysql_error()); 
	  //-select  the database to use 
	  $mydb=mysql_select_db($db_database); 
	  //-query  the database table 
	  $sql="SELECT  ID, Naam FROM Aquarium WHERE Naam LIKE '%" . $name .  "%' "; 
	  //-run  the query against the mysql query function 
	  $result=mysql_query($sql); 
	  //-create  while loop and loop through result set 
	  while($row=mysql_fetch_array($result)){ 
	          $FirstName  =$row['Naam']; 
	          
	          $ID=$row['ID']; 
	  //-display the result of the array 
	  echo "<ul>\n"; 
	  echo "<li>" . "<a  href=\"Zoekbar.php?id=$ID&submit=Search\">"   .$FirstName . " </a></li>\n"; 
	  echo "</ul>"; 
	  } 
	  } 
	  else{ 
	  echo  "<p>Please enter a search query</p>"; 
	  } 
	  } 
	  } 
	?>