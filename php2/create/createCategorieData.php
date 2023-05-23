<?php
include "../connect/connect.php";
include "../connect/session.php";

$memberID = $_SESSION['memberID'];


// 샴푸
// for ($i = 1; $i < 10; $i++) {
//     $regTime = time();
//     $sql = "insert into categorie(memberID, productName, productFilter, productType, productDday, productRegist, regtime) value ($memberID, '디올 고급진 샴푸' , 'shampoo', '샴푸', ${i}*3, '2023-05-22' , ${regTime})";
//     $connect -> query($sql);
// }

// 립스틱
// for ($i = 1; $i < 10; $i++) {
//     $regTime = time();
//     $sql = "insert into categorie(memberID, productName, productFilter, productType, productDday, productRegist, regtime) value ($memberID, '디올 립스틱 셋트' , 'lipstick', '립스틱', ${i}*5, '2023-05-20' , ${regTime})";
//     $connect -> query($sql);
// }

// 립스틱
for ($i = 1; $i < 10; $i++) {
    $regTime = time();
    $sql = "insert into categorie(memberID, productName, productFilter, productType, productDday, productRegist, regtime) value ($memberID, '구찌 크림' , 'cream', '크림', ${i}*7, '2023-05-25' , ${regTime})";
    $connect -> query($sql);
}
?>