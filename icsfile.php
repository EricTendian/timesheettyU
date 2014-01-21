<?php

$id=$_GET['id'];
$ics = file_get_contents('icsfiles/'.$id.'.ics');
$filename = hash("sha256", $id);
header('Content-type: text/calendar; charset=utf-8');
header('Content-disposition: inline; filename=my_class_schedule.ics');
echo $ics;

?>