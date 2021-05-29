<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src= "js/index.js"></script>
    <title>学生成绩管理系统</title>
</head>
<body>
    <h1>学生成绩管理系统</hl>
    <table>
        <tr>
            <td>姓名：</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>年龄：</td>
            <td><input type="text" name="age"></td>
        </tr>
        <tr>
            <td>成绩：</td>
            <td><input type="text" name="result"></td>
        </tr>
        <tr>
            <td colspan="2"><button onclick="update()">修改</button></td>
        </tr>
    </table>
</body>
</html>
<script>
let id;
window.onload=function(){
    id = window.location.search.substring(1).split("=")[1];
    let ajax = getAjax() ;
    ajax.open("GET","./server/select_server.php?id="+id,false);
    ajax.send();
    let data = JSON.parse(ajax.responseText);
    document.getElementsByName("name")[0].value = data.name;
    document.getElementsByName("age")[0].value = data.age;
    document.getElementsByName("result")[0].value = data.result;
}

function update() {
    let name = document.getElementsByName("name")[0].value;
    let age = document.getElementsByName("age")[0].value;
    let result = document.getElementsByName("result")[0].value;
    let ajax = getAjax();
    ajax.open("POST","./server/update_server.php",false);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded;charset=UTF-8");
    ajax.send("id=" + id + " &name=" + name + " &age=" + age + " &result=" + result);
    alert(ajax.responseText);
    window.location.href = "index.php";
}
</script>