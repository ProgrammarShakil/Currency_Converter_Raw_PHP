<?php
session_start();
?>

<?php  include('user-header.php');
?>

<h3>Withdraw History</h3>
<hr style="height: 2px;">

<div class="row">
    <div class="col-md-12">
        <div class="card bg mt-3 text-dark p-3 ">


<?php
    include "config.php";
    $user_id = $_SESSION['user_id'];
    $query2 = "SELECT * FROM withdraw_2 WHERE user_id = $user_id";
    $result2 = mysqli_query($connection, $query2) or die("Failed.");
    $count = mysqli_num_rows($result2);

    if($count > 0){
 
?>


            <table class="table table-bordered table-dark text-light">
                <tr>
                    <th>Serial No</th>
                    <th>Your ID</th>
                    <th>Transection ID</th>
                    <th>Payment Method</th>
                    <th>Balance</th>
                    <th>Amount (BDT)</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Time and Date</th>
                    
                </tr>

<?php
         $serial = 1;
         while($row = mysqli_fetch_assoc($result2)){
?>
                <tr>
                 <td class='id'><?php echo  $serial++ ?></td>
                 <td><?php echo $row['user_id'] ?></td>
                    <td><?php echo $row['Transection_ID'] ?></td>
                    <td><?php echo $row['Payment_method'] ?></td>
                    <td><?php echo  "$".  $row['Balance'] ?></td>
                    <td><?php echo $row['Amount_BDT']?></td>
                    <td><?php echo $row['Status'] ?></td>
                    <td><?php echo $row['Action'] ?></td>
                    <td><?php echo $row['Time_Date'] ?></td>
                </tr>
                
<?php }  ?>
<?php 
  
}else{
    echo " <div class='text-center mt-5 bg-dark p-5 text-light' style='border-radius: 5px;'> You Have No Withdraw Data. </div> ";
     } 
?>   
            </table>
        </div>
    </div>
</div>
<?php  include('user-footer.php');?>
