<?php
include "config.php"; 

    if (!($connection)) {
        die('not connected');
    }

    if(isset($_REQUEST['update'])){
        $hidden_id = $_REQUEST['hidden_id'];
        $payment_name = $_REQUEST['payment_name'];
        $account_code = $_REQUEST['account_code'];


       $update_query = "UPDATE payment_box SET payment_name = '$payment_name', account_code = '$account_code' WHERE payment_id = $hidden_id ";

       $final_update_query = mysqli_query($connection,$update_query);

       if ($final_update_query) {
           header("location: show.php");
       }
    }
    

?>