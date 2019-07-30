<?php

include("../class/users.php");
$quiz=new users;
$cat=$_SESSION['cat'];
echo "uoguoi";
extract($_POST);
$qus=htmlentities($qus);
$option1=htmlentities($op1);
$option2=htmlentities($op2);
$option3=htmlentities($op3);
$option4=htmlentities($op4);
$ans=htmlentities($ans);

$array=[$option1,$option2,$option3,$option4];
$ans=array_search($ans,$array);
$query="insert into questions values ('','$qus','$option1','$option2','$option3','$option4','$ans','$cat')";

  if( $ans==null || $cat==null)
{

   $quiz->url("make_ques.php?msg=blank");
   return;
}

if($quiz->add_quiz($query))
{
   $quiz->url("make_ques.php?msg=success");
   return;
}
else
{
$quiz->url("make_ques.php?msg=repeat");
   return;
}


?>