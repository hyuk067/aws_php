<?php
    // 세션 스타트
    session_start();
    include "db_start.php";

    $query = "select * from naverMovie";
    $res = $db->query($query);

    if($res){
        echo "값 가져오기 성공";
    }else{
        echo "실패";
    }

?>

<table border="1">
    <tr>
        <td colspan="5" style="text-align:center;">NAVER MOVIE 랭킹</td>
    </tr>
<?php
    while($row=mysqli_fetch_assoc($res)){
?>

    <tr>
        <td><?=$row['no']?></td>
        <td><?=$row['title']?></td>
        <td><?=$row['date']?></td>
        <td><?=$row['score']?></td>
        <td>
            <img src="<?=$row['img_src']?>"></td>
    </tr>
    <?php
}
?>
</table>

