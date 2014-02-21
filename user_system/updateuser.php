<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    include("mysql_connection.php");

    function a($email){
        // //vaild email ...
        if (preg_match('/^([.0-9a-z]+)@([0-9a-z]+).([.0-9a-z]+)$/i',$email) == true) {
        echo '格式正確'; 
        }else{
        echo '格式錯誤';
        }
        return $email; 
    }

    $id = a( $_POST['email'] );
    $pw = $_POST['pw'];
    //echo $id . "," . $pw;
    //判斷帳號密碼是否為空值
    //確認密碼輸入的正確性
    if ($id != null && $pw != null) {
            //新增資料進資料庫語法
            $sql = "UPDATE members SET password = $pw WHERE email = '$id'";

            if (mysql_query($sql)) {
                echo '修改成功!';
                //echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
            } else {
                echo '修改失敗!';
                echo 'error:<p>' . mysql_error() . '</p>';
                //echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
            }
    } else {
        echo '您無權限觀看此頁面!';
        //echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
?>
