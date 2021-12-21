<?php

class DataBase{


    public static function getConn()
    {
        // $url = "https://www.blockonomics.co/api/";
        $servername = "ftp.avp.vgy.mybluehost.me";
        $username = "avpvgymy_erect1";
        $password = "erect1office";

        //
        // $servername = "localhost";
        // $password = "";
        // $username = "root";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=avpvgymy_erect1", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            return $conn;
        } catch (PDOException $e) {
            echo json_encode(array("message" => $e->getMessage(), "code" => "404"));
        }
    }

}

?>