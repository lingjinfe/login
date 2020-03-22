<?php
	require_once("conn.php");//首先链接数据库
	$name=$_POST['username'];
	$password=$_POST['password'];

	$sql = "SELECT * from user WHERE username='$name' and password='".md5($password)."'";
    $info = mysqli_query($con, $sql);
 
    $row = mysqli_fetch_row($info);
	if($row){
		echo "<script>alert('登录成功')</script>";
	}else{
		echo "<script>alert('登录失败')</script>";
		//echo "<script>history.go(-1);</script>"; //登录失败返回上一个页面
		echo "<script>location.href='login.php';</script>"; //登录失败，跳转到另外一个页面
    }
   

?>