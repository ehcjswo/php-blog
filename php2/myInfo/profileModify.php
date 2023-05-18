<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $memberID = $_SESSION['memberID'];
    $nickName = $_SESSION['nickName'];

    $nickNameModify = $_POST['nickName'];
    
    // 데이터 출력
    
    
    $sql = "update members2 set nickName = '{$nickNameModify}' where memberID = '{$memberID}'";
        
    $connect ->query($sql);

    Header("Location: myInfoProfile.php");

?>