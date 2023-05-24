<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $memberID = $_SESSION['memberID'];

    $productID = $_POST['productID'];
    $option = $_POST['option'];
    $name = $_POST['name'];
    $date = $_POST['date'];

    
    $sql = "INSERT INTO categorie (memberID, productName, productFilter, productType, productDday, productRegist, regtime) VALUES ('$memberID', '$name', '$option', 'asdf', '5', '$date', '$regTime')";
    $result = $connect -> query($sql);
    if ($result) {
        $jsonResult = "success";
    } else {
        $jsonResult = "error: " . mysqli_error($connect);
    }
    echo json_encode(array("result" => $jsonResult));
?>