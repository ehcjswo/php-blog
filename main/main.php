<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그 만들기</title>

    <?php include "../include/head.php" ?>
</head>
<body  class="gray">

    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="intro__inner bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/intro01.png, ../assets/img/intro01@2x.png 2x, ../assets/img/intro01@3x.png 3x">
                <img src="../assets/img/intro01.png" alt="소개이미지">
            </picture>
            <p class="intro__text">
                좋아하는 사람과 좋은 시간을,
                소중한 사람과 소중한 시간을, 
                변화는 있어도 변함은 없기를
            </p>
            
        </div>
        <!-- 
            <div class="intro__inner"></div>  각페이지 소개 배너
            <div class="join__inner"></div>  회원가입 페이지
            <div class="login__inner"></div>  로그인 페이지
            
            <div class="sliders__inner"></div>           
            <div class="banners__inner"></div>  
            <div class="cards__inner"></div>
            <div class="images__inner"></div>
            <div class="ads__inner"></div>
            <div class="texts__inner"></div>
            <div class="login__inner"></div>
            <div class="join__inner"></div>
            <div class="blog__inner"></div> 
        -->
    </main>
    <!-- main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>