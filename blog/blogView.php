<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    if(isset($_GET['blogId'])){
        $blogID = $_GET['blogId'];
    } else {
        Header("location: blog.php");
    }

    $blogSql = "SELECT * FROM blog WHERE blogID = '$blogID'";
    $blogResult = $connect -> query($blogSql);
    $blogInfo = $blogResult -> fetch_array(MYSQLI_ASSOC);

    // echo "<pre>";
    // var_dump ($blogInfo);
    // echo "</pre>";
    
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>

    <?php include "../include/head.php" ?>
</head>
<body  class="gray">

    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="blog__title" style="background-image:url(../assets/blog/<?=$blogInfo['blogImgFile']?>)">
            <span class="cate"><?=$blogInfo['blogCategory'] ?></span>
            <h2 class="title"><?=$blogInfo['blogTitle'] ?></h2>
            <div class="info">
                <span class="author"><?=$blogInfo['blogAuthor'] ?></span>
                <span class="date"><?=date('Y-m-d', $blogInfo['blogRegTime']) ?></span>
                <div class="modify">
                    <a href="#">수정</a>
                    <a href="#">삭제</a>
                </div>
            </div>
        </div>
        <div class="blog__inner">
            <div class="left mt70">
                <div class="blog__contents">
                    <h3><?=$blogInfo['blogTitle'] ?></h3>
                    <p><?=$blogInfo['blogContents'] ?></p>
                </div>
            </div>
            <div class="right mt70">
                <div class="blog__aside">
                    <?php include "../include/blogTitle.php"?>
                    <?php include "../include/blogCate.php"?>
                    <?php include "../include/blogLatest.php"?>
                    <?php include "../include/blogPopular.php"?>
                    <?php include "../include/blogComment.php"?>
                </div>
            </div>
        </div>
        <!-- //blog__inner -->
        <div class="blog__article">
            <h3>관련글</h3>
            <?php include "../include/blogArticle.php" ?>
            <!-- <div class="cards__inner col4 line0">
                <div class="card">
                    <figure class="card__img">
                        <source srcset="assets/img/blog01.jpg, assets/img/blog01@2x.jpg 2x, assets/img/blog01@3x.jpg 3x">
                        <a href="#" class="more"><img src="assets/img/blog01.jpg" alt="소개이미지"></a>
                    </figure>
                    <div class="card__title">
                        <h3>개발을 잘 하는 방법!</h3>
                        <p>보통 개발을 할 때 가장 필요한 스킬은 검색이다. 검색 키워드에 따라 해결 방안들이 다르고, 결과도 다를 수 있다.</p>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- //blog__article -->
        <div class="blog__comment">
            <h3>댓글쓰기</h3>
            <div></div>
        </div>
        <!-- //blog__comment -->
    </main>
    <!-- main -->
    

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

</body>
</html>