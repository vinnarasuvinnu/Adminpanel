<?php
$now = new DateTime();
echo $now->format('Y-m-d H:i:s');    // MySQL datetime format
echo $now->getTimestamp();
$day=new DateTime(); 
echo '<br>';
echo $day->format('Y-m-d');

?>