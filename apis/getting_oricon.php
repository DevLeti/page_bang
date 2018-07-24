<?php

$db = mysqli_connect('127.0.0.1', 'root', 'autoset', 'dasom'); //서버주소, php 아이디, 비번, 스키마 이름
if(mysqli_connect_errno())
{
  echo "Failed to connect to MySQL!";
}
$table_name = "oricon";
$get_info = "SELECT * FROM $table_name WHERE 1";
$result = mysqli_query($db, $get_info);




echo "
'<tr><td>歌名</td><td>歌手</td><td>发布日期</td><td>公司</td><td>排名</td></tr>";

$row = mysqli_fetch_array($result, MYSQL_BOTH);
while($row[0] != "") //이름이 ""이면 break;
{
  echo "<tr><td name = 'id'>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
  $row = mysqli_fetch_array($result, MYSQL_BOTH);
}
  echo "";

 ?>
