<?php
require "./DataBase.php";
$user=$_SESSION['USER'];
print_r(DataBase::getMessage($user->id)) ;




?>