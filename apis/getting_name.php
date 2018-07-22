<?php
$db = mysqli_connect('127.0.0.1', 'root', 'autoset', 'dasom'); //서버주소, php 아이디, 비번, 스키마 이름
if(mysqli_connect_errno())
{
  echo "Failed to connect to MySQL!";
}
$table_name = "user"; //db 이름
$get_info = "SELECT `name` FROM `user` WHERE 1";
$result = mysqli_query($db, $get_info); //쿼리문(?) 보내서 가져옴

$i = 0; // 반복문 준비
echo "<script>var name_array = new Array();"; //리스트 생성 (javascript)
while($row = mysqli_fetch_array($result, MYSQL_BOTH)) // 저게 목록 하나 불러오는건데 다시 부르면 그 다음꺼 가져옴
{
  echo "name_array[$i]='$row[0]';"; //db name목록 하나를 name_array 배열에 추가
  $i = $i + 1;//반복
}
echo "</script>";
 ?>
