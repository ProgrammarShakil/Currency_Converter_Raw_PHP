
<?php
   include "config.php"; 

    $recv = $_REQUEST['did'];
    
    $query = " DELETE FROM add_user_method WHERE id = $recv";
    $run_delete_query = mysqli_query($connection, $query);

    if($run_delete_query){
        header("location: show-method.php");
        }


?>
