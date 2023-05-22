<?php 
    if(!isset($_SESSION['memberID'])){

        echo "<script>alert('로그인이 필요한 페이지 입니다.')</script>";
        echo "<script>location.href='../login/login.php'</script>";

        // Header("Location:../login/login.php");
    }
?>