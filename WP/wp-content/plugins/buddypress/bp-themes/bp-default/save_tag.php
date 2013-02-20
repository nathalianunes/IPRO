<?php

$user="languagelink_db";
$password="NTnwSC8n";
$database="languagelink_test";
$host = "database.languagelink.ideashop-iit.com";
$db = mysqli_connect($host,$user,$password);
mysqli_select_db($db, $database) or die( "Unable to select database");

$tag = $_POST['data'];

$exist = "SELECT id FROM `languagelink_test`.`language_tag` WHERE tag = '".$tag."';";
//$result = mysqli_query($db, $query);
$row = mysqli_fetch_array(mysqli_query($db, $exist), MYSQLI_NUM);
//$len = mysql_fetch_lengths($result);
if (empty($row)) {
	$query = "INSERT INTO  `languagelink_test`.`language_tag` (`id` , `tag`) VALUES (NULL ,  '".$tag."');"; 
	mysqli_query($db, $query);	
	$exist = "SELECT id FROM `languagelink_test`.`language_tag` WHERE tag = '".$tag."';";
	$result = mysqli_query($db, $exist);
	$row = mysqli_fetch_array($result, MYSQL_NUM);
}
//$row = mysql_fetch_row($result);
mysqli_close($db);
echo $row[0];


//return $id;
?>