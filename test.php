<?php 
// 假定数据库用户名：root，密码：123456，数据库：RUNOOB 
/*
$con=mysqli_connect("localhost","root","root",); 
if (mysqli_connect_errno($con)) 
{ 
    echo "连接 MySQL 失败: " . mysqli_connect_error(); 
} 

$sql = "select * from user where username='$name' and password='$password'";


if ($result=mysqli_query($con,$sql))
{
    // 一条条获取
    while ($row=mysqli_fetch_row($result))
    {
        printf ("%s : %s",$row[0],$row[1]);
        echo "<br>";
    }
    
    // 释放结果集合
    mysqli_free_result($result);
}

mysqli_close($con);

*/
?>