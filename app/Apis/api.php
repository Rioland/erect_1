<?php

include 'database/DataBase.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // register
    if (!empty($_REQUEST['action']) and $_REQUEST['action'] == "register") {
        $email = htmlentities($_REQUEST['email']);
        $pass = htmlentities($_REQUEST['password']);
        $country = htmlentities($_REQUEST['country']);
        $response = DataBase::register($email, $pass, $country);
        if ($response == "true") {
            header("location:login");
        } else {
            $_SESSION['message'] = $response;
            header("location:signup");
            // echo $_SESSION['message'];
        }
    }

    // login
    if (!empty($_REQUEST['action']) and $_REQUEST['action'] == "login") {
        parse_str($_REQUEST["data"], $data);

        $email = htmlentities($data["email"]);
        $pass = htmlentities($data['password']);

        $response = DataBase::signin_user($email, $pass);

        if ($response == true) {
            echo true;
        } else {
            echo "invalid login details";
        }
    }

    //  verification
    if (!empty($_REQUEST['action']) and $_REQUEST['action'] == "sendverify") {

        $response = DataBase::updateVerifyToken();
        echo $response;
    }

    // is verify
    if (!empty($_REQUEST['action']) and $_REQUEST['action'] == "updateverify") {
        $token = $_REQUEST['v1'] . "" . $_REQUEST['v2'] . "" . $_REQUEST['v3'] . "" . $_REQUEST['v4'] . "" . $_REQUEST['v5'] . "" . $_REQUEST['v6'];

        $now = date("Y-m-d H:m:s");
        $val = DataBase::get_time($token);
        // echo "now:". $now ."latter:". $val;
        if (empty($val) or strtotime($val) < strtotime($now)) {
            $_SESSION['message'] = "Token access expired";
            header("location:buysell");
        }
        $result = DataBase::updateToken($token);

        if ($result == true) {
            $_SESSION['message'] = "your email account has been verified!!!";

            header("location:buysell");
        } else {
            $_SESSION['message'] = "not verify please try again";
            header("location:buysell");
        }
    }
    ///resetpassword

    if (!empty($_REQUEST['action']) and $_REQUEST['action'] == "reset") {
        $email = htmlentities($_REQUEST['email']);

        $isValidemail = DataBase::get_email($email);
        if ($isValidemail) {
            $token = str_shuffle("123456789");
            $token = substr($token, 0, 6);

            $updateToken = DataBase::updateresetToken($token, $email);
            if ($updateToken) {
                $sub = "Password reset message from Erectone";
                $mess = "please Enter this one time reset code <br>" . $token . "<br> please ignore if you are not the one that requested for the password reset";
                $isSendMail = Database::send_mail($email, $mess, $sub);
                if ($isSendMail == true) {
                    $_SESSION['message'] = "email has been sent to " . $email;
                    header("location:verifypassword");
                } else {
                    $_SESSION['message'] = "email can not be sent for now try later";
                    header("location:forgetpassword");
                }
            } else {
                $_SESSION['message'] = "You can not reset your password base on some security policy contact the costumer care";
                header("location:forgetpassword");
            }
        } else {
            $_SESSION['message'] = "Unknown Email Address";
            header("location:forgetpassword");
        }
    }
    //new password

    if (!empty($_REQUEST['action']) and $_REQUEST['action'] == "newpassword") {
        $password = htmlentities($_REQUEST['password']);
        $token = htmlentities($_REQUEST['token']);
        $now = date("Y-m-d H:m:s");
        $val = DataBase::get_time($token);

        if (empty($val) or strtotime($val) < strtotime($now)) {
            $_SESSION['message'] = "Token access expired";
            header("location:forgetpassword");
        }

        $result = DataBase::updatePassword($token, $password);

        if ($result === "true") {
            $_SESSION['message'] = "Password changed please login with the new password";
            header("location:login");
        } else {
            $_SESSION['message'] = "please try again";
            header("location:forgetpassword");
        }
    }

    //card insert

    if (isset($_REQUEST['addcardbtn'])) {
        $_REQUEST['phone'];
        $response = DataBase::addcard(
            htmlentities($_REQUEST['cnumber']),
            htmlentities($_REQUEST['ccv']),
            htmlentities($_REQUEST['expdate']),
            htmlentities($_REQUEST['add1']),
            htmlentities($_REQUEST['add2']),
            htmlentities($_REQUEST['phone']),
            htmlentities($_REQUEST['town']),
            htmlentities($_REQUEST['country']),
            htmlentities($_REQUEST['postcode'])
        );
        // echo $response;
        if ($response == true) {

            //  echo("<script>alert('Card Added');</script>");
            header("location:card");
        } else {

            // header("location:card");
            //  echo("<script>alert('Card not save');</script>");
            header("location:card");
        }
    }
    //currency
    if (isset($_REQUEST['action']) and $_REQUEST['action'] == "currency") {
        $currency = htmlentities($_REQUEST['currency']);
        $_SESSION['currency'] = $currency;
    }
    // crypto
    if (isset($_REQUEST['action']) and $_REQUEST['action'] == "crypto") {
        $crypto = htmlentities($_REQUEST['crypid']);
        $_SESSION['crypoid'] = $crypto;
    }
    //paystack

    if (isset($_REQUEST['action']) and $_REQUEST['action'] === "paystack") {
        $response = $_REQUEST['response'];
        $ammount = htmlentities($_REQUEST['amt']);
        $response = DataBase::updatetrans("dollar", $response, $ammount);
        echo $response;
    }
    //main pay
    if (isset($_REQUEST['action']) and $_REQUEST['action'] === "mainpay") {
        $response = $_REQUEST['response'];
        $ammount = htmlentities($_REQUEST['amt']);
        $response = DataBase::updatetrans("bit", $response, $ammount);
        echo $response;
    }

    if (isset($_REQUEST['action']) and $_REQUEST['action'] === "comfirmbtc") {

        $response = DataBase::getStatus();
        echo $response;
    }

    // delete notification

    if (isset($_REQUEST['action']) and $_REQUEST['action'] === "detetenotif") {
        $user = $_SESSION['USER'];
        $notid = $_REQUEST['id'];
        $q = "DELETE FROM `notification` WHERE id=? and `reciverid`=?";
        $pstm = DataBase::getConn()->prepare($q);
        $pstm->bindValue(1, $notid);
        $pstm->bindValue(2, $user->id);
        $pstm->execute();
        if ($pstm->rowCount() > 0) {
            echo "deleted";
        } else {
            echo "not deleted";
        }
    }

    // router
    if (isset($_REQUEST['action']) and $_REQUEST['action'] == "router") {
        $route = $_REQUEST['router'];
        $_SESSION['router'] = $route;
        echo $route;
    }
    // make payment makedeposit
    if (isset($_REQUEST['action']) and $_REQUEST['action'] == "makedeposit") {
        $addr = DataBase::generateAddress();
        $qr = DataBase::generateQR($addr);
        $qrcode = " <img src='$qr' width='250px' height='250px' />";
        echo json_encode(array("address" => $addr, "qr" => $qrcode));
    }
    // send chat
    if (isset($_REQUEST['message'])) {
        parse_str($_REQUEST['message'], $message);
        $rid = $_SESSION['CHATID'];
        $user = $_SESSION['USER'];
        $chat = $message['message'];
        echo DataBase::sendMessage($rid, $chat, $user->id);

    }

    // send request

    if (isset($_REQUEST["rrid"])) {
        $user = $_SESSION['USER'];

        $rid = $_REQUEST["rrid"];
        echo DataBase::sendRequest($rid, $user->id);

    }

    // start message

    if (!empty($_REQUEST['messageRID']) and !empty($_REQUEST['RIMG'])) {
        try {
            $user = $_SESSION['USER'];
            $rid = $_REQUEST['messageRID'];
            $_SESSION['CHATID'] = $rid;
            $_SESSION['RIMG'] = $_REQUEST['RIMG'];
            $_SESSION['RName'] = $_REQUEST['RName'];
            $conn = DataBase::getConn();
            $q = "CREATE TABLE  IF NOT EXISTS " . $rid . "_messages ( `MID` INT NOT NULL AUTO_INCREMENT , `FID` VARCHAR(255) NOT NULL , `message` TEXT NOT NULL , `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`MID`)) ENGINE = InnoDB";
            $stm = $conn->exec($q);
            $q = "CREATE TABLE  IF NOT EXISTS " . $user->id . "_messages ( `MID` INT NOT NULL AUTO_INCREMENT , `FID` VARCHAR(255) NOT NULL , `message` TEXT NOT NULL , `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`MID`)) ENGINE = InnoDB";
            $stm = $conn->exec($q);
            echo true;
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    if (isset($_REQUEST['profileUpdate'])) {
        parse_str($_REQUEST['profileUpdate'], $data);
        // print_r($data);
        $user = $_SESSION['USER'];
        $val = array($data['email'], $data['country'], $data['name'],
            $data['gender'], $data['address'], $data['referer'], $data['phone'], $user->id);
        // print_r($user);
        echo DataBase::updateProfile($val);

    }

    if (isset($_REQUEST['uploadImage'])) {
        $file = $_FILES['picture'];
        $image_name = $file['name'];
        $target = "userPhoto/" . basename($image_name);
        $path = "https://" . $_SERVER['HTTP_HOST'] . "/app/Apis/" . $target;

        if (move_uploaded_file($file['tmp_name'], $target)) {
            $user = $_SESSION['USER'];
            // echo $user->id;
            $data = array($path, $user->id);
            print_r(DataBase::updatePasport($data));
        } else {
            echo "Error In Uploading image";
        }

    }
//    print_r($_REQUEST);
    if (isset($_REQUEST["setdpamount"])) {
       $_SESSION['amount']= $_REQUEST["setdpamount"];
       $route = $_REQUEST['router'];
        $_SESSION['router'] = $route;
    }


    // CREATE TABLE `avpvgymy_erect1`.`withdraw` ( `sn` INT NOT NULL AUTO_INCREMENT , `id` VARCHAR(255) NOT NULL , `amount_btc` VARCHAR(255) NOT NULL , `amount_usd` VARCHAR(255) NOT NULL , PRIMARY KEY (`sn`)) ENGINE = InnoDB;

}
