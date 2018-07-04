<?php

$db=new mysqli('localhost','root','','carolina_spa');
//check conn
if($db->connect_error){
	$error=$db->connect_error;
}


?>