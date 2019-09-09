
<?php
$db->open('data/mydb.db'); 
 $userinfo = $db->query('SELECT name, email FROM cake');

 $command = "SELECT ID, name, email FROM cake";
 
 $info = $db->query(command);

while($tableinfo = $info->fetch_assoc()) {

 echo "<tr><td>" . $info["ID"]. "</td><td>" . $info["name"] . "</td><td>" . $info["email"]. "</td><tr>";

