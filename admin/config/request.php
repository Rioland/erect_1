<?php  
require "../../app/Apis/database/DataBase.php";
// require './MyFunctions.php';

$conn=DataBase::getConn();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_REQUEST["router"])){
      $_SESSION['PAGE']=$_REQUEST["router"];
      echo $_SESSION['PAGE']; 
    }
    if(isset($_REQUEST['deleteCard'])){
        try {
            $id=$_REQUEST['id'];
        $q="DELETE FROM `cards` WHERE sn=?";
        $st=$conn->prepare($q);
        $st->bindValue(1,$id);
        $st->execute();
        echo "Deleted";
        } catch (\Throwable $th) {
            echo $th;
        }
        


    }
    if(isset($_REQUEST['deleteUser'])){
        try {
            $id=$_REQUEST['id'];
        $q="DELETE FROM `users` WHERE sn=?";
        $st=$conn->prepare($q);
        $st->bindValue(1,$id);
        $st->execute();
        echo "Deleted";
        } catch (\Throwable $th) {
            echo $th;
        }
        


    }

    if(isset($_REQUEST['deleteAdmin'])){
        try {
            $id=$_REQUEST['id'];
        $q="DELETE FROM `users` WHERE sn=?";
        $st=$conn->prepare($q);
        $st->bindValue(1,$id);
        $st->execute();
        echo "Deleted";
        } catch (\Throwable $th) {
            echo $th;
        }
        


    }
    if(isset($_REQUEST['AddAdmin'])){
     try {
        parse_str($_REQUEST['AddAdmin'],$data);
        $q="INSERT INTO `Admin`(`name`, `username`, `password`) VALUES (?,?,?)";
        $stm=$conn->prepare($q);
        $stm->execute([$data['fname'],$data['username'],$data['password']]);
        echo "Record Saved";
     } catch (\Throwable $th) {
         echo $th;
     }
    }
    
    if(isset($_REQUEST['form'])){
        try {
            parse_str($_REQUEST['form'],$data);
            $q="SELECT * FROM `Admin` WHERE `username`=? AND `password`=?";
            $stm=$conn->prepare($q);
            $stm->execute([$data['username'],$data['password']]);
           if($stm->rowCount()>0){
               $_SESSION['ADMIN']=$stm->fetch();
               echo "true";
           }else{
               echo "invalid Login";
           }
        } catch (\Throwable $th) {
            echo $th;
        }

    }
    
}

?>