
<?php
   include "config.php"; 

    if (!($connection)) {
        die('not connected');
    }
    $recv = $_REQUEST['id'];
    
    $query = "DELETE FROM payment_box WHERE payment_id = $recv";
    $run_delete_query = mysqli_query($connection, $query);

    if($run_delete_query){
        header("location: show.php");
    }


?>
