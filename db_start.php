<?php
    $db = new mysqli('127.0.0.1', 'root', 'root1234', 'study');
    mysqli_query($db, "set names utf8");

/*    if (mysqli_connect_errno($db))
        echo 'DB 연결실패';
    else
        echo 'DB 연결성공';
*/
?>
