<?php
include "../connect/connect.php";
include "../connect/session.php";

$memberID = $_SESSION['memberID'];



for ($i = 1; $i < 10; $i++) {
    $regTime = time();
    $sql = "insert into categorie(memberID, productName, productType, productDday, productRegist, regtime) values ($memberID, '디올 고급진 샴푸' ,'샴푸', '0', '2023-05-22' , ${regTime} )";
    $connect -> query($sql);
}
?>