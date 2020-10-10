<?php
// 세션 스타트
session_start();

include "db_start.php";

$query = "insert into board(w_user, u_title, u_content) values('".$_SESSION['u_id']."', '".$_POST['u_title']."', '".$_POST['u_content']."' )";

$res = $db->query($query);

// $row > 변수명
// mysqli_fetch_assoc > 쿼리문 결과값을 가지고오는 함
// $row = mysqli_query($res);

if($res == TRUE) {      // 로그인이 성공한경우
    echo "글쓰기성공";
}else{                        // 로그인이 실패한경우
    echo "글쓰기실패";
}
?>
    <script>
        location.href="board.php";
    </script>
