<?php
   require_once('check_session.php');
   check_session_with_target('manage.php');

   $UID = $_POST["uid"];
   $today = date("Y-m-d");
   
   $query = "UPDATE `soberdiary`.`Alcoholic` SET `DropOut` = '1', ".
            "`DropOutDate` = '".$today."'".
            "WHERE `Alcoholic`.`UserId` = '".$UID."';";

   include_once('connect_db.php');
   $conn = connect_to_db();
   $success = mysql_query($query);
   mysql_close($conn);

   if($success)
      echo "Drop ".$UID." Success";
   else
      echo "Drop ".$UID." Fail";
?>
