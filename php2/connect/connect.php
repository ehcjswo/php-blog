<?php
    // phpinfo()
    // $host = "localhost",
    // $user = "root",
    // $pw = "root",
    // $db = "getmysql",
    // $connect = new mysql($host, $suer, $pw, $db);
    // $connect->set_charset("utf-8");
    
    // if(mysqli_connect_errno()){
    //     echo "database Connect False"
    // }else{
    //     echo "database Connect True"
    // }

    // $host = "localhost";
    // $user = "root";
    // $pw = "root";
    // $db = "phpClass";
    // $connect = new mysqli($host, $user, $pw, $db);
    // $connect -> set_charset("utf-8");

    // if(mysqli_connect_errno()){
    //     echo "database Connect false";
    // }else{
    //     // echo "database Connect True";
    // }
?>

<?php
    // phpinfo()
    $host = "localhost";
    $user = "ehcjswo1";
    $pw = "zosdb12!";
    $db = "ehcjswo1";
    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("utf-8");

    if(mysqli_connect_errno()){
        echo "Database Connect false";
    } else {
        // echo "Database Connect True";
    }
?>