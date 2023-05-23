<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    
    // include "../connect/joinCheck.php";
    
    // if(!isset($_SESSION['memberID'])){

    //     echo "<script>alert('로그인이 필요한 페이지 입니다.')</script>";
    //     echo "<script>location.href='../login/login.php'</script>";

    //     // Header("Location:../login/login.php");
    // }
    
    $memberID = $_SESSION['memberID'];

    // $nickName = $_SESSION['nickName'];

    $sql = "SELECT * FROM categorie WHERE memberID = '$memberID'";
    $result = $connect -> query($sql);
    $resultInfo = $result -> fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>내가 등록한 제품 목록</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <style>
        body {
            font-family: sans-serif;
        }

        #list__wrap {
            width: calc(100% - 30vw);
            margin: 160px auto 100px;
            /* background-color: #fff; */
        }

        .filters-button-group {
            width: 100%;
            display: flex;
            justify-content: space-between;
            /* margin: 0 auto; */
            margin-bottom: 80px;

        }
        
        .filters-button-group img {
            border: 1px solid #F797A2;
            border-radius: 10px;
            background-color: #fff;
            width: 100px;
            height: 100px;
            transition: all 0.2s;
            cursor: pointer;
        }
        .filters-button-group img:hover {
            transform: scale(1.15);
            border: 2px solid #F06171;
        }
        .filters-button-group .active {
            /* border: 3px solid #F06171; */
            box-shadow: 0 0 4px 3px #F797A2;
            border-radius: 15px;
        }
        .button {
            cursor: pointer;
        }
        #sorts {
            /* background-color: #000; */
            height: 100px;
        }
        #sorts button {
            /* display: inline-block; */
            background: none;
            /* margin: 0px 5px 50px 15px; */
            padding: 5px;
            color: #F06171;
            /* border-bottom: 3px solid #F06171; */
            box-shadow: 0 2px 2px -2px #F06171;
            transition: all 0.2s ease;
        }
        #sorts .button.active {
            box-shadow: 0px 5px 5px -5px #F06171;
        }

        /* ---- isotope ---- */

        .grid {
            /* border: 1px solid #333; */
            width: 92%;
            margin: 0 auto;
            /* background-color: #000; */
        }

        /* clear fix */
        .grid:after {
            content: '';
            display: block;
            clear: both;
        }

        /* ---- .element-item ---- */

        .element-item {
            /* position: relative; */
            /* float: left; */
            display: inline-block;
            width: 12vw;
            min-width: 220px;
            height: 330px;
            min-height: 330px;
            margin: 0px 0.35vw 40px 0.35vw;
            /* background-color: rgba(247, 151, 162, 0.07); */
            background-color: #fff;
            border: 1px solid #cacaca;
            
        }

        .element-item > * {
            margin: 0;
            padding: 0;
        }

        /* list */
        .list__img {
            height: 45%;
        }
        .list__img img{
            border-radius: 15px;
            padding: 10px 10px 0px 10px;
        }
        .list__text {
            /* margin-top: 20px; */
            height: 55%;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            
        }
        .list__text h5 {
            padding-top: 10px;
            width: 100%;
            height: 30%; 
            word-break: keep-all;
        }
        .list__text span {
            width: 100%;
            height: 30%;
            font-size: 30px;
            font-weight: 700;
            color: #F06171;
        }
        .list__text p {
            width: 100%;
            font-size: 15px;
            padding: 5px;
            color: #fff;
            text-align: left;
        }
        .list__bottom {
            background-color: #F797A2;
            width: 100%;
            display: flex;
            
        }
        .date {
            width: 60%;

        }
        .list__active {
            width: 40%;
            text-align: right;
            margin-top: 40px;
            /* background-color: #fff; */
        }
        .list__active a {
            color: #fff;
            padding: 5px;
            transition: all 0.2s;

        }
        .list__active a:hover {
            background-color: #F06171;
        }
    </style>
    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">
    <!-- SCRIPT -->
    <script defer src="../html/assets/js/common.js"></script>
