<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    include "db_start.php";
    var_dump($_POST);

    $query = "insert into member set
              u_id = '".$_POST['u_id']."',
              u_pw = '".$_POST['u_pw']."',
              u_name = '".$_POST['u_name']."'
             ";

    // 위 방식은 SQL인젝션이 공격 가능한 예제

    $db->query($query);
?>

<script>
    location.href="board.php";
</script>
