<?php
include("conn.php");
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$result = $_POST['result'];
$sql = "update result set name = '". $name ."',age = $age,result = $result where id =$id";
if ($conn->query($sql)) {
    echo "修改成功!";
} else {
    echo "Error ： " . $sql . "<br>" .$conn->error;
}
$conn->close();