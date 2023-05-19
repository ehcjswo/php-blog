<?php
 include "../connect/connect.php";
 include "../connect/session.php";

$memberID = $_SESSION['memberID'];
$skinType = $_POST['skinType'];
// 가져온 값 사용하기
// ...
$sql = "update members2 set skinType = '{$skinType}' where memberID = '{$memberID}'";

$response = array('result' => 'good');
?>