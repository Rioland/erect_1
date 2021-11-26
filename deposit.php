<?php

include_once "./app/Apis/database/DataBase.php";


if (DataBase::is_login() == false) {
    header("location:login");

}

//Match secret for security
if(isset($_GET['txid']) and isset($_GET['value']) and isset($_GET['status']) and isset($_GET['addr'])and isset($_GET['secret'])){
    $secret = 'Mabcdas122olkdd';
    $value = $_GET['value'];

$txid = $_GET['txid'];

$status = $_GET['status'];
$addr = $_GET['addr'];
@$serct = $_GET['secret'];

    if ($serct == $secret and !empty($serct) and !empty($txid) and !empty($value) and !empty($value)) {
       $data=array("address"=>$addr,"status"=>$status,"value"=>$value,"txt"=>$txid);
       DataBase::createInvoice($data);
        // DataBase::btc_tras_update1($status, $value, $txid, $addr);
        // DataBase::updateInvoiceStatus($status, $addr);
        // header("location:buysell");
    }
}
