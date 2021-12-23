<?php  include('user-header.php');?>

<h3>Change Status </h3> <hr style="height: 2px; margin:0">

<div class="row">
     <div class="col-md-3 text-left">
      
    </div>




<?php
    include "config.php";

    $get_id = $_REQUEST['id']; 

    $query3 = "SELECT * FROM user_sent_data WHERE id = $get_id";

    $result3 = mysqli_query($connection, $query3) or die("Failed.");

 
?>

<?php
     
      
         while($row = mysqli_fetch_assoc($result3)){
?>


    <div class="col-md-6 text-center">
        <div class="card bg-dark mt-3 text-light p-3 ">
                
              <form action="update-status.php" method="GET">
                <input type="hidden" name='hidden_id' value='<?php echo $get_id?>'>
                <label style="font-size: large;" class="text-center" for="">Add Status</label> <br>

                <select name="status" id="" value="<?php echo $row["status"]; ?>"  class="form-control"> 
                   <?php 
                   
                   if($row["status"] == 0 ){
                       echo "<option  value='0' selected> Pending </option>";
                       echo "<option value='1'> Approved </option>";
                       echo "<option value='2'> Rejected </option>";
                    }elseif ($row["status"] == 1 ){
                        echo "<option  value='1' selected> Approved </option>";
                        echo "<option value='0'> Pending </option>";
                        echo "<option value='2'> Rejected </option>";
                    }elseif ($row["status"] == 2 ){
                        echo "<option  value='1' > Approved </option>";
                        echo "<option value='0' > Pending </option>";
                        echo "<option value='2' selected> Rejected </option>";
                    }
                   

                    ?>
                </select>


                <label style="font-size: large;" class="text-center mt-2" for="">Add Reason</label>
                <textarea  value="<?php echo $row['id']; ?> "  class="form-control" name="reason" id="" cols="10" rows="5"></textarea>

                <input type="submit" name="update" class="btn btn-danger mt-3 btn-block" value="Save">
              </form>
        </div>
    </div>


        
<?php }  ?>



</div>




    <div class="col-md-3 text-left">
      
    </div>

</div>


<?php  include('user-footer.php');?>