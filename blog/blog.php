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
    <title>게시판</title>

    <?php include "../include/head.php" ?>
</head>
<body  class="gray">

    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="blog__search">
            <h2>개발자 블로그 입니다.</h2>
            <p>개발과 관련된 글입니다.</p>
            <div class="search">
                <form action="#" name="#" method="POST">
                    <legend class="blind">블로그 검색</legend>
                    <input type="search" class="inputStyle2" name="searchKeyword" aria-label="검색" placeholder="검색어를 입력하세요!">
                    <button type="submit" class="btnStyle4 ml20">검색하기</button>
                    <?php if(isset($_SESSION['memberID'])){ ?>
                    <!-- 로그인 했을 시 -->
                    <div class="mt20"><a href="blogWrite.php" class="btnStyle4 white">글쓰기</a></div>
                    <?php } ?>
                </form>
            </div>
        </div>
        <div class="blog__inner">
            <div class="left">
                <div class="blog__wrap">
                    <h2>All posts</h2>
                    <div class="cards__inner col3 line3">
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
    $sql = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogID DESC";
    $result = $connect -> query($sql);
?>

<?php foreach($result as $blog){?>
        <div class="card">
            <figure class="card__img">
                <a href="blogView.php?blogId=<?=$blog['blogID']?>">
                    <img src="../assets/blog/<?=$blog['blogImgFile'] ?>" alt="<?=['blogTitle']?>">
                </a>
            </figure>
            <div class="card__title">
                <h3><?=$blog['blogTitle'] ?></h3>
                <p><?=$blog['blogContents']?></p>
            </div>
            <div class="card__info">
                <a href="#" class="more">더보기</a>
            </div>
        </div>
<?php } ?>

                    </div>
                </div>
            </div>
            <div class="right">
                <div class="blog__aside">
                    <?php include "../include/blogTitle.php" ?>
                    <?php include "../include/blogCate.php" ?>
                    <?php include "../include/blogNew.php" ?>
                    <?php include "../include/blogPopular.php" ?>
                    <?php include "../include/blogComment.php" ?>
                </div>
            </div>
            
        </div>



        <!-- 
            <div class="intro__inner"></div>  각페이지 소개 배너
            <div class="join__inner"></div>  회원가입 페이지
            <div class="login__inner"></div>  로그인 페이지
            <div class="board__inner"></div>  게시판 페이지
            <div class="blog__inner"></div>   블로그 메인

            
            <div class="sliders__inner"></div>           
            <div class="banners__inner"></div>  
            <div class="cards__inner"></div>
            <div class="images__inner"></div>
            <div class="ads__inner"></div>
            <div class="texts__inner"></div>
            <div class="login__inner"></div>
            <div class="join__inner"></div>
 
        -->
    </main>
    <!-- main -->
    

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

</body>
</html>