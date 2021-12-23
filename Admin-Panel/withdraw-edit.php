<?php  include('user-header.php');?>

<h3>Change Withdraw Data </h3> <hr style="height: 2px; margin:0">

<div class="row">
     <div class="col-md-3 text-left">
      
    </div>




<?php
    include "config.php";

    $get_id = $_REQUEST['id']; 

    $query3 = "SELECT * FROM withdraw_2 WHERE id = $get_id";

    $result3 = mysqli_query($connection, $query3) or die("Failed.");

 
?>

<?php
     
      
         while($row = mysqli_fetch_assoc($result3)){
?>

 
    <div class="col-md-6 text-center">
        <div class="card bg-dark mt-3 text-light p-3 ">
                
        <form action="withdraw-update.php" method="post">
                <input style="font-size:large" name="hidden_id_update" value="<?php echo $row['id'] ?>" class="p-2 form-control mb-2" type="hidden" > 
                <input style="font-size:large" name="user_id" value="<?php echo $row['user_id'] ?>" class="p-2 form-control mb-2" type="text" > 
                <input style="font-size:large" name="transection_id" value="<?php echo $row['Transection_ID'] ?>" class="p-2 form-control mb-2" type="text"> 
                <input style="font-size:large" name="payment_method" value="<?php echo $row['Payment_method'] ?>" class="p-2 form-control mb-2" type="text"> 
                <input style="font-size:large" name="balance" value="<?php echo $row['Balance'] ?>" class="p-2 form-control mb-2" type="text"> 
                <input style="font-size:large" name="amount" value="<?php echo $row['Amount_BDT'] ?>" class="p-2 form-control mb-2" type="text"> 
                <select name="Status" id="" class="p-2 form-control mb-2">
                    <option value="Approved">Approved</option>
                    <option value="Hold">Hold</option>
                </select>
                <select name="action" id="" class="p-2 form-control mb-2">
                    <option value="Good">Good</option>
                    <option value="Not Good">Not Good</option>
                </select>
                <input type="submit" name="add-withdraw" class="btn btn-danger mt-3 btn-block mb-2" value="Update">
              </form>
        </div>
    </div>


        
<?php }  ?>



</div>




    <div class="col-md-3 text-left">
      
    </div>

</div>


<?php  include('user-footer.php');?>