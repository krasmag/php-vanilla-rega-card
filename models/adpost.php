<?php
require_once("dbconnect.php");
$sql = "SELECT  MAX(id) FROM content";
$result = $mysqli->query($sql);
$row = mysqli_fetch_array($result);
$id = $row['MAX(id)'] + 1;
$img = trim($_POST["img"]);
$heading = trim($_POST["heading"]);
$introduction = trim($_POST["introduction"]);
$content = trim($_POST["content"]); 
$result_query_insert = $mysqli->query("INSERT INTO `content` (id, img, heading, introduction, content) VALUES ('".$id."','".$img."', '".$heading."', '".$introduction."', '".$content."')");
header("HTTP/1.1 301 Moved Permanently");
header("Location: ".$address_site."/");
?>