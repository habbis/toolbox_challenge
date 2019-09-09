<?php 

$db->open('data/mydb.db'); 
 $userinfo = $db->query('SELECT name, email FROM cake');


?>