<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
    // $type = $_POST['type'];
    $memberID= $_SESSION['memberID'];
    $youPass = $_POST['youPass'];
    // $youPass = 1;


    $jsonResult = "bad";
    
    // if( $type == "isPassCheck"){
        $sql = "SELECT youPass FROM members2 WHERE youPass = '{$youPass}' AND youEmail = '{$memberID}'";
    // }

    $result = $connect -> query($sql);
    if( $result -> num_rows == 0 ){
        $jsonResult = "good";
    }
    // echo json_encode(array("result" => $jsonResult));
?>