<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>php 登录与注册 </title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="div">
        <h3>欢迎登陆后台管理系统</h3>
        <div id="cnt">
            <form method="post" action="main.php">
                用户名：<input type="text" placeholder="请输入用户名" name="username">
                <br><br>
                密 码：<input type="password" placeholder="请输入用户名" name="password">
                <br><br>
                <input type="submit" value="登录" class="sub">
                <input type="button" value="注册" class="sub" id="sub" onclick="window.location='reg.php'">
            </form>
        </div>
    </div>


    <script>
        $("#sub").click(function(){
            location.href="reg.php";
        });
</script>
</body>
</html>