<?php
include "../connect/connect.php";
include "../connect/session.php";

$memberID = $_SESSION['memberID'];

// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";


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
// for ($i = 1; $i < 10; $i++) {
//     $regTime = time();
//     $sql = "insert into categorie(memberID, productName, productFilter, productType, productDday, productRegist, regtime) value ($memberID, '구찌 크림' , 'cream', '크림', ${i}*7, '2023-05-25' , ${regTime})";
//     $connect -> query($sql);
// }

// 현재 날짜
// $currentDate = new DateTime();

// // 1년 후의 날짜 계산
// $oneYearLater = clone $currentDate;
// $oneYearLater->modify('+1 year');

// // 날짜 형식 변환 (YYYY-MM-DD)
// $productDDay = $oneYearLater->format('Y-m-d');

// SQL 문에 적용
// $regTime = time();
// $sql = "INSERT INTO categorie(memberID, productName, productFilter, productType, productDday, productRegist, regtime) VALUE ($memberID, '구찌 크림', 'cream', '크림', $oneYearLater, '2023-05-25', '$productDDay')";
// $connect -> query($sql);

// // 현재 날짜
// $currentDate = date('Y-m-d');

// // 1년 뒤의 날짜 계산
// $oneYearLater = date('Y-m-d', strtotime('+1 year', strtotime($currentDate)));

// // SQL 문에 적용
// $regTime = time();
// $sql = "INSERT INTO categorie(memberID, productName, productFilter, productType, productDday, productRegist, regtime) VALUES ($memberID, '구찌 크림', 'cream', '크림', $oneYearLater, '2023-05-25', '$regTime')";
// $connect -> query($sql);


if($sql){
    echo "create tables Complete";
} else {
    echo "create tables false";
}

?>