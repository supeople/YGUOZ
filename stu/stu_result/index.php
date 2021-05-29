<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/index.js"></script>
</head>
<body>
<h1>学生成绩管理系统</h1>
<table>
<?php 
require_once("./server/conn.php");  
$sql = "select * from result";  
$result=$conn->query($sql);
if($result->num_rows > 0){     /*if($result->（10）>0){*/
	while($row=$result->fetch_assoc()){
?>
		<tr>
			<td><?php echo $row["id"]; ?></td>
			<td><?php echo $row["name"]; ?></td>   
			<td><?php echo $row["age"]; ?></td>
			<td><?php echo $row["result"]; ?></td>
			<td>
				<button onclick="toUpdate(this)">修改</button>
				<button onclick="remove(this)">删除</button>	
			</td>
		</tr>
<?php
	}
}
    $conn->close();
?>
<tr>
    <td colspan="100"><a href="insert.php"><button>添加</button></a></td>
</tr>
 </table>
 </body>
</html>
<script type="text/javascript">
	function remove(ele){
		let id=ele.parentElement.parentElement.children[0].innerText;
		window.location.href="./server/remove_server.php?id="+id;
	}
	function toUpdate(ele){
		let id=ele.parentElement.parentElement.children[0].innerText;
		window.location.href="./update.php?id="+id;
	}
</script>
