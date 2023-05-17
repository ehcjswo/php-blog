<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $memberID= $_SESSION['youEmail'];
    $sql = "delete from members2 where youEmail = '{$memberID}'";
    $result = $connect -> query($sql);
    
    unset( $_SESSION['memberID'] );
    unset( $_SESSION['youEmail'] );
    unset( $_SESSION['youName'] );
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원탈퇴 페이지</title>
    <style>
        .line {
            padding: 20px 171px 20px 150px !important;
            border-top: 1px solid #F06171;
        }
        .join__form {
            margin-bottom: 95px;
        }
        .drowDesc{
            text-align: center;
            font-weight: lighter;
            font-size: 20px;
        }
    </style>

    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">

    <!-- SCRIPT -->
    <script defer src="../html/assets/js/common.js"></script>

</head>

<body>

    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
    <!-- //skip -->

    <?php include "../include/abbHeader.php" ?>
        <!-- //header -->

    <main id="main" class="container mt70">
        <div class="join__inner">
            <h2>회원 탈퇴</h2>
            <h4 class="drowDesc mb20">탈퇴가 완료되었습니다.</h4>
            <div class="join__form">
            <p>그동안 이용해 주셔서 감사합니다.</p>
            </div>
            <button type="button" class="btnStyle3" onclick="joinChecks()">메인으로가기</button>
            <div class="line">
            </div>
        </div> 
    </main>
    <!-- //main -->
    
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script>
        
        function joinChecks(){
            window.location.href = "../main.php";
        }
        
    </script>
</body>

</html>