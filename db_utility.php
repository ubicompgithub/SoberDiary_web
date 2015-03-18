<?php

// utility functions for database
// be sure mysql is connected before using

// notice the SQL injection
function getTableData($userId, $table_name){
   $query = "SELECT * FROM $table_name WHERE `UserId` = '$userId' ORDER BY `Timestamp` ASC";
   $result = mysql_query($query);
   $data = array();
   while($row = mysql_fetch_assoc($result))
      $data[$row["Timestamp"]] = $row;
   return $data;
}

?>
