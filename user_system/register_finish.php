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

if($_SESSION['username'] != null)
{
        //將$_SESSION['username']丟給$id
        //這樣在下SQL語法時才可以給搜尋的值
        $id = $_SESSION['username'];
        //若以下$id直接用$_SESSION['username']將無法使用
        $sql = "SELECT * FROM members_table where username='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
    
        echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
        echo "email：<input type=\"text\" name=\"id\" value=\"$row[1]\" />(此項目無法修改) <br>";
        echo "password：<input type=\"password\" name=\"pw\" value=\"$row[2]\" /> <br>";
        echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
        echo "</form>";
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}

    $id = a( $_POST['email'] );
    $pw = $_POST['pw'];
echo $id . "," . $pw;
    //判斷帳號密碼是否為空值
    //確認密碼輸入的正確性
    if ($id != null && $pw != null) {
            //新增資料進資料庫語法
            $sql = "insert into members (email, password) values ('$id', '$pw')";

            if (mysql_query($sql)) {
                echo '新增成功!';
                //echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
            } else {
                echo '新增失敗!';
                echo 'error:<p>' . mysql_error() . '</p>';
                //echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
            }
    } else {
        echo '您無權限觀看此頁面!';
        //echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
?>
