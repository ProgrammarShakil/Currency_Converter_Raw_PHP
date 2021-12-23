<?php
include "config.php";

    if (!($connection)) {
        die('not connected');
    }

    if(isset($_REQUEST['update'])){
        $hidden_id = $_REQUEST['hidden_id'];
        $status = $_REQUEST['status'];
        $reason = $_REQUEST['reason'];


       $update_query = "UPDATE user_sent_data SET status = '$status', reason = '$reason' WHERE id = $hidden_id ";

       $final_update_query = mysqli_query($connection,$update_query);

       if ($final_update_query) {
           header("location: transection.php");
       }
    }
    

?>