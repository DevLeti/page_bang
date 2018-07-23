<?php
$db = mysqli_connect('127.0.0.1', 'root', 'autoset', 'dasom'); //서버주소, php 아이디, 비번, 스키마 이름
if(mysqli_connect_errno())
{
  echo "Failed to connect to MySQL!";
}
$table_name = "user";
$get_info = "SELECT `name`, `password`, `phone`, `email`,`permission` FROM `user` WHERE 1";






 ?>
