<?php 
$link = @mysqli_connect("localhost","a0676013_alisher","1293749568","a0676013_alisher") or die ('НЕ ПОЛУЧИЛОСЬ ПОДКЛЮЧИТЬСЯ');
mysqli_select_db($link,"a0676013_alisher") or die ("НЕт такой таблицы");

$name=json_decode($_GET['sname']);
$email=json_decode($_GET['semail']);
$message=json_decode($_GET['smessage']);

mysqli_query($link, 'SET NAMES utf8');

$sql_add= "INSERT INTO guestbook SET name='".$name."',email='".$email."',message='".$message."'";
mysqli_query($link,$sql_add);
if(mysqli_affected_rows($link)>0)
{
    print "thx";
}
else 
{
    print "Error";
}
?>