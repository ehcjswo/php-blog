<?php
    $host = "localhost";
    $user = "root";
    $pw = "root";
    $db = "phpclass";
    $connect = new mysqli($host,$user,$pw,$db);
    $connect -> set_charset("utf-8");
    if(mysqli_connect_errno()){
        echo "Database Connect false";
    } else {
        echo "Database Connect True";
    }
?>
<?php
    // phpinfo()
    // $host = "localhost";
    // $user = "ehcjswo123";
    // $pw = "zosdb12!";
    // $db = "ehcjswo123";
    // $connect = new mysqli($host, $user, $pw, $db);
    // $connect -> set_charset("utf-8");

    // if(mysqli_connect_errno()){
    //     echo "Database Connect false";
    // } else {
    //     echo "Database Connect True";
    // }
?>