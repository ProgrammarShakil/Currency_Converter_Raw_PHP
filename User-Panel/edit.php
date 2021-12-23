<?php  include('user-header.php');?>

<h3>Change Link </h3> <hr style="height: 2px; margin:0">

<div class="row">
     <div class="col-md-3 text-left">
      
    </div>




<?php
    include "config.php";

    $get_id = $_REQUEST['id']; 

    $query3 = "SELECT * FROM payment_box WHERE payment_id = $get_id";

    $result3 = mysqli_query($connection, $query3) or die("Failed.");

 
?>

<?php
      
         while($row = mysqli_fetch_assoc($result3)){
?>


    <div class="col-md-6 text-left">
        <div class="card bg-dark mt-3 text-light p-3 ">
                
              <form action="update.php" method="GET">
                <input type="hidden" name='hidden_id' value='<?php echo $get_id?>'>
                <input style="font-size:large" name="payment_name" class="p-2 form-control mb-2" type="text" value="<?php echo  $row['payment_name'] ;?>"> 
                <input style="font-size:large" name="payment_code" class="p-2 form-control" type="text" value="<?php echo  $row['payment_code'] ;?>"> 

                <h5 class="mt-2">Link Status</h5>
                <select class="border p-2" name="" id="" style="width: 100%;">
                    <Option value="1">Enable</Option>
                    <Option value="2">Disable</Option>
                </select>

                <input type="submit" name="update" class="btn btn-danger mt-3 btn-block" value="Save New Link">
              </form>
        </div>
    </div>


        
<?php }  ?>



</div>




    <div class="col-md-3 text-left">
      
    </div>

</div>


<?php  include('user-footer.php');?>