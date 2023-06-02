<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
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
                <img src="../assets/img/spcat.png" alt="소개이미지">
            </picture>
            <p class="intro__text">
                좋아하는 사람과 좋은 시간을,
                소중한 사람과 소중한 시간을, 
                변화는 있어도 변함은 없기를
            </p>
            
        </div>
        
        <div class="blog__inner">
            <div class="blog__wrap">
                <h2>NEW posts</h2>
                <div class="cards__inner col4 line3">
                    <!-- <div class="card">
                        <figure class="card__img">
                            <source srcset="../html/assets/img/blog01.jpg, ../html/assets/img/blog01@2x.jpg 2x, ../html/assets/img/blog01@3x.jpg 3x">
                            <img src="../html/assets/img/blog01.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>개발을 잘 하는 방법!</h3>
                            <p>보통 개발을 할 때 가장 필요한 스킬은 검색이다. 검색 키워드에 따라 해결 방안들이 다르고, 결과도 다를 수 있다.</p>
                        </div>
                        <div class="card__info">
                            <a href="#" class="more">더보기</a>
                        </div>
                    </div> -->
<?php
    $sql = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogID DESC LIMIT 8";
    $result = $connect -> query($sql);
?>

<?php foreach($result as $blog){?>
        <div class="card">
            <figure class="card__img">
                <a href="../blog/blogView.php?blogId=<?=$blog['blogID']?>">
                    <img src="../assets/blog/<?=$blog['blogImgFile'] ?>" alt="<?=['blogTitle']?>">
                </a>
            </figure>
            <div class="card__title">
                <h3><?=$blog['blogTitle'] ?></h3>
                <p><?=$blog['blogContents']?></p>
            </div>
        </div>
<?php } ?>

                    </div>
                </div>
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