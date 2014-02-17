<?php 
	include("mysql_connection.php");
    
    $sql = "SELECT * FROM members";
    $result = mysql_query($sql);
    //$row = mysql_fetch_row($result);

        while ($row = mysql_fetch_row($result)) {
            echo "<p>Email: $row[1], PW: $row[2]</p>"; 
        }
?>