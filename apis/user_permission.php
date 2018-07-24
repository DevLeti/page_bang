<?php
$db = mysqli_connect('127.0.0.1', 'root', 'autoset', 'dasom'); //서버주소, php 아이디, 비번, 스키마 이름
if(mysqli_connect_errno())
{
  echo "Failed to connect to MySQL!";
}


$table_name = "user";

mysqli_query(UPDATE `user` SET `permission`="TRUE" WHERE `name` = $name , `permission` = "FALSE";);//유저가 false 상태면 true 상태로
mysqli_query(UPDATE `user` SET `permission`="TRUE" WHERE `name` = $name , `permission` = "TRUE";);//유저가 true 상태면 false 상태로 바꾸기




/*
UPDATE `user` SET `permission`="TRUE" WHERE `name` = $name , `permission` = "FALSE"; //유저가 false 상태면 true 상태로
UPDATE `user` SET `permission`="FALSE" WHERE `name` = $name, `permission` = "TRUE" ; //유저가 true 상태면 false 상태로 바꾸기
*/





 ?>
