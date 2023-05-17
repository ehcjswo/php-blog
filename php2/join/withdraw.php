<?php
    include "../connect/connect.php";
    include "../connect/session.php";
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
            <h2>탈퇴하기</h2>
            <p>탈퇴를 원하시면 비밀번호를 입력해주세요.</p>
            
            <div class="join__form">
                <form action="withdrawEnd.php" name="withdrawEndBtn" method="post" onsubmit="return joinChecks()">
                    <fieldset>
                        <legend class="blind">탈퇴하기 영역</legend>
                        <div>
                            <label for="youPass"></label>
                            <input type="password" id="youPass" name="youPass" class="inputStyle" placeholder="비밀번호">
                            <p class="joinChkmsg" id="youPassComment">123</p>
                        </div>
                        <button type="button" class="btnStyle3" onclick="joinChecks()">회원탈퇴</button>
                    </fieldset>
                </form>
            </div>
            <div class="line">
            </div>
        </div> 
    </main>
    <!-- //main -->
    
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script>
        let isPassCheck = false;
        let chkInfo = true;

        // 비밀번호 유효성 검사
        function chkYouPass(){
            isPassCheck = false;
            let getYouPass = $("#youPass").val();
            let getYouPassNum = getYouPass.search(/[0-9]/g);
            let getYouPassEng = getYouPass.search(/[a-z]/ig);
            let getYouPassSpe = getYouPass.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);

            $("#youPassComment").addClass("red");
            if($("#youPass").val() == ''){
                $("#youPassComment").text("* 비밀번호를 입력해주세요!");
                $("#youPass").focus();
                return false;
                // 8~20자이내, 공백X, 영문, 숫자, 특수문자
            }else if(getYouPass.length < 8 || getYouPass.length > 20){
                $("#youPassComment").text(" * 8자리 ~ 20자리 이내로 입력해주세요");
                $("#youPass").focus();
                return false;
            } else if (getYouPass.search(/\s/) != -1){
                $("#youPassComment").text("* 비밀번호는 공백없이 입력해주세요!");
                $("#youPass").focus();
                return false;
            } else if (getYouPassNum < 0 || getYouPassEng < 0 || getYouPassSpe < 0 ){
                $("#youPassComment").text("* 영문, 숫자, 특수문자를 혼합하여 입력해주세요!");
                $("#youPass").focus();
                return false;
            }  else {
                $("#youPassComment").text("");
                isPassCheck = true;
            }
        }
            
        

        // 윈도우 로드시 window.onload 함수 쓴것과 같음
        // 각 input스타일에서 포커스아웃할때(바깥클릭 and tab클릭)실행되게 해놓은 함수
        $( document ).ready(function() {
            $('#youPass').blur(function(){
                chkYouPass();
            });
        });

        function joinChecks(){
            alert( $("#youPass").val())
            if (isPassCheck == false) {
            // 위 변수 중 하나라도 false일 때 실행되는 코드
                        chkYouPass();
            } else {
                $.ajax({
                    type : "POST",
                    url : "withdrawEnd.php",
                    data : {"youPass" : $("#youPass").val(), "type" : "isPassCheck"},
                    dataType : "json",
                    success : function(data){
                        if(data.result == "good"){
                            chkInfo = false;
                            console.log(chkInfo + "good");
                            alert('비밀번호가 틀렸습니다.');
                            
                           
                        }else{
                            // 등록된 정보가 있다면  <form action="loginFindEnd.php" name="loginFindEnd" method="post"> 에 등록되어있는 
                            // form 액션을 실행함 
                            console.log(chkInfo + "성공");

                            alert("성공");
                            // document.withdrawEndBtn.submit();
                        }
                    },
                    error : function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                });
            
            }
        }
        
    </script>
</body>

</html>