<?php
    session_start();
?>

<?php
    if($_SESSION['u_id'] == NULL) {
?>
    <a href="/join.php">회원가입</a>
    <a href="/login.php">로그인</a>

<?php
    } else {
?>
    <?php echo $_SESSION['u_name']?>님 환영합니다.
<?php
    }
?>

<a href="/movie.php">네이버영화</a>
<a href="/board.php">게시판</a>

