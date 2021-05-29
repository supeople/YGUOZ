<meta charset="utf-8"/>
<?php
include("conn.php");
$id = $_GET['id'];
$sql = "delete from result where id = $id";
if ($conn->query($sql)) {
echo "删除成功!" ;
echo"<a href='../index.php'>返回修改页面</a>";
} else {
echo "Error:" . $sql . "<br>" . $conn->error;
$conn->close();
header("location:../index.php");
}