<?php
include("../class/users.php");
$change_pass=new users;
extract($_POST);
$change_pass->password($p1,$p2);

   $change_pass->url("home.php");

 


?>