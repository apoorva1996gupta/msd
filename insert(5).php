<?php
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = 'apoorva123';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'INSERT INTO student '.
      '(first_name,last_name,department) '.
      'VALUES ( "guest", "XYZ", "cse" )';
      
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysql_close($conn);
?>
