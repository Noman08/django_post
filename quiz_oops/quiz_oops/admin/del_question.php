<?php
include("../class/users.php");
$quiz=new users;
extract($_POST);
if($quiz->del_ques($del))
{
   $quiz->url("show_question.php?");
   return;
}

?>