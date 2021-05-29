<?php
include("conn.php");
$name = $_POST['name'];
$age = $_POST['age'];
$result = $_POST["result"];
//预处理及绑定
$stmt = $conn->prepare("insert into result (name,age,result) values (?,?,?)");
$stmt->bind_param("sii",$name,$age,$result);
//执行
$stmt->execute();
if ($conn->affected_rows) {
    echo "添加成功!";
} else {
    echo "Error:".$conn->error;
}
$stmt->close();
$conn->close();

