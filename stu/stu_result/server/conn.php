<?php
$servername = "localhost:3308";
$username = "root";
$password = "root";
$dbname = "stu_result";
//创建连接
$conn = new mysqli($servername,$username,$password,$dbname);
@mysqli_set_charset($conn,utf8);
//检测连接
if($conn->connect_error){
    die("连接失败：".$conn->connect_error);
}
?>