<?php

include("../class/users.php");
$qus=new users;
extract($_POST);
$_SESSION['cat']=$cat_name;
$qus->url("result.php?");
?>