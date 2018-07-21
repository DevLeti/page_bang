<?php
$id=$_POST['id'];
$pass=$_POST['pw'];

//echo $id.$pass;

/*if('devleti' == $email and 'a' == $pass)
  echo"<script>
    alert('登录成功~');location.href='http://www.naver.com';</script>";
else {
  echo"<script>alert('密码错误!!');history.go(-1);</script>";
}*/

// 추가하는건 insert, 가져오는건 select, 업데이트는 update, 지우기는 delete
$db = mysqli_connect('127.0.0.1', 'root', 'autoset', 'dasom'); //서버주소, php 아이디, 비번, 스키마 이름
if(mysqli_connect_errno())
{
  echo "Failed to connect to MySQL!";
}

$pass_encode = md5($pass);
$table_name = "user";
$sql = "SELECT password FROM $table_name WHERE name='$id'";

$sql_permission = "SELECT permission FROM $table_name WHERE name='$id'";
$result_permission = mysqli_query($db, $sql_permission);
$row_permission = mysqli_fetch_assoc($result_permission);

if($result = mysqli_query($db, $sql))
{
    if(mysqli_num_rows($result) == 0)
    {
        echo "<script>alert('No matched ID.');</script>";
        echo "<script>window.location.replace('../login.html');</script>";
    }
    else
    {
        $row = mysqli_fetch_assoc($result);
        if($row["password"] == $pass_encode) // 로그인 성공
        {
          if($row_permission["permission"] == "ADMIN")
          {
            echo "<script>alert('You are admin.');</script>";
            echo "<script>location.href='../logged_in_admin.html';</script>";
          }

          elseif($row_permission["permission"] == "TRUE")
          {
            echo "<script>alert('Login Succeed.');</script>";
            echo "<script>location.href='https://www.naver.com';</script>"; // 리디렉션
          }
          else
          {
            echo "<script>alert('Not permmited.');</script>";
            echo "<script>location.href='../login.html';</script>";
          }
        }
        else
        {
            echo "<script>alert('Wrong Password.');</script>";
            echo "<script>window.location.replace('../login.html');</script>";
        }
    }
}

mysqli_free_result($result);
mysqli_close($db);
?>
