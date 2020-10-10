<?php
    // 세션 스타트
    session_start();

    include "db_start.php";

    $query = "select * from member where u_id = '".$_POST['u_id']."' and u_pw = '".$_POST['u_pw']."'";
    $res = $db->query($query);

    // $row > 변수명
    // mysqli_fetch_assoc > 쿼리문 결과값을 가지고오는 함
    $row = mysqli_fetch_assoc($res);

    if($res->num_rows > 0) {      // 로그인이 성공한경우
        // 세션을 굽는방법
        $_SESSION['u_id'] = $_POST['u_id'];
        $_SESSION['u_name'] = $row['u_name'];

        echo "로그인성공";
    }else{                        // 로그인이 실패한경우
        echo "로그인실패";
    }
?>
