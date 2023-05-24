<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $memberID = $_SESSION['memberID'];

    $option = $_POST['option'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $regTime = time();

    
    $sql = "INSERT INTO categorie (memberID, productName, productFilter, productType, productDday, productRegist, regtime) VALUES ('$memberID', '$name', '$option', 'asdf', '5', '$date', '$regTime')";
    $result = $connect->query($sql);

    $LAST_INSERT_ID = $connect -> insert_id;

    $sql2 = "SELECT * FROM categorie WHERE productID = $LAST_INSERT_ID";
    $newDataResult = $connect->query($sql2);
    $newData = $newDataResult->fetch_assoc();

    // 응답 데이터로 새로운 데이터 정보를 보냄
    echo json_encode(array("result" => "success", "data" => $newData));
?>