</head>
<body >
    <main id="main" class="mt70">
        <?php include "../include/abbHeader.php" ?>
        <!-- //header -->
        <div class="info__logo">
            <h1>Abide By Beauty</h1>
        </div>
        <!-- //header -->
        
        <div id="list__wrap">
            <div class="button-group filters-button-group">
                <div class="slider__img active" data-filter="*"><img src="../html/assets/img/beauty_icon08.png" data-filter-value=".all" alt="아이콘8"></div>
                <div class="slider__img" data-filter=".lipstick"><img src="../html/assets/img/beauty_icon01.png" data-filter-value=".lipstick" alt="아이콘1"></div>
                <div class="slider__img" data-filter=".shampoo"><img src="../html/assets/img/beauty_icon02.png" data-filter-value=".shampoo" alt="아이콘2"></div>
                <div class="slider__img" data-filter=".sunscreen"><img src="../html/assets/img/beauty_icon03.png" data-filter-value=".sunscreen" alt="아이콘3"></div>
                <div class="slider__img" data-filter=".cleansing"><img src="../html/assets/img/beauty_icon04.png" data-filter-value=".cleansing" alt="아이콘4"></div>
                <div class="slider__img" data-filter=".makeup"><img src="../html/assets/img/beauty_icon05.png" data-filter-value=".makeup" alt="아이콘5"></div>
                <div class="slider__img" data-filter=".mask"><img src="../html/assets/img/beauty_icon06.png" data-filter-value=".mask" alt="아이콘6"></div>
                <div class="slider__img" data-filter=".cream"><img src="../html/assets/img/beauty_icon07.png" data-filter-value=".cream" alt="아이콘7"></div>
            </div>
            <div id="sorts" class="button-group">
                <button class="button" data-sort-by="name">이름순</button>
                <button class="button" data-sort-by="number">남은시간</button>
                <button class="button" data-sort-by="date">등록일</button>
            </div>
            <div class="grid">

            <?php foreach($result as $categorie){ ?>
                <div class="element-item transition <?=$categorie['productFilter']?>    " data-category="<?=$categorie['productFilter']?>">
                    <div class="list__img">
                        <img src="../html/assets/img/list__<?=$categorie['productFilter']?>.png" alt="크림">
                    </div>
                    <div class="list__text">
                        <h5 class="name"><?=$categorie['productName']?></h5>
                        <span class="number"><?=$categorie['productDday']?></span>
                        <div class="list__bottom">
                            <div class="date">
                                <p><?=$categorie['productRegist']?> ~</p>
                                <p>2024/03/05</p>
                            </div>
                            <div class="list__active">
                                <a href="#">수정</a>
                                <a href="#">삭제</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

                
            </div>     
        </div>
    </main>
    <!-- //main -->


    <script>
        var $grid = $('.grid').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows',
            getSortData: {
                name: '.name',
                symbol: '.symbol',
                number: '.number parseInt',
                category: '[data-category]',
                date: '.date p parseInt',
            }
        });

        $('#sorts').on('click', 'button', function() {
            var sortByValue = $(this).attr('data-sort-by');
            var sortAscending = true; // 오름차순은 true, 내림차순은 false

            // 현재 정렬 상태 확인
            var currentSortBy = $grid.data('isotope').options.sortBy;
            var currentSortAscending = $grid.data('isotope').options.sortAscending;

            // 현재 정렬 상태와 클릭한 버튼의 정렬 속성이 같으면서 오름차순일 때 내림차순으로 변경
            if (currentSortBy === sortByValue && currentSortAscending) {
                sortAscending = false;
            }

            $grid.isotope({ 
                sortBy: sortByValue, 
                sortAscending: sortAscending 
            });
        });

        // init Isotope
        var $grid = $('.grid').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows'
        });
        // filter functions
        var filterFns = {
        // show if number is greater than 50
        numberGreaterThan50: function() {
            var number = $(this).find('.number').text();
            return parseInt( number, 10 ) > 50;
        },
        // show if name ends with -ium
        ium: function() {
            var name = $(this).find('.name').text();
            return name.match( /ium$/ );
        }
        };
        // bind filter button click
        $('.filters-button-group').on( 'click', 'div', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $grid.isotope({ filter: filterValue });
        });
        // change is-checked class on buttons
        $('.button-group').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'button, div',   function() {
                $buttonGroup.find('.active').removeClass('active');
                $( this ).addClass('active');
            });
        });
    </script>
</body>
</html>