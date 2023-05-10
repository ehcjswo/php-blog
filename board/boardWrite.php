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
        <div class="intro__inner center bmStyle">
            <picture class="intro__images small">
                <source srcset="../assets/img/intro01.png, ../assets/img/intro01@2x.png 2x, ../assets/img/intro01@3x.png 3x">
                <img src="../assets/img/intro01.png" alt="소개이미지">
            </picture>
            <h2>게시글 작성하기</h2>
            <p class="intro__text">
                좋아하는 사람과 좋은 시간을,
                소중한 사람과 소중한 시간을, 
                변화는 있어도 변함은 없기를
            </p>
        </div>

        <div class="board__inner">
                <div class="board__Write">
                    <form action="boardWriteSave.php" name="boardWriteSave" method="post">
                        <fieldset>
                            <legend class="blind">게시글 작성하기</legend>
                            <div>
                                <label for="board__title">제목</label>
                                <input type="text" id="board__title" name="boardTitle" class="inputStyle" required>
                            </div>
                            <div>
                                <label for="boardContents">내용</label>
                                <textarea name="boardContents" id="boardContents" class="inputStyle" rows="20" required></textarea>
                            </div>
                            <button type="submit" class="btnStyle3">글쓰기</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </main>
        <!-- main -->
    
    </main>
    <!-- main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>