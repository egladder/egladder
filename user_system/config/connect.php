<?php 
	require 'app_config.php';

	mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD ,DATABASE_NAME)
		or die('<p>Error connecting to database' . mysql_error() . '</p>')

	echo '<p>connected to MYSQL!</p>';

	mysql_query("SET NAMES utf8");
	
	mysql_select_db(DATABASE_NAME)
		or die('<p>Error selecting the database' . DATABASE_NAME . mysql_error() .  '</p>');

	echo '<p>Connected to MYSQL, using database' . DATABASE_NAME . '</p>';
?>