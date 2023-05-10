<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

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
            <div class="intro__inner center">
                <picture class="intro__images small">
                    <source srcset="../assets/img/joinEnd01.png, ../assets/img/joinEnd01@2x.png 2x, ../assets/img/joinEnd01@3x.png 3x"/>
                    <img src="../assets/img/joinEnd01.png" alt="게시판이미지">
                </picture>
                <h2>게시판</h2>
                <p class="intro__text">
                    웹 디자이너, 웹 퍼블리셔, 프론트앤드 개발자를 위한 게시판입니다.
                    관련된 사항은 여기서 확인하세요!
                </p>
            </div>
            <!-- intro__inner -->

    <div class="board__inner">
                <div class="board__View">
                    <table>
                        <colgroup>
                            <col style="width: 20%">
                            <col style="width: 40%">
                        </colgroup>
                        <tbody>
                            <!-- <tr>
                                <th>제목</th>
                                <td>게시판 제목입니다.</td>
                            </tr>
                            <tr>
                                <th>등록자</th>
                                <td>해린남편</td>
                            </tr>
                            <tr>
                                <th>등록일</th>
                                <td>2023-04-24</td>
                            </tr>

                            <tr>
                                <th>조회수</th>
                                <td>110</td>
                            </tr>
                            <tr>
                                <th>내용</th>
                                <td>HTML, CSS, JavaScript 등의 프론트앤드 기술 습득 프론트앤드 개발자가 되기 위해서는 HTML, CSS, JavaScript 등의 프론트앤드 기술을 숙달해야 합니다. 이를 위해서는 온라인 강의, 책, 무료 강의 등을 활용하여 기술 습득을 할 수 있습니다.
                                    개인 프로젝트 경험 쌓기 HTML, CSS, JavaScript 등의 기술을 습득한 후에는 개인 프로젝트를 진행하여 경험을 쌓아야 합니다. 이를 통해 자신의 역량을 증명할 수 있으며, 이력서 작성 시에도 도움이 됩니다.
                                    오픈소스 참여 오픈소스 프로젝트에 참여하여 기술을 발전시키고, 커뮤니티와의 교류를 통해 좋은 인맥을 형성할 수 있습니다. 이를 통해 자신의 기술력을 인정받고, 취업 기회를 얻을 수도 있습니다.
                                    이력서 작성 및 포트폴리오 제작 자신의 프로젝트 경험과 오픈소스 참여 경험을 바탕으로 이력서와 포트폴리오를 작성해야 합니다. 이력서와 포트폴리오는 자신의 역량을 증명하는 중요한 자료이므로, 신중하게 작성하여야 합니다.
                                    취업 지원 및 면접 대비 이력서를 작성하고 포트폴리오를 제작한 후에는 취업 지원을 해야 합니다. 이때는 적극적으로 여러 기업에 지원하며, 면접 대비를 철저히 해야 합니다. 면접 시에는 자신의 경험과 역량을 자세히 설명하고, 기술적인 문제에 대한 해결 방법을 제시할 수 있어야 합니다.</td>
                            </tr> -->

<?php
if(isset($_GET['boardID'])) {
    $boardID = $_GET['boardID'];

    //보드 뷰 + 1
    $sql = "UPDATE board SET boardView = boardView + 1 WHERE boardID = {$boardID}";
    $connect -> query($sql);
    
    $sql = "SELECT b.boardContents, b.boardTitle, m.youName, b.regTime, b.boardView FROM board b JOIN members m ON(m.memberID = b.memberID) WHERE b.boardID = {$boardID}";
    
    $result = $connect -> query($sql);
    
    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);
        
        // $count = $result -> num_rows;

        // echo "<pre>";
        // var_dump($info);
        // echo "</pre>";

        echo "<tr><th>제목</th><td>".$info['boardTitle']."</td></tr>";

        echo "<tr><th>등록자</th><td>".$info['youName']."</td></tr>";
        
        echo "<tr><th>등록일</th><td>".date('Y/m/d', $info['regTime'])."</td></tr>";
        
        echo "<tr><th>조회수</th><td>".$info['boardView']."</td></tr>";

        echo "<tr><th>내용</th><td>".$info['boardContents']."</td></tr>";

    } 
}else {
    echo "<tr><td colspan='4'>게시글이 없습니다.</td></td>";
}
?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="board__btn mb100">
                <?php if (isset($_GET['boardID'])) { ?>
                    <a href="boardModify.php?boardID=<?=$_GET['boardID']?>" class="btnStyle3">수정하기</a>
                    <a href="boardRemove.php?boardID=<?=$_GET['boardID']?>" class="btnStyle3" onclick="return confirm('정말 삭제할거니?')">삭제하기</a>
                <?php } else { ?>
                    <a href="boardModify.php" class="btnStyle3">수정하기</a>
                    <a href="boardRemove.php" class="btnStyle3">삭제하기</a>
                <?php } ?>
                <a href="board.php" class="btnStyle3">목록보기</a>
            </div>
        </main>
    <!-- main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>