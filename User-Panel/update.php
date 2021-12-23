<?php
include "config.php";

  
    if(isset($_REQUEST['update'])){
        $hidden_id = $_REQUEST['hidden_id'];
        $payment_name = $_REQUEST['payment_name'];
        $payment_code = $_REQUEST['payment_code'];


       $update_query = "UPDATE payment_box SET payment_name = '$payment_name', payment_code = '$payment_code' WHERE payment_id = $hidden_id ";

       $final_update_query = mysqli_query($connection,$update_query);

       if ($final_update_query) {
           header("location: show.php");
       }
    }
    

?>