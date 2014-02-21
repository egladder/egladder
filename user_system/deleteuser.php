<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
	include("mysql_connection.php");
    
    $sql = "SELECT * FROM members";
    $result = mysql_query($sql);
    //$row = mysql_fetch_row($result);

        while ($row = mysql_fetch_row($result)) {
            echo "<p>Email: $row[1], PW: $row[2] <a href='deletefun.php?pw=$row[2]'>delete</a></p>"; 
        }
?>