<?php
session_start();
require "DataBase.php";

$conn = DataBase::getConn();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    // VerifieCard
      if (isset($_REQUEST['VerifieCard'])) {
            try {
          $id = $_REQUEST['id'];
          $q="UPDATE `otp` SET `verify`=? WHERE otpid=?";
          $stm=$conn->prepare($q);
          $stm->execute([true,$id]);
          if($stm->rowCount()>0){
              echo "verified";
          }else{
              echo "Not Verified";
          }
          
            }
         catch (\Throwable $th) {
            echo $th;
        }
          
      }
    
        // login
    if (isset($_REQUEST['form'])) {
        try {
            parse_str($_REQUEST['form'], $data);
            $q = "SELECT * FROM `Admin` WHERE `username`=? AND `password`=?";
            $stm = $conn->prepare($q);
            $stm->execute([$data['username'], $data['password']]);
            if ($stm->rowCount() > 0) {
                
                $_SESSION['admin'] = $stm->fetch()??"how ejkscbsnbcsnd";
                echo true;
            } else {
                echo "invalid Login";
            }
        } catch (\Throwable $th) {
            echo $th;
        }

    }
    
    
    
//    message to public PublicMessage
    if (isset($_REQUEST['PublicMessage'])) {
        try {
            parse_str($_REQUEST['PublicMessage'], $data);
            $q1 = "SELECT * FROM `users`";
            $stm = $conn->query($q1);
            
            
            for ($i = 0; $i < $stm->rowCount(); $i++) {
             $dd=$stm->fetch();
       
             $q = "INSERT INTO `notification`(`reciverid`, `broadcast`, `type`) VALUES (?,?,?)";
                $stm1 = $conn->prepare($q);
                $stm1->bindValue(1,$dd->id);
                $stm1->bindValue(2,$data['message']);
                $stm1->bindValue(3,$data["type"]);
                $stm1->execute();
            }

            echo "BroadCast send";
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    // paging
    if (isset($_REQUEST["router"])) {
        $_SESSION['PAGE'] = $_REQUEST["router"];
        echo $_SESSION['PAGE'];
    }
    if (isset($_REQUEST["router"]) and isset($_REQUEST["toPublic"])) {
        $_SESSION['PAGE'] = $_REQUEST["router"];
        $_SESSION['toPublic']=$_REQUEST['toPublic'];
        echo $_SESSION['PAGE'];
    }
    // delete card
    if (isset($_REQUEST['deleteCard'])) {
        try {
            $id = $_REQUEST['id'];
            $q = "DELETE FROM `cards` WHERE sn=?";
            $st = $conn->prepare($q);
            $st->bindValue(1, $id);
            $st->execute();
            echo "Deleted";
        } catch (\Throwable $th) {
            echo $th;
        }

    }
    // delete otp
     if (isset($_REQUEST['deleteOtp'])) {
        try {
            $id = $_REQUEST['id'];
            $q = "DELETE FROM `otp` WHERE otpid=?";
            $st = $conn->prepare($q);
            $st->bindValue(1, $id);
            $st->execute();
            echo "Deleted";
        } catch (\Throwable $th) {
            echo $th;
        }

    }
    // delete user
    if (isset($_REQUEST['deleteUser'])) {
        try {
            $id = $_REQUEST['id'];
            $q = "DELETE FROM `users` WHERE sn=?";
            $st = $conn->prepare($q);
            $st->bindValue(1, $id);
            $st->execute();
            echo "Deleted";
        } catch (\Throwable $th) {
            echo $th;
        }

    }
// delete admin
    if (isset($_REQUEST['deleteAdmin'])) {
        try {
            $id = $_REQUEST['id'];
            $q = "DELETE FROM `users` WHERE sn=?";
            $st = $conn->prepare($q);
            $st->bindValue(1, $id);
            $st->execute();
            echo "Deleted";
        } catch (\Throwable $th) {
            echo $th;
        }

    }

    if (isset($_REQUEST['deleteWith'])) {
        try {
            $id = $_REQUEST['id'];
            $q = "DELETE FROM `withdraw` WHERE sn=?";
            $st = $conn->prepare($q);
            $st->bindValue(1, $id);
            $st->execute();
            echo "Deleted";
        } catch (\Throwable $th) {
            echo $th;
        }

    }

    // add admin
    if (isset($_REQUEST['AddAdmin'])) {
        try {
            parse_str($_REQUEST['AddAdmin'], $data);
            $q = "INSERT INTO `Admin`(`name`, `username`, `password`) VALUES (?,?,?)";
            $stm = $conn->prepare($q);
            $stm->execute([$data['fname'], $data['username'], $data['password']]);
            echo "Record Saved";
        } catch (\Throwable $th) {
            echo $th;
        }
    }

// logout
    if (isset($_REQUEST['logout'])) {
        echo session_destroy();
    }
    // ingle notification
    if (isset($_REQUEST['SingleMessage'])) {
        try {
            parse_str($_REQUEST['SingleMessage'], $data);
            $rid = $_REQUEST['id'];
            $q = "INSERT INTO `notification`(`reciverid`, `broadcast`, `type`) VALUES (?,?,?)";
            $stm = $conn->prepare($q);
            $stm->execute([$rid, $data['message'], $data["type"]]);
            echo "Message send";
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    if (isset($_REQUEST['wpaidid'])) {
        try {
            parse_str($_REQUEST['wpaidid'], $data);
            $rid = $_REQUEST['wpaidid'];
            // echo $rid;
            $q = "UPDATE `withdraw` SET `status`=? WHERE `sn`=?";
            $stm = $conn->prepare($q);
            $stm->execute(["Paid", $rid]);
            if ($stm->rowCount() > 0) {
                echo "successfull";
            } else {
                echo "No Changes";
            }

        } catch (\Throwable $th) {
            echo $th;
        }
    }

}
ob_flush();
