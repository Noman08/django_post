<?php

include("../class/users.php");
$quiz=new users;

extract($_POST);

if($sub==null )
{

   $quiz->url("make_ques.php?msg=blank");
   return;
}

if($quiz->add_sub($sub))
{
   $quiz->url("home.php?");
   return;
}


?>