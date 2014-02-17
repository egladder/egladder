<?php
	require '../config/connect.php';

	$email = trim($_REQUEST['email']);
	$password = trim($_REQUEST['password']);
	$confirm_password = trim($_REQUEST['confirm_password']);
	$name = trim($_REQUEST['name']); 
	$phone = trim($_REQUEST['phone']);
	$sex = trim($_REQUEST['sex']);
	$birth = trim($_REQUEST['birth']);

	if ($id != null && $pw != null && $pw2 != null && $pw == $pw2) {
        //新增資料進資料庫語法
        $insert_sql = "INSERT INTO user (username, password, telephone, address, other) VALUES ('$id', '$pw', '$telephone', '$address', '$other')";

        if ( mysql_query($insert_sql) ) {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        } else {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
	} else {
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
?>