<?php

$name = $_POST['register_id']
$db = mysqli_connect('127.0.0.1', 'root', 'autoset', 'dasom'); //서버주소, php 아이디, 비번, 스키마 이름
if(mysqli_connect_errno())
{
  echo "Failed to connect to MySQL!";
}

$check = "SELECT * FROM `user` WHERE ;
$result = $mysqli->query($check);

if($result->num_rows==1)
{
    echo "중복된 id입니다.";
    echo "<a href='../register.html'>back page</a>";
    exit();
}


 ?>
