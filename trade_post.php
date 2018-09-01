<?php
require 'class_lib.php';
require 'connection.php';

$con = myconnection();
$data = json_decode(file_get_contents('php://input'), true);
//$tid = $data['tid'];
$uid = $data['uid'];
$bid = $data['bid'];
$u_limit = $data['u_limit'];
$d_limit = $data['d_limit'];
$dead_line = $data['dead_line'];
$currency_type = $data['currency_type'];
$amount = $data['amount'];
$price = $data['price'];
$terms = $data['terms'];
$type = $data['type'];
$response ="error";

$sql = "insert into trade(uid,bid,u_limit,d_limit,dead_line,currency_type,amount,price,terms,type)
                            VALUES ('$uid','$bid','$u_limit','$d_limit','$dead_line','$currency_type','$amount',$price,$terms,$type)";
$run = mysqli_query($con, $sql);
//mysqli_query($con, $sql) or die(mysqli_error($con));

if ($run) {

    $response = json_encode(array('status' => "success"));

} else {
    $response="failed";
}
echo $response
?>