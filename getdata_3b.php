<?php 
$link = @mysqli_connect("localhost","a0676013_alisher","1293749568","a0676013_alisher") or die ('НЕ ПОЛУЧИЛОСЬ ПОДКЛЮЧИТЬСЯ');
mysqli_select_db($link,"a0676013_alisher") or die ("НЕт такой таблицы");
$names = array();
$emails = array();
$messages = array();
$data = array();
$i=0;

mysqli_query($link,'SET NAMES utf8');

$result=mysqli_query($link,"SELECT * FROM guestbook");
while ($row=mysqli_fetch_array($result)){
    $names[$i]=$row['name'];
    $emails[$i]=$row['email'];
    $messages[$i]=$row['message'];
    $i++;
}

$data['names']=$names;
$data['emails']=$emails;
$data['messages']=$messages;
echo json_encode($data,JSON_UNESCAPED_UNICODE);

?>