<?php

include("../class/users.php");
$quiz=new users;

extract($_POST);

$query="update set_time set time='$minute' where cat_id='$cat'";

 /* if($qus==null || $option1==null || $option2==null || $option3==null || $option4==null || $ans==null || $cat==null)
{
echo 'kuyhgyuj';
   $quiz->url("make_ques.php?msg=blank");
   return;
}*/

if($quiz->set_time($query))
{
   $quiz->url("home.php?");
   return;
}


?>