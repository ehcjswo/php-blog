<?php
    $host = "localhost";
    $user = "root";
    $pw = "root";
    $db = "db";
    $connect = new mysqli($host,$user,$pw,$db);
    $connect -> set_charset("utf-8");
    if(mysqli_connect_errno()){
        echo "Database Connect false";
    } else {
        // echo "Database Connect True";
    }
?>
<?php
    // phpinfo()
    // $host = "localhost";
    // $user = "ID";
    // $pw = "PASS";
    // $db = "ID";
    // $connect = new mysqli($host, $user, $pw, $db);
    // $connect -> set_charset("utf-8");

    // if(mysqli_connect_errno()){
    //     echo "Database Connect false";
    // } else {
    //     echo "Database Connect True";
    // }
?>