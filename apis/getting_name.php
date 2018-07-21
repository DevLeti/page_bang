<?php
$db = mysqli_connect('127.0.0.1', 'root', 'autoset', 'dasom'); //서버주소, php 아이디, 비번, 스키마 이름
if(mysqli_connect_errno())
{
  echo "Failed to connect to MySQL!";
}
$table_name = "user";
$get_info = "SELECT `name` FROM `user` WHERE 1";
$result = mysqli_query($db, $get_info);

$i = 0;
echo "<script>var name_array = new Array();";
while($row = mysqli_fetch_array($result, MYSQL_BOTH))
{
  echo "name_array[$i]='$row[0]';";
  $i = $i + 1;
}
echo "</script>";
 ?>
