<?php

include("../class/users.php");
$quiz=new users;

extract($_POST);



if($quiz->del_sub($cat))
{
   $quiz->url("home.php?");
   return;
}


?>