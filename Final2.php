<?php
   $dbhost = 'localhost:3036';
   $dbuser = 'Kevin Liu';
   $dbpass = 'KevinPassword';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   echo 'Connected successfully';
   
   $sql = 'CREATE Database DataTable';
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not create database: ' . mysql_error());
   }
   
   echo "Database DataTable created successfully\n";
   mysql_close($conn);
?>