<?php
require 'class_lib.php';
require 'connection.php';
$con = myconnection();

$lable = "select * from users ";
$res = mysqli_query($con, $lable);

$list = array();

while ($row = mysqli_fetch_array($res)) {

    $user = new users();
    $user->setUid($row['uid']);
    $user->setEmail($row['user_email']);
    $user->setPassword($row['password']);
    array_push($list , $user);

}

echo json_encode($list)
?>