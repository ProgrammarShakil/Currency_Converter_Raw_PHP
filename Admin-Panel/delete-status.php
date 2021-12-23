
<?php
   include "config.php"; 

    if (!($connection)) {
        die('not connected');
    }
    $recv = $_REQUEST['id'];
    
    $query = "DELETE FROM user_sent_data WHERE id = $recv";
    $run_delete_query = mysqli_query($connection, $query);

    if($run_delete_query){
        header("location: transection.php");
    }


?>
