<?php
// 세션 스타트
session_start();

include "db_start.php";

$query = "select * from board";
//쿼리문 호출
$res = $db->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>게시판 리스트</title>
</head>
<body>
<table border="1">
    <tr><td>=================게시판=================</td></tr>
    <tr><td>
            <ol>
                <?php
                    while ($row=mysqli_fetch_assoc($res)){
                ?>
                <li><a href="board_detail.php?no=<?=$row['no']?>"><?=$row['u_title']?></li>
                <?php
                    }
                ?>
            </ol>
        </td></tr>
    <tr><td>=======================================</td></tr>
    <tr><td><a href="/board_write.php">글쓰기</a></td></tr>
</table>
</body>
</html>