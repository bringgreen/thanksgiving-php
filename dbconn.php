<?php
    $db_host = 'team4phpdb.ctqqsstwbq6p.sa-east-1.rds.amazonaws.com';
    $db_user = 'admin';
    $db_pass = '1qaz2wsx';
    $db_name = 'web01';

    $con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

    // if (!$con) {
    //     echo "<script>alert(\"DB 접속 오류\");</script>";
    // }
    // else {
    //     echo "<script>alert(\"DB 접속 성공\");</script>";
    // }
?>
