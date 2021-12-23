<?php
include "config.php";

    if (!($connection)) {
        die('not connected');
    }

    if(isset($_REQUEST['add-withdraw'])){
        $hidden_id = $_REQUEST['hidden_id_update'];
        $user_id = $_REQUEST['user_id'];
        $transection_id = $_REQUEST['transection_id'];
        $payment_method = $_REQUEST['payment_method'];
        $balance = $_REQUEST['balance'];
        $amount = $_REQUEST['amount'];
        $Status = $_REQUEST['Status'];
        $action = $_REQUEST['action'];


       $update_query = "UPDATE withdraw_2 SET user_id = $user_id, Transection_ID = '$transection_id', Payment_method = '$payment_method', Balance = '$balance', Amount_BDT = '$amount', Status = '$Status', Action = '$action' WHERE id = $hidden_id ";

       $final_update_query = mysqli_query($connection,$update_query);

       if ($final_update_query) {
           header("location: withdraw.php");
       }
    }
    

?>