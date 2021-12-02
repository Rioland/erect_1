<?php
require "./DataBase.php";
$user=$_SESSION['USER'];
$vm=explode("_",DataBase::getMessage($user->id)[0]->FID);
DataBase::autoReload($user->id);
print_r($user);




?>