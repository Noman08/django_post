<?php

include("../class/users.php");
$qus=new users;
extract($_POST);
$_SESSION['cat_del']=$cat;
$qus->url("show_question.php?");
?>