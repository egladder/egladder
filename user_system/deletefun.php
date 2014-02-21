<?php echo 'delete seccessful!!' ?>
<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    include("mysql_connection.php");

    //$id = '取得$row[1]';
    $pw =
?>
    document.location.href.split('?')[1].split('=')[1];
<?php
    //新增資料進資料庫語法
    $sql = "DELETE FROM members WHERE password = $pw";

    if (mysql_query($sql)) {
        echo '刪除成功!';
        //echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    } else {
        echo '刪除失敗!';
        echo 'upload!success!'
        echo 'error:<p>' . mysql_error() . '</p>';
        //echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }

?>
