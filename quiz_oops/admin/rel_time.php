<?php

include("../class/users.php");
$quiz=new users;

extract($_POST);
$query="update set_time set rel_time='$release' where cat_id='$cat'";

if($quiz->rel_time($query))
{
   $quiz->url("home.php?");
   return;
}


?>