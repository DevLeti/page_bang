<?php
$id = $_POST['register_id'];
$pass = $_POST['register_pw'];
$email = $_POST['register_em'];
$pn = $_POST['register_pn'];


$db = mysqli_connect('127.0.0.1', 'root', 'autoset', 'dasom'); //서버주소, php 아이디, 비번, 스키마 이름
if(mysqli_connect_errno())
{
  echo "Failed to connect to MySQL!";
}

$pw_encode = md5($pass);
$table_name = "user";
$sql = "INSERT INTO `user`(`name`, `password`, `phone`, `email`, `permission`) VALUES ('$id','$pw_encode','$pn', '$email', 'FALSE')";
mysqli_query($db, $sql);
mysqli_close($db);

echo "<script>alert('注册成功！')</script>";
echo "<script>window.location.replace('../login.html');</script>";
?>
