<?php  include('user-header.php');?>

<div class="row">
    <div class="col-md-6">
        <h3>Show Details </h3> 
    </div>
    <div class="col-md-6 text-end">
        <h3 class="text-primary"><a href="add-code.php">Add Code</a></h3>
    </div>
</div> 
<hr style="height: 2px; margin:0">


<div class="row">



<?php
    include "config.php";
    $query3 = "SELECT * FROM payment_box ORDER BY payment_id DESC";

    $result3 = mysqli_query($connection, $query3) or die("Failed.");

 
?>

<?php
         $serial = 1;
         while($row = mysqli_fetch_assoc($result3)){
?>



            <div class="col-md-6 text-left">
                <div class="card bg-primary mt-3 text-light p-3">
                        <h2><?php echo  $row['payment_name'] ;?></h2>
                        <input style="font-size:large" class="p-2" type="text" disabled value="<?php echo  $row['account_number'] ;?>">
                        <div>
                            <a class="btn btn-danger mt-3"  href="edit.php?id=<?php echo  $row['payment_id'] ;?>" >Change</a>
                            <a onclick="return confirm('Are you sure?')" class="btn btn-danger mt-3"  href="delete-code.php?id=<?php echo  $row['payment_id'] ;?>" >Delete</a>
                        </div>
                </div>
            </div>

    
<?php }  ?>



</div>





<?php  include('user-footer.php');?>