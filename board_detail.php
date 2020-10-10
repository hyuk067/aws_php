<?php
// 세션 스타트
session_start();
include "db_start.php";

$query = "select * from board where no= '".$_GET['no']."'";
$res = $db->query($query);
$row = mysqli_fetch_assoc($res);
?>

<html>
    <head>
        <body>
            <tr>
                <td><?=$row['u_title']?></td>
                <td><?=$row['u_content']?></td>
            </tr>
        </body>
    </head>
</html>