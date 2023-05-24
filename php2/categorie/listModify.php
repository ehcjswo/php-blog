<?php
    include "../connect/connect.php";

    $productID = $_POST['productID'];
    $option = $_POST['option'];
    $name = $_POST['name'];
    $date = $_POST['date'];

    
    $sql = "UPDATE categorie SET productName = '$name', productFilter = '$option', productRegist = '$date' WHERE productID = $productID";
    $result = $connect -> query($sql);
    if ($result) {
        $jsonResult = "success";
    } else {
        $jsonResult = "error";
    }
    echo json_encode(array("result" => $jsonResult));
?>