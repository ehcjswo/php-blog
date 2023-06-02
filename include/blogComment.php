<div class="cate">
    <h4>최신 댓글</h4>
    <ul>
        <?php
            $blogNew = "SELECT * FROM blogcomment WHERE commentDelete = 0 ORDER by commentID DESC LIMIT 4";
            $blogNewResult = $connect -> query($blogNew);

            // echo "<pre>";
            // var_dump($blogNewResult);
            // echo "</pre>";

            foreach($blogNewResult as $blog){ ?>
                <li>
                    <a href="blogView.php?blogId=<?=$blog['blogID']?>">
                        <span><?=$blog['commentMsg']?></span>
                        <br>
                        <span>-<?=$blog['commentName']?>-</span>
                    </a>
                </li>
           <?php }
        ?>
    </ul>
</div>