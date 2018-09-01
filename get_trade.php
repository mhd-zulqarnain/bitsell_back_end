<?php
require 'class_lib.php';
require 'connection.php';
$con = myconnection();

$lable = "select * from trade where type = 'buy' ";
$res = mysqli_query($con, $lable);

$list = array();

while ($row = mysqli_fetch_array($res)) {

    $trade = new trade();
    $trade->setUid($row['uid']);
    $trade->setBid($row['bid']);
    $trade->setTerms($row['terms']);
    $trade->setType($row['type']);
    $trade->setTid($row['tid']);
    $trade->setULimit($row['u_limit']);
    $trade->setDLimit($row['d_limit']);
    $trade->setDeadLine($row['dead_line']);
    $trade->setCurrencyType($row['currency_type']);
    $trade->setAmount($row['amount']);
    $trade->setPrice($row['price']);
    array_push($list , $trade);

}

echo json_encode($list)
?>