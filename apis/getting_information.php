<?php

$db = mysqli_connect('127.0.0.1', 'root', 'autoset', 'dasom'); //서버주소, php 아이디, 비번, 스키마 이름
if(mysqli_connect_errno())
{
  echo "Failed to connect to MySQL!";
}
$table_name = "user";
$get_info = "SELECT `name`, `password`, `phone`, `email`,`permission` FROM `user` WHERE 1";
$result = mysqli_query($db, $get_info);
//$row=mysqli_fetch_array($result);

$get_info_only_id = "SELECT `name` FROM `user` WHERE 1";
$only_name = mysqli_query($db, $get_info_only_id);
$total_name = mysqli_num_rows($only_name);
$row_count = $total_name;
$col_count = 5;


echo "<script>document.getElementById('information_table').innerHTML=
'<tr><td>名字</td><td>电话号码</td><td>邮箱</td><td>允许状态</td><td>状态变更</td><td>删除</td></tr>";

while($row = mysqli_fetch_array($result, MYSQL_BOTH))
{
  echo "<tr><td>$row[0]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
}
  echo "';</script>";

 ?>
