<?php
    header("Content-type: text/html; charset=utf-8");//设置编码
    $con = mysqli_connect("127.0.0.1","root","root") or die("数据库连接失败");
    mysqli_select_db($con,'login') or  die("指定的数据库不能打开");
    
    mysqli_query($con,'set names utf8');//设置数据库的字符集
/*
$sql = "insert user values(3,'krien',2123)";
$res = mysqli_query($con,$sql);
if ($res){
    echo '插入数据成功';
}else {
    echo '插入数据失败';
}*/

?>