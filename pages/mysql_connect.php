<?php
$link = mysqli_connect("localhost", "root", "", "oldstudent_db");
if(!$link) { exit("Can not connect database"); }
mysqli_set_charset($link, "utf8");
?>