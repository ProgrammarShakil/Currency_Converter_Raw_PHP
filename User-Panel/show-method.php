<?php 

session_start();
$_SESSION['user_id'];

?>

<?php  include('user-header.php');?>

<div class="row">

<?php
    include "config.php";
$user_sent_id = $_SESSION['user_id'] ;
 $query3 = "SELECT * FROM add_user_method WHERE $user_sent_id =  '{$user_sent_id}' ORDER BY id DESC";


    $result3 = mysqli_query($connection, $query3) or die("Failed.");

?>

<?php
         while($row = mysqli_fetch_assoc($result3)){
?>

<div class="col-md-3 text-left">
    <div class="card bg-dark mt-3 text-light">
        <div><?php if ($row['method_name'] == 'Bkash') {
            echo ' <img class="p-2" src="../images/d.png" width="70px" style="border-radius:15px;"> ';
            echo  $row['method_name'] ;
            }elseif  ($row['method_name'] == 'Rocket'){
                echo ' <img class="p-2" src="../images/dutch-bangla.png" width="70px" style="border-radius:15px;"> ';
                echo  $row['method_name'] ;
            }
            elseif  ($row['method_name'] == 'Nogod'){
                echo ' <img class="p-2" src="../images/nn.png" width="70px" style="border-radius:15px;"> ';
                echo  $row['method_name'] ;
            }elseif  ($row['method_name'] == 'Bank'){
                echo ' <img class="p-2" src="../images/b.png" width="70px" style="border-radius:15px;"> ';
                echo  $row['method_name'] ;
            }else{
                echo "";
            }
            ?> <a onclick="return confirm('Are You Sure ?')" class="ml-5 text-warning" href="dlt-acc-num.php?did=<?php echo $row['id'] ?>" style="text-decoration: none;">Delete</a>
        </div>
        <div>
            <?php 
                echo ' <div class="p-2 mx-2"> Number : '  .$row['method_number'].  '</div> ';
            ?>
            
        </div>
        
    </div>
    
</div>


    
<?php }  ?>

<div class="row">
    <div class=" mt-3">
        <hr>
        <a class="btn btn-danger" href="add-method.php">Add New Method</a>
    </div>
</div>




<?php  include('user-footer.php');?>