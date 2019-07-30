<?php
include("class/users.php");
$register=new users;
extract($_POST);
$img_name=$_FILES['img']['name'];
$tmp_name=$_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name,"img/".$img_name);
if($r==null || $n==null || $e==null || $p==null || $img_name==null)
{
   $register->url("index.php?run=blank");
   return;
}
$query="select name from signup where  email='$e' or st_id='r'";
if($register->signup($query)!=null)
{
   $register->url("index.php?run=fail");
}
$query="insert into signup values ('$r','$n','$e','$p','$img_name')";
if($register->signup($query))
{
   $register->url("index.php?run=success");
}

?>